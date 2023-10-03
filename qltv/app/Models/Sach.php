<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Sach extends Model
{
    protected $primaryKey = 'id_sach';
    public $timestamps = false;
    use HasFactory;
}
