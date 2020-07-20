<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Blog</title>

    <!-- Bootstrap -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="/Public/css/simditor.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/simditor-markdown.css">
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-8">
          <a href="/home/index/index">
            <img src="/Public/img/logo.png">
          </a>         
        </div>
        <div class="col-xs-3">
          <ul class="nav nav-tabs">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="http://workhard.top/api/">API</a></li>
            <li><a href="http://ctf.s7star.cn">CTF</a></li>
            <li><a href="http://xss.s7star.cn">XSS</a></li>
          </ul>
        </div>
      </div>
      <blockquote>
        <p>Talk is cheap,show me the code</p>
      </blockquote>

      <hr/>
      <a href="http://www.blogsir.com.cn/"><button class="btn btn-primary btn-lg">Blog</button></a>
      <a href="/home/index/activity"><button class="btn btn-success btn-lg">activity</button></a>
      <a href="https://github.com/jiangsir404"><button class="btn btn-info btn-lg">Github</button></a>
      <a href="/home/index/about"><button class="btn btn-warning btn-lg">About</button></a>
      <a href="/home/index/friend"><button class="btn btn-success btn-lg">Friends</button></a>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="search here">
        </div>
        <button type="submit" class="btn btn-success">搜索</button>
      </form>
      <hr/>
    
    <div class="container">
          
    	<div class="row">
    		<div class="col-xs-8">
    			<form action="#" method="POST" accept-charset="utf-8">
    				<div class="input-group">
    					<span class="input-group-addon">
    						文章标题
    					</span>
    					<input class="form-control" type="text" placeholder="Title" name="title">
    				</div>
<!--     				<div class="input-group">
    					<span class="input-group-addon">封面图片</span>
    					<input type="text" class="form-control" placeholder="Cover Image" name="cover">
    				</div> -->
    				<textarea id="editor" class="content" class="form-control" placeholder="Content" autofocus name="content" required=""></textarea>

<!--                   <div class="input-group">
                    <span class="input-group addon">Tag:</span>
                      <div class="btn-group">
                        
                      </div>
                  </div> -->
    					
    				<button class="btn btn-primary" type="button" onclick="JavaScript:history.back();">返回</button>
    				<button type="submit" class="btn btn-primary" type="button" name="artsubmit" style="float:right;"> 提交发布</button>
    			</form>
    		</div>
    	</div>
    
    </div>
    

    </div>
    <div class="container">
      <ul class="pager">
        <li><a href="javascript:history.back();">Privious</a></li>
        <li><a href="javascript:history.forward()">Next</a></li>
      </ul>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript"  opacity=1 color="255,0,255" count="100"  src="//cdn.bootcss.com/canvas-nest.js/1.0.0/canvas-nest.min.js"></script>
    
      <script type="text/javascript" src="/Public/js/module.js"></script>
      <script type="text/javascript" src="/Public/js/hotkeys.js"></script>
      <script type="text/javascript" src="/Public/js/simditor.js"></script>
      <script type="text/javascript" src="/Public/js/to-markdown.js"></script>
      <script type="text/javascript" src="/Public/js/marked.js"></script>
      <script type="text/javascript" src="/Public/js/simditor-markdown.js"></script>
       <script type="text/javascript">
       $(function() {
        var editor = new Simditor({
          textarea: $('#editor'),
          markdown: false,
          toolbar: ['title', 'bold', 'italic', 'underline', 'strikethrough', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment', '|', 'markdown']
        });
      });   
      </script>
   
  </body>
</html>