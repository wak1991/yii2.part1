<?php 

namespace app\controllers;

class MyController extends AppController {
	public function actionIndex($id = null){
		if(!$id) $id = 'Вася';
		$hi = 'Hello, world!';
		$names = ['Ivanov', 'Petrov', 'Sidorov'];
		// return $this->render('index', ['hello' => $hi, 'names' => $names]);
		return $this->render('index', compact('hi', 'names', 'id'));
	}

	public function actionBlogPost(){
		return 'Blog Post';
	}
}