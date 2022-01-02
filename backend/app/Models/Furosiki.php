<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furosiki extends Model
{
    use HasFactory;
    protected $fillable = [
        "sentence","from","to","uuid","is_tategaki","is_receive","data_path","color","appearance_id",
    ];
}