<?php
namespace Home\Controller;
use Think\Controller;

class EssayController extends Controller {

	public function add(){
		if(IS_POST && isset($_POST['artsubmit'])){
			#var_dump($_POST);
			$data['title'] = trim(I('post.title'));
			$data['content'] = trim(I('post.content'));
			$data['publish'] = time();
			if(M('article') -> add($data)){
				$data = null;
				$this->success('添加文章成功',U('index/index'));
			}else{
				$data =null;
				$this->error('添加文章失败,请重试');
			}
		}else{
			$tags = M('tags')->select();
			$this->assign('tags',$tags);
			$this->display();
		}
	}

	public function view(){
		if(isset($_GET['id'])){
			$articleId = I('get.id');
			$data = M('article')->where("id=$articleId")->find();
			$this->assign('content',$data);
			$this->display();
		}else{
			$this->display();
		}
	}
}

?>