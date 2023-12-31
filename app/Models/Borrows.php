<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    use HasFactory;
    protected $table='borrows';
    protected $fillable=['borrowId','studentId','bookId','takenDate','broughtDate'];
}
