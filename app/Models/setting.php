<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'avatar',
        'order',
        'link',
        'icon',
    ];
}
