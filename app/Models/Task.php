<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;
    use softDeletes;

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
