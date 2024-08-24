<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    protected $table = ("results");
    protected $primaryKey = 'results_id';
    
    public function student()
{
    return $this->belongsTo(User::class, 'id');
}

public function exam()
{
    return $this->belongsTo(subject::class, 'exam_id');
}
}
