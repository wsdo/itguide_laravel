<?php namespace App\Http\Controllers\Admin\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use APP\Listacticle;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Request;
// use Illuminate\Http\Request;
class ListController extends Controller
{
	public function listacticle(){

		$content = Content::all();
		// $content = Content::paginate(3);

		// var_dump($content);
		$result = array(
			"status" => "0",
			"data" 	=> $content,
			);
		echo json_encode($result);
		// return view('admin.article.edit')->with('contents',$content);
	}
	public function getList($pid=0,&$result=array(),$space=0){
		$space+=2;
		// $Category = Category::all();
		$Category =DB::table('category')->where('pid','=',$pid)->get();

		foreach ($Category as $key => $value) {
			echo $value->name =str_repeat("&nbsp;&nbsp;", $space).'|--'.$value->name;
			$result[]=$value;
			echo $value->id;
			$this->getList($value->id,$result,$space);
		}

		return $result;
	}

	public function category(){
		$Category = $this->getList();
		// echo "<pre>";
		// print_r($Category);
		return view('admin.article.edit-tags')->with('categorys',$Category);
		// echo displayCate($result);
	}

	public function categoryTable(){
		$Category = Category::all();
		// $Category = Category::paginate(3);

		// var_dump($Category);
		$result = array(
			"status" => "0",
			"data" 	=> $Category,
			);
		echo json_encode($result);
	}
	function displayCate($pid=0,$selected=1){
		$rs = getList($pid);
		$str='';
		$str.= "<select name='cate'>";
		foreach($rs as $key => $val){
		$selectedstr = '';
		if($val['id'] == $selected){
		$sellectedstr ="selected";
		}
		$str.= "<option {$selectedstr}>{$val['catename']}</option>";
		}
		return $str .= '</select>';
	}
	// echo displayCate(0,1);`
	public function add(){

		$data = array();
		$data['name'] = Request::input('name');
		$data['pid'] = Request::input('pid');
		print_r($data);
		// die;
		$Category =  new Category;
		$Category->name = $data['name'];
		$Category->pid = $data['pid'];
		$Category->save($data);
	}	
	public function article_add(){

		$data = array();
		$data['title'] = Request::input('title');
		$data['text'] = Request::input('text');
		print_r($data);
		// die;
		$Content =  new Content;
		$Content->title = $data['title'];
		$Content->text = $data['text'];
		$Content->save($data);
	}

}