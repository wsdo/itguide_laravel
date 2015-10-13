<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Request;
class ContentController extends Controller
{	
	public function index(){
		return view('content');
	}
	public function add(){

		$data = array();
		$data['text'] = Request::input('text');
		$data['title'] = Request::input('title');
		$content =  new Content;
		$content->text = $data['text'];
		$content->title = $data['title'];
		$content->save($data);
		print_r($data);

	}
}