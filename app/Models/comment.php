<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable =[
        "name",
        "email",
        "review",
        "article_id"
    ];
    use HasFactory;
}
