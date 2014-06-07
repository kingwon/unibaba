<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8" />
    <title>Frontline</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/dist/style/base.css" />
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
    
    <!-- JS
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.tweet.js"></script>
    <script src="js/selectnav.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/functions.js"></script>
    <script>
        $(document).ready(function() {
            $(".slider .flexslider").flexslider({
                animation: "slide"
            });
        });
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
 <h1>库存管理</h1>
<div class="optbtn">
    <a class="btn btn-info" href="<?php echo U('Parts/add');?>">新增配件</a>
</div>

<!-- 列表搜索区域 -->
<div class="row" id="list-search">
    <form method="post">
        <table class="table table-input">
            <colgroup>
                <col width="60">
            </colgroup>
            <tbody>
            <tr>
                <td class="value">
                    <div>
                        <input type="text" class="form-control" placeholder="输入" name="">
                        <button type="submit" class="btn btn-default">搜索</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<!-- /列表搜索区域 -->

<form method="post">
<!-- 列表表格区域 -->
<div class="row" id="list-grid">
    <table class="table table-bordered table-hover table-grid">
            <tr>
                <th>配件编号</th>
                <th>配件名称</th>
                <th>配件进货价</th>
                <th>配件尺寸规格</th>
                <th>配件说明</th>
                <th>配件供应商</th>
                <th>操作</th>
            </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                <!-- <th><input type="checkbox" widget="check-all" data-check-all-target=".w-check-all"></th> -->
                <td><?php echo ($val["parts_id"]); ?></td>
                <td><?php echo ($val["parts_name"]); ?></td>
                <td><?php echo ($val["parts_cost"]); ?></td>
                <td><?php echo ($val["parts_size"]); ?></td>
                <td><?php echo ($val["parts_describe"]); ?></td>
                <td><?php echo ($val["parts_supplier"]); ?></td>
                <td><a href="<?php echo U('Parts/edit', 'parts_id=' . $val['parts_id']);?>">编辑</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        
    </table>
</div>
<!-- /列表表格区域 -->

<!-- 列表操作区域 -->
<div class="row" id="list-op">
    <!-- 全选 -->
<!--     <div class="check">
        <input type="checkbox" widget="check-all" data-check-all-target=".w-check-all">
        <button type="submit" class="btn btn-default" name="op" value="op1">批量操作</button>
        <button type="submit" class="btn btn-default" name="op" value="op2">批量操作</button>
    </div> -->
    <!-- 分页 -->
    <?php echo ($page); ?>
</div>
<!-- /列表操作区域 -->
</form>



    <div id="footer">
        <div id="f_line"></div>
        <div class="container">
            <div class="footer sixteen columns">
                <div class="three columns alpha">
                    <h3>NAVIGATE</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                
                <div class="three columns">
                    <h3>POWERED BY</h3>
                    <ul>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">MySQL</a></li>
                        <li><a href="#">Apache</a></li>
                        <li><a href="#">Wordpress</a></li>
                        <li><a href="#">Linux</a></li>
                    </ul>
                </div>
                
                <div class="social three columns">
                    <h3>WE'RE SOCIAL</h3>
                    <ul>
                        <li><a class="twitter" href="#">Twitter</a></li>
                        <li><a class="facebook" href="#">Facebook</a></li>
                        <li><a class="flickr" href="#">Flickr</a></li>
                        <li><a class="rss" href="#">RSS Feed</a></li>
                    </ul>
                </div>
                
                <div class="facebook_box seven columns omega">
                    
                </div> 
                
            </div>
        </div>      
    </div>
    <div id="footer_bottom">
        <div class="container">
            <div class="sixteen columns">
                <div class="copyright ten columns alpha">Copyright &copy; 2012 Frontline Theme Demo. All Rights Reserved</div>
                <div class="links six columns alpha omega">
                    <a href="#">Sitemap</a> | <a href="#">Privacy</a> | <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END footer -->
    <script type="text/javascript" src="/Public/dist/js/lib.js"></script>
    <script type="text/javascript" src="/Public/dist/js/base.js"></script>
    <script type="text/javascript" src="/Public/js/frame.js"></script>

</body>
</html>