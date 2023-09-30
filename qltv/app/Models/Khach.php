<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Khach extends Model
{
    protected $primaryKey = 'id_khach';
    public $timestamps = false;
    use HasFactory;
}
