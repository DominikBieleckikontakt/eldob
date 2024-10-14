<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TextPage extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['title', 'slug', 'content', 'meta_title', 'meta_description', 'meta_keywords'];
}
