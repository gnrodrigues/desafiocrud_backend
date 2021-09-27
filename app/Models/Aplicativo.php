<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicativo extends Model
{
    protected $table = 'aplicativos';

    protected $fillable = ['nome','bundleID'];
}
