<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    use search;
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Email',
        'Address',
        'Phone',
        'Mobile',
        'Website',
        'Company',
        'Inquiry_for',
        'user_id',
    ];

    protected $searchable = [
        'Name',
        'Email',
        'Address',
    ];

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
