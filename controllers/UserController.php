<?php
	class UserController{

		public function index(){

			//包含文件并实例化一个模型
			include './models/UserModel.php';
			$model = new UserModel();

			//通过模型获取数据
			$list = $model->getAllUsers();

			// $list = array(
			// 	array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com'),
			// 	array('id'=>2,'name'=>'mary','email'=>'mary@gmail.com'),
			// 	array('id'=>3,'name'=>'lili','email'=>'lili@gmail.com'),
			// );

			//echo "这是User控制器的index方法";
			//var_dump($list);
			//将数据显示出来
			include './views/User/index.php';
		}
		public function getOne(){

			include './models/UserModel.php';
			$model = new UserModel();
			$list = $model->getOneUsers();

			var_dump($list);
		}
	}