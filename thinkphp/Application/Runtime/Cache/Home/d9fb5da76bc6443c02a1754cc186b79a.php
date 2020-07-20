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
    
  <link rel="stylesheet" type="text/css" href="/Public/css/asciinema-player.css"> 
  

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
            

      <div class="container col-xs-10 col-xs-offset-1">
        <div class="row">
          <h2>Activity:</h2>
        </div>
        <div class="col-xs-6">
        <div class="panel panel-info">
          <div class="panel-heading"　style="text-align:center;font-size:20px;">
            <i class="fa fa-user"></i>S7scan
          </div>
          <div class="panel-body">
            <code>七星渗透测试工具,一共有七个模块包括可实现poc的综合扫描利用，信息收集，敏感扫描，ctf常用编解码工具等,项目地址:
            https://github.com/SevenStar-club/s7scan</code>
          </div>
        </div>          
        </div>
        <asciinema-player src="/Public/video/demo.json" cols="188" rows="33"></asciinema-player>
        <asciinema-player src="/Public/video/demo2.json" cols="188" rows="33"></asciinema-player>
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
    <script src="/Public/js/asciinema-player.js"></script>
  </body>
</html>