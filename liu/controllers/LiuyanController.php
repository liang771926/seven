<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LiuyanForm;
use app\models\ContactForm;
use yii\data\Pagination;

class LiuyanController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex(){
		$query = LiuyanForm::find();
		$pages = new Pagination(['totalCount' => $query->count(),"pagesize"=>5]);
		$models = $query->offset($pages->offset)
		        ->limit($pages->limit)
		        ->orderBy('id desc')
		        ->all();

		    return $this->render('index', [
		         'models' => $models,
		         'pages' => $pages,
		    ]);
		// return $this->render('index',['arr'=>$arr]);
	}
	public function actionLiuadd(){
		$request = Yii::$app->request;
		$text = $request->post('text','');
		$models = new LiuyanForm();
		$models->text = $text;
		$re=$models->save();
		$query = LiuyanForm::find();
		$pages = new Pagination(['totalCount' => $query->count(),"pagesize"=>5]);
		$models = $query->offset($pages->offset)
		        ->limit($pages->limit)
		        ->orderBy('id desc')
		        ->all();

		    return $this->renderPartial('liuadd', [
		         'models' => $models,
		        
		    ]);
		//return $this->renderPartial('liuadd',['arr'=>$arr]);
	}
	public function actionLiudel(){
		$request = Yii::$app->request;
		$id=$request->post('id','');
		$models = new LiuyanForm();
		$re = $models->findOne($id);
		$arr = $re->delete();
		$query = LiuyanForm::find();
		$pages = new Pagination(['totalCount' => $query->count(),"pagesize"=>5]);
		$models = $query->offset($pages->offset)
		        ->limit($pages->limit)
		        ->orderBy('id desc')
		        ->all();

		    return $this->renderPartial('liudel', [
		         'models' => $models,
		        
		    ]);
	}
	public function actionLiuupd(){
		$request = Yii::$app->request;
		$id=$request->get('id','');
		$text = $request->get('text','');
		return $this->render('liuupd',['id'=>$id,'text'=>$text]);
	}
	public function actionLiuupde(){
		$request = Yii::$app->request;
		$id=$request->post('id','');
		$text = $request->post('text','');
		$model = New LiuyanForm();
		$arr = $model->findOne($id);
		$arr->text = $text;
		$re = $arr->save();
	}

}