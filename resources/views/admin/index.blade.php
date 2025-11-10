<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ShinSen Campaign</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 2em;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            color: #ff6b35;
        }

        .stat-label {
            color: #666;
            margin-top: 5px;
        }

        .controls {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .controls form {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: end;
        }

        .form-group {
            flex: 1;
            min-width: 200px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: 600;
            font-size: 0.9em;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-size: 0.95em;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #ff6b35;
            color: white;
        }

        .btn-primary:hover {
            background: #ff5722;
        }

        .btn-success {
            background: #4caf50;
            color: white;
        }

        .btn-success:hover {
            background: #45a049;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .submissions-table {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #34495e;
            color: white;
        }

        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        tr:hover {
            background: #f9f9f9;
        }

        .image-gallery {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .image-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid #e0e0e0;
            transition: transform 0.2s;
        }

        .image-thumbnail:hover {
            transform: scale(1.1);
            border-color: #ff6b35;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .pagination a,
        .pagination span {
            padding: 8px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .pagination .active {
            background: #ff6b35;
            color: white;
            border-color: #ff6b35;
        }

        .pagination a:hover {
            background: #f0f0f0;
        }

        .no-results {
            padding: 40px;
            text-align: center;
            color: #666;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 40px;
            color: white;
            font-size: 40px;
            cursor: pointer;
        }

        .export-section {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.85em;
            font-weight: 600;
        }

        .badge-info {
            background: #e3f2fd;
            color: #1976d2;
        }

        @media (max-width: 768px) {
            .controls form {
                flex-direction: column;
            }

            table {
                font-size: 0.9em;
            }

            .image-thumbnail {
                width: 60px;
                height: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ShinSen Campaign - Admin Dashboard</h1>
            <a href="{{ route('campaign.index') }}" class="btn btn-secondary">View Campaign Page</a>
        </div>

        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">{{ $submissions->total() }}</div>
                <div class="stat-label">Total Submissions</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $submissions->count() }}</div>
                <div class="stat-label">Showing on This Page</div>
            </div>
        </div>

        <div class="controls">
            <form method="GET" action="{{ route('admin.index') }}">
                <div class="form-group">
                    <label>Search</label>
                    <input type="text" name="search" placeholder="Search by name or phone..." value="{{ request('search') }}">
                </div>
                <div class="form-group">
                    <label>Date From</label>
                    <input type="date" name="date_from" value="{{ request('date_from') }}">
                </div>
                <div class="form-group">
                    <label>Date To</label>
                    <input type="date" name="date_to" value="{{ request('date_to') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
                <div class="form-group">
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">Clear</a>
                </div>
            </form>

            <div class="export-section" style="margin-top: 15px;">
                <a href="{{ route('admin.export', request()->all()) }}" class="btn btn-success">Export to CSV</a>
            </div>
        </div>

        <div class="submissions-table">
            @if($submissions->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Photos</th>
                            <th>Submission Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($submissions as $submission)
                            <tr>
                                <td><strong>#{{ $submission->id }}</strong></td>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->phone }}</td>
                                <td>
                                    <div class="image-gallery">
                                        @foreach($submission->uploaded_files ?? [] as $file)
                                            <img src="{{ asset('storage/' . $file) }}"
                                                 alt="Submission photo"
                                                 class="image-thumbnail"
                                                 onclick="openModal('{{ asset('storage/' . $file) }}')">
                                        @endforeach
                                    </div>
                                    <span class="badge badge-info">{{ count($submission->uploaded_files ?? []) }} files</span>
                                </td>
                                <td>{{ $submission->created_at->format('M d, Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $submissions->links('pagination::simple-default') }}
                </div>
            @else
                <div class="no-results">
                    <h3>No submissions found</h3>
                    <p>Try adjusting your filters or check back later.</p>
                </div>
            @endif
        </div>
    </div>

    <div id="imageModal" class="modal" onclick="closeModal()">
        <span class="close-modal">&times;</span>
        <img id="modalImage" src="" alt="Full size image">
    </div>

    <script>
        function openModal(src) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.classList.add('active');
            modalImg.src = src;
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
        }

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</body>
</html>
