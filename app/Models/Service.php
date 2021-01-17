<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $fillable = ['state','comment','amount'];
    public $timestamps = false;

    use HasFactory;
}
