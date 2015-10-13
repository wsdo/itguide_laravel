<?php
/**
 * @Author: wangshudong
 * @Date:   2015-09-21 23:49:44
 * @Last Modified by:   wangshudong
 * @Last Modified time: 2015-09-22 00:15:34
 */
namespace App\Http\Controllers\home\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use APP\Listacticle;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Request;

class PageController extends Controller{
	public function  page_list (){
		$contents = content::all();
		// $Category = Category::paginate(3);
		// var_dump($contents);
		return view('/home/article/page')->with('contents',$contents);
	}
}