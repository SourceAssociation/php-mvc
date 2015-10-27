<?php
	class UserModel{

		//获取数据
		public function getAllUsers(){
			$list = array(
				array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com'),
				array('id'=>2,'name'=>'mary','email'=>'mary@gmail.com'),
				array('id'=>3,'name'=>'lili','email'=>'lili@gmail.com'),
			);

			return $list;
		}
		
		public function getOneUsers(){
			$list = array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com');
			return $list;
		}

	}