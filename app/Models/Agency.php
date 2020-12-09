<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name_agency',
        'email',
        'phone',
        'address',
        'name_manager',
        'status',
    ];
}
