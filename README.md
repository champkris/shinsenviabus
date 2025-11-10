# ShinSen Orange Juice Campaign - Viabus

A Laravel-based campaign application for ShinSen Orange Juice lucky draw, allowing users to submit their information and photos to participate.

## Features

### User Campaign Page
- Modern, responsive form design with orange gradient theme
- Name and phone number input fields
- Multiple file upload support (photos of juice and receipt)
- Image validation (JPG, PNG, GIF - max 10MB per file)
- Success message after submission
- File preview with remove functionality

### Admin Dashboard
- View all campaign submissions with pagination
- Search by name or phone number
- Filter by date range
- Display uploaded photos with thumbnail preview
- Full-size image modal viewer
- Export submissions to CSV/Excel format
- Real-time statistics display

## Installation

### Prerequisites
- MAMP or similar local PHP/MySQL environment
- PHP 8.1 or higher
- Composer
- MySQL database named `shinsen_viabus`

### Database Configuration

The application is already configured to use your MAMP database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shinsen_viabus
DB_USERNAME=root
DB_PASSWORD=root
```

If your MAMP settings are different, update the `.env` file accordingly.

### Database Setup

The database migrations have already been run. The `campaign_submissions` table includes:
- `id` - Auto-incrementing primary key
- `name` - User's name
- `phone` - User's phone number
- `uploaded_files` - JSON array of file paths
- `created_at` / `updated_at` - Timestamps

## Usage

### Accessing the Application

1. **Campaign Page (Public)**
   - URL: `http://localhost/shinsen_viabus/public/`
   - Users can submit their entries here
   - Mobile-friendly responsive design

2. **Admin Dashboard**
   - URL: `http://localhost/shinsen_viabus/public/admin/submissions`
   - View and manage all submissions
   - Export data for lucky draw selection

### Running the Application

If using MAMP, make sure:
1. MAMP is running
2. Apache and MySQL services are started
3. The database `shinsen_viabus` exists
4. Navigate to the URL in your browser

Alternatively, you can use Laravel's built-in development server:
```bash
php artisan serve
```
Then access at `http://localhost:8000`

## Routes

- `GET /` - Campaign submission form
- `POST /submit` - Process campaign submission
- `GET /admin/submissions` - Admin dashboard
- `GET /admin/export` - Export submissions to CSV

## File Uploads

Uploaded files are stored in:
- Storage path: `storage/app/public/campaign_uploads/`
- Public access: `public/storage/campaign_uploads/`

The storage link has already been created using `php artisan storage:link`.

## Admin Features

### Viewing Submissions
- All submissions are displayed in a table format
- Shows ID, name, phone, uploaded photos (thumbnails), and submission date
- Click on any thumbnail to view the full-size image
- Pagination shows 20 submissions per page

### Search & Filter
- **Search**: Enter name or phone number to find specific submissions
- **Date From/To**: Filter submissions by date range
- **Clear**: Reset all filters

### Export to CSV
The export includes:
- Submission ID
- Name
- Phone number
- Number of uploaded files
- File paths (semicolon-separated)
- Submission date and time

Perfect for selecting lucky draw winners using Excel or other tools.

## Security Notes

- Form validation is implemented on both client and server side
- File upload restrictions: only image files (JPEG, PNG, GIF) up to 10MB
- CSRF protection enabled on all forms
- Input sanitization using Laravel's validation

## Database Schema

```sql
campaign_submissions
├── id (bigint, primary key)
├── name (varchar)
├── phone (varchar)
├── uploaded_files (json)
├── created_at (timestamp)
└── updated_at (timestamp)
```

## Customization

### Change Colors
Edit the CSS in:
- `resources/views/campaign/index.blade.php` (Campaign page)
- `resources/views/admin/index.blade.php` (Admin dashboard)

### Modify Validation Rules
Edit `app/Http/Controllers/CampaignController.php` in the `store()` method

### Change Upload Limits
Update the validation rule in `CampaignController.php`:
```php
'files.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
```

## Troubleshooting

### Images not displaying
- Ensure storage link exists: `php artisan storage:link`
- Check file permissions on `storage/app/public`

### Database connection errors
- Verify MAMP is running
- Check `.env` file database credentials
- Ensure `shinsen_viabus` database exists

### Upload errors
- Check PHP upload limits in `php.ini`:
  - `upload_max_filesize`
  - `post_max_size`
- Verify storage directory has write permissions

## Support

For issues or questions, please contact your development team.

---

Built with Laravel 12 for ShinSen Orange Juice campaign by Viabus
