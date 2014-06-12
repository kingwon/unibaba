<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="信驴，助你周游世界">
    <meta name="author" content="canyouhike.com">

    <title>信驴，助你周游世界</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/Public/dist/style/base.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="/Public/dist/style/lib.css" /> -->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/Public/css/temporary.css" />
    
    <!--因含有jquery，所以得放前面-->
    <script type="text/javascript" src="/Public/dist/js/lib.js"></script>
    <!-- <script type="text/javascript" src="/Public/dist/js/base.js"></script> -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php echo $Think.CONTROLLER_NAME === 'Index' ? 'class="active"' : '';?>><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li <?php echo $Think.CONTROLLER_NAME === 'Group' ? 'class="active"' : '';?>><a href="<?php echo U('Group/index');?>">信驴圈</a></li>
            <li <?php echo $Think.CONTROLLER_NAME === 'Place' ? 'class="active"' : '';?>><a href="<?php echo U('Place/index');?>">目的地</a></li>
            <li <?php echo $Think.CONTROLLER_NAME === 'Plan' ? 'class="active"' : '';?>><a href="<?php echo U('Plan/index');?>">行程准备</a></li>
            <li <?php echo $Think.CONTROLLER_NAME === 'Safety' ? 'class="active"' : '';?>><a href="<?php echo U('Safety/index');?>">安全</a></li>
            <li <?php echo $Think.CONTROLLER_NAME === 'MobileOffice' ? 'class="active"' : '';?>><a href="<?php echo U('MobileOffice/index');?>">移动办公</a></li>
            <li><a href="http://bbs.canyouhike.com">社区</a></li>
<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">登录</a></li>
            <!-- <li class="active"><a href="./">Static top</a></li> -->
            <!-- <li><a href="../navbar-fixed-top/">Fixed top</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div id="wrap">



     <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
          <ul class="nav nav-pills nav-stacked nav-area">
            <?php if(is_array($places)): foreach($places as $key=>$area): if(!empty($area['places'])) :?>
                <li class="dropdown">
                <label class="dropdown-toggle" data-toggle="dropdown"><?php echo ($area["pl_name"]); ?> <b class="caret"></b></label>
                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> -->
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <?php if(is_array($area["places"])): foreach($area["places"] as $key=>$place): ?><li role="presentation"><a role="menuitem" class="current" tabindex="-1" href="#"><?php echo ($place["pl_name"]); ?> &nbsp;<?php echo !empty($place['gr_people_number']) ? ("(" .$place['gr_people_number'] . ")" . '&nbsp;<input type="checkbox" name="pl_id" value="' . $place['pl_id'] .'">') : '创建圈子'?></a></li><?php endforeach; endif; ?>
                    <li role="presentation"><a role="menuitem" class="current" tabindex="-1" href="#">加入圈子</a></li>
                  </ul>
              <?php else: ?>
                <li><?php echo ($area["pl_name"]); ?>
              <?php endif;?>
              </li><?php endforeach; endif; ?>
          </ul>
        </div> 
    
    </div>

    <!-- /container -->
    
    <script type="text/javascript">
      window.onload=function(){
        // alert(1);
      }
      // $(function(){
      //   alert(1);
      //   console.log(111111111111111);
      // });
      // $('.dropdown-toggle').dropdown();
      $('.dropdown').mouseenter(function(){
        // $(this).find('.dropdown-menu').dropdown('toggle');
        $(this).find('.dropdown-toggle').dropdown('toggle');
      });
      $('.dropdown').mouseleave(function(){
        $(this).find('.dropdown-toggle').dropdown('toggle');
      });
      $('.current').click(function(){
        // alert(11);
        console.log($(this).parents('.dropdown-toggle'));
        $(this).parent('.dropdown-toggle').dropdown('toggle');
      });
    </script>
    </div>
    <!--wrap end-->
    <!--footer start-->
    <div id="footer">
      <div class="container">
        <div class="footerBox">
            <!-- <ul class="footer_about">
                <li>
                    <dl>
                        <dt>关于我们</dt>
                        <dd><a href="http://www.canyouhike.com/htmlpages/about.html" target="_blank" rel="nofollow" data-bn-ipg="foot-about-1">信驴简介</a></dd>
                        <dd><a href="http://www.canyouhike.com/htmlpages/contact.html" target="_blank" rel="nofollow" data-bn-ipg="foot-about-2">联系我们</a></dd>
                        <dd><a href="http://www.canyouhike.com/partner/" target="_blank" rel="nofollow" data-bn-ipg="foot-about-3">合作伙伴</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>加入信驴</dt>
                        <dd><a href="http://www.canyouhike.com/job/" target="_blank" rel="nofollow" data-bn-ipg="foot-join-1">招聘职位</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>网站条款</dt>
                        <dd><a href="http://www.canyouhike.com/htmlpages/member.html" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-1">会员条款</a></dd>
                        <dd><a href="http://www.canyouhike.com/htmlpages/bbsguide.html" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-2">社区指南</a></dd>
                        <dd><a href="http://www.canyouhike.com/htmlpages/copyright.html" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-3">版权声明</a></dd>
                        <dd><a href="http://www.canyouhike.com/htmlpages/exemption.html" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-4">免责声明</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>帮助中心</dt>
                        <dd><a href="http://site.canyouhike.com/tyro/" target="_blank" rel="nofollow" data-bn-ipg="foot-help-1">新手上路</a></dd>
                        <dd><a href="http://bbs.canyouhike.com/faq.php" target="_blank" rel="nofollow" data-bn-ipg="foot-help-2">使用帮助</a></dd>
                        <dd><a href="http://www.canyouhike.com/sitemap.html" target="_blank" data-bn-ipg="foot-help-4">网站地图</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>关注我们</dt>
                        <dd class="footer_attention"><img src="http://static.canyouhike.com/images/common/icon_attention.png" alt="" width="80" height="50" border="0" usemap="#Map_go2att">
                            <map name="Map_go2att" id="Map_go2att">
                                <area shape="rect" coords="0,0,20,20" href="http://t.sina.com.cn/go2eu" target="_blank" rel="nofollow" alt="信驴网@新浪微博" title="信驴网@新浪微博" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','weibo',1]);" data-bn-ipg="foot-concern-1">
                                <area shape="rect" coords="30,0,50,20" href="http://www.flickr.com/photos/go2eu" target="_blank" rel="nofollow" alt="信驴网@flickr" title="信驴网@flickr" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','flickr',1]);" data-bn-ipg="foot-concern-2">
                                <area shape="rect" coords="60,0,80,20" href="http://page.renren.com/600986584" target="_blank" rel="nofollow" alt="信驴网@人人" title="信驴网@人人" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','renren',1]);" data-bn-ipg="foot-concern-3">
                                <area shape="rect" coords="0,30,20,50" href="http://site.douban.com/go2eu" target="_blank" rel="nofollow" alt="信驴网@豆瓣" title="信驴网@豆瓣" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','douban',1]);" data-bn-ipg="foot-concern-4">
                                <area shape="rect" coords="30,30,50,50" href="http://www.facebook.com/#!/qiongyou" target="_blank" rel="nofollow" alt="信驴网@facebook" title="信驴网@facebook" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','facebook',1]);" data-bn-ipg="foot-concern-5">
                                <area shape="rect" coords="60,30,82,50" href="http://twitter.com/go2eucom" target="_blank" rel="nofollow" alt="信驴网@twitter" title="信驴网@twitter" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','twitter',1]);" data-bn-ipg="foot-concern-6">
                            </map>
                        </dd>
                    </dl>
                </li>
            </ul> -->
            <!-- <div class="footer_appStore"><a href="http://itunes.apple.com/cn/artist/qyer/id492202235" target="_blank" rel="nofollow" data-bn-ipg="foot-appstore"><img src="http://static.canyouhike.com/images/common/appstore.png" width="118" height="39" alt="信驴网@App Store" title="信驴网@App Store"></a></div> -->
            <div class="footer_copyright"><!-- <a href="http://www.canyouhike.com/" rel="nofollow" data-bn-ipg="foot-logo"><img src="http://static.canyouhike.com/images/common/foot_logo.png" width="100" height="30" alt="信驴网"> --></a>
                <!-- <p>2004-2014 © 信驴网™ canyouhike.com All rights reserved.&nbsp;&nbsp;<a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">京ICP备12003524号</a>&nbsp;&nbsp;京公网安备11010502023470</p> -->
                <p><a href="http://www.canyouhike.com/">信驴网</a>为<a href="http://www.canyouhike.com/">旅行</a>者提供原创实用的<a href="http://www.canyouhike.com/">出境游</a><a href="http://place.canyouhike.com/">旅行指南</a>和<a href="http://place.canyouhike.com/">旅游攻略</a>、<a href="http://bbs.canyouhike.com/">旅行社区</a>和<a href="http://ask.canyouhike.com/">问答</a>交流平台，并提供<a href="http://qyer.ailvxing.com/">签证</a>、<a href="http://bx.canyouhike.com/">保险</a>、<a href="http://flight.canyouhike.com/">机票</a>、<a href="http://hotel.canyouhike.com/">酒店预订</a>、<a href="http://car.canyouhike.com/">租车</a>等服务。</p>
            </div>
            <!--友情链接模块-->
<!--             <dl class="footer_links">
                <dt>友情链接：</dt>
                <dd><a target="_blank" href="http://guoji.zhuna.cn/" data-bn-ipg="foot-hand-1">住哪网国际酒店</a></dd>
                <dd><a target="_blank" href="http://travel.fengniao.com/" data-bn-ipg="foot-hand-2">旅游攻略</a></dd>
                <dd><a target="_blank" href="http://cn.toursforfun.com/" data-bn-ipg="foot-hand-3">美国旅游</a></dd>
                <dd><a target="_blank" href="http://www.guolv.com/chujing/" data-bn-ipg="foot-hand-4">出国旅游</a></dd>
                <dd><a target="_blank" href="http://abroad.cncn.com/" data-bn-ipg="foot-hand-5">出境旅游</a></dd>
                <dd><a target="_blank" href="http://bj.tuniu.com/" data-bn-ipg="foot-hand-6">北京旅游网</a></dd>
            </dl> -->
        </div>
      </div>
    </div>
    <!--footer end-->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script type="text/javascript" src="/Public/dist/js/lib.js"></script> -->
    <script type="text/javascript" src="/Public/dist/js/base.js"></script>
    <!--<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>-->
    <!-- end script-->
  </body>
</html>