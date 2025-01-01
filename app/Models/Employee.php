<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    protected $table = 'staff';
    protected $guarded = [
        'id',
    ];

    use HasFactory;
    use softDeletes;


}
