<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Memo extends Model
{
    use HasFactory;

    // マスアサインメントを許可するカラム
    protected $fillable = ['title', 'content'];
}
