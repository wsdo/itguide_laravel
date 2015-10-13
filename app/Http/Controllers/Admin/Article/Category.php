<?php
/**
 * @Author: Administrator
 * @Date:   2015-09-20 18:50:09
 * @Last Modified by:   Administrator
 * @Last Modified time: 2015-09-20 19:09:41
 */


namespace App\Http\Controllers\Admin\Article;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    //
    public  $timestamps = false;
    
    protected $table = 'category';
}
