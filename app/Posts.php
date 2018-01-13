<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'post_date',
        'post_homepage_position',
        'post_content',
        'post_excerpt',
        'post_image',
        'post_seo_title',
        'post_seo_description'
    ];
}
