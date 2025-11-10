<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignSubmission extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'tried_shinsen',
        'uploaded_files',
    ];

    protected $casts = [
        'uploaded_files' => 'array',
    ];
}
