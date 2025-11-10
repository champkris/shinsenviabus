<?php

namespace App\Http\Controllers;

use App\Models\CampaignSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = CampaignSubmission::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Date filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $submissions = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.index', compact('submissions'));
    }

    public function export(Request $request)
    {
        $query = CampaignSubmission::query();

        // Apply same filters as index
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $submissions = $query->orderBy('created_at', 'desc')->get();

        // Generate CSV
        $filename = 'shinsen_campaign_submissions_' . date('Y-m-d_H-i-s') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($submissions) {
            $file = fopen('php://output', 'w');

            // Add CSV headers
            fputcsv($file, ['ID', 'Name', 'Phone', 'Files Count', 'File Paths', 'Submission Date']);

            // Add data rows
            foreach ($submissions as $submission) {
                $filePaths = implode('; ', $submission->uploaded_files ?? []);
                fputcsv($file, [
                    $submission->id,
                    $submission->name,
                    $submission->phone,
                    count($submission->uploaded_files ?? []),
                    $filePaths,
                    $submission->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}
