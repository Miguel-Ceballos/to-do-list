<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'page'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
