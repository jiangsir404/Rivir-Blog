<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$Article = M('article');
		//$p = isset($_GET['page']) ? $_GET['page']:1;
		$count = $Article->count();
		$Page = new \Think\Page($count,C('C_PAGE_SIZE')); //实例化$Page类
		$show = $Page->show();
		$list = $Article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		//var_dump($list);
		// var_dump($show);
		$show = preg_replace('/<span/','<li><span',$show);
		$show = preg_replace('/<\/span>/','</span></li>',$show);
		$show = preg_replace('/<a/','<li><a',$show);
		$show = preg_replace('/<\/a>/','</a></li>',$show);
		$show = preg_replace('/<div>/','',$show);
		$show = preg_replace('/<\/div>/','',$show);
		$this->assign('list',$list); //赋值数据集
		$this->assign('page',$show); //赋值分页输出
		$this->display();

	}

	public function data() {
		#$name = array('exp', "='aaa' and updatexml(1,concat(1,(select user())),1)");
		$name = $_POST['name'];
		#$name = I('post.name');
		// $data = M('user')->where(array('username' => $name))->find();
		// dump($data);
		$name = $_POST['name'];
		$order = I('post.order');
		$data = M('user')->where(array('username' => $name))->order($order)->select();
		dump($data);
	}

	public function about(){
		$this->display();
	}

	public function friend(){
		$this->display();
	}

	public function activity(){
		$this->display();
	}
}