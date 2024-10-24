<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Realization extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['name'];
}
