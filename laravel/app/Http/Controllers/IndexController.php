<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
class IndexController  extends Controller {
	public function index(){
		$data=DB::table('liuyan')->paginate(5);
		return view('index.index',['arr'=>$data]);
	}
	public function indexadd(){
		$text = $_GET['text'];
		//echo $text;die;
		$sql = "insert into liuyan(text) values('$text')";
		$re=DB::insert($sql);
		$sql = "select * from liuyan order by id desc";
		$re = DB::select($sql);
		return view('index.indexadd')->with('arr',$re);
	}
	public function indexdel(){
		$id = $_GET['id'];
		$sql = "delete from liuyan where(id='$id')";
		$re=DB::delete($sql);
		$sql = "select * from liuyan order by id desc";
		$re = DB::select($sql);
		return view('index.indexdel')->with('arr',$re);
	}
	public function indexupd(){
		$id=$_GET['id'];
		$text=$_GET['text'];
		$arr = array(
			'id'=>$id,
			'text'=>$text
			);
		return view('index.indexupd')->with('arr',$arr);
}
	public function indexupde(){
		$id = $_GET['id'];
		$text=$_GET['text'];
		$sql = "update liuyan set text='$text' where(id='$id')";
		DB::update($sql);
	}
}