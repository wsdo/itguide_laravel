<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Database\Eloquent\Model;


class Content extends Model
{
    //
    public  $timestamps = false;
    
    protected $table = 'content';
}
