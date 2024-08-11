<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class awnser extends Model
{
    use HasFactory;
    protected $table = ("answers");
    protected $primaryKey = 'answer_id';
}
