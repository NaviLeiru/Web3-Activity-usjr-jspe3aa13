<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    public function college()
    {
        return $this->belongsTo(College::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}


