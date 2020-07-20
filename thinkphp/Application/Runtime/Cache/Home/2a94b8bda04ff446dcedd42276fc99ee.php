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
    
  <style>
    .article-text{
      font-size:17px;
  
    }
  </style>


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
          
      <h2>Archives:</h2>
      <!-- <ul>
        <li>
          <div class="col-xs-3">2017.Sep.18</div>
          <div class="col-xs-3">
            <a href="#">phpjiami 数种解密方法</a>
          </div>
        </li>
        <li></li>
        <li></li>
      </ul> -->
      <div class="col-xs-8 col-xs-offset-1">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$listdata): $mod = ($i % 2 );++$i;?><div class="row">
            <div class="col-xs-2"　>
              <span style="color:#34495e;" class="article-text"><?php echo (date("Y-M-d",$listdata["publish"])); ?></span>
            </div>
            <div class="col-xs-6">
              <a style="color:#16a085;" href="/Home/view/<?php echo ($listdata["id"]); ?>" class="article-text"><?php echo ($listdata["title"]); ?></a>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
         <div class="row">

           <ul class="pagination">
              <?php echo ($page); ?>
           </ul>
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
    
  </body>
</html>