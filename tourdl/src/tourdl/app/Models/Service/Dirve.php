<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirve extends Model
{
    use HasFactory;

    protected $table = 'dirves';

    protected $fillable = [
        'name',
        'description',
    ];
}
