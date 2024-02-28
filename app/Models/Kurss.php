<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurss extends Model
{
    use HasFactory;

    protected $table = "kurss";

    protected $fillable = [
        "name",
        "about",
        "banera",
        "people_count",
    ];
}
