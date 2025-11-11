<?php

namespace App\Http\Controllers;

use App\Models\CampaignSubmission;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return view('campaign.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'tried_shinsen' => 'required|boolean',
            'files' => 'required|array|min:1',
            'files.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $uploadedFilePaths = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('campaign_uploads', 'public');
                $uploadedFilePaths[] = $path;
            }
        }

        $submission = CampaignSubmission::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'tried_shinsen' => $validated['tried_shinsen'],
            'uploaded_files' => $uploadedFilePaths,
        ]);

        return redirect()->back()->with('success', 'ส่งข้อมูลเรียบร้อยแล้ว! ขอบคุณที่เข้าร่วมแคมเปญ Shinsen');
    }
}
