<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{

    protected $table = "home";
    protected $fillable = [
        'name',
        'slug',
        'section_1',
        'section_tag_1',
        'section_2',
        'section_tag_2',
        'section_3',
        'section_tag_3',
        'section_4',
        'section_tag_4',
        'section_5',
        'section_tag_5',

    ];
}
