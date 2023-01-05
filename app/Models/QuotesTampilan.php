<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotesTampilan extends Model
{
    protected $table = 'quote';

    protected $fillable = [
        'quote',
        'author',
    ];
}
