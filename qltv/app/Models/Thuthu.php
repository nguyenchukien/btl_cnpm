<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thuthu extends Model
{
    protected $primaryKey = 'id_thuthu';
    public $timestamps = false;
    use HasFactory, SoftDeletes;
}
