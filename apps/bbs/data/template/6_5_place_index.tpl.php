<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');?>
<!--//说明: 显示公共头部模板--><?php include template('common/header'); ?><!--//说明: 主体-->
<div id="ct" class="wp cl">
<!--     <div class="search-box">
        <div class="pla_indsearchs">
            <div class="search">
                <form>
                    <input type="text" id="plaschipt" class="fontYaHei" placeholder="搜索国家、城市、目的地" autocomplete="off">
                </form>
            </div>
        </div>
    </div> -->
    <div class="main-top">
        <div class="head-menu fl">
            <ul id="J-head-menu">
                <?php if($list) { ?>
                    <!--//说明: loop 循环一个数组 相当于foreach(){}-->
                    <?php if(is_array($list)) foreach($list as $area) { ?>                    <li class="head-menu-item yahei pr" data-index="0"><?php echo $area['pl_name'];?><span class="num"><?php echo $area['pl_num'];?></span></li>
                    <?php } ?>
                    <!--//说明: 显示准备好的分页链接-->
                    <?php echo $multi;?>
                <?php } else { ?>
                    <p class="emp">暂时没有记录...</p>
                <?php } ?>
            </ul>
        </div>
        
    </div>
</div>

<!--//说明: 显示公共尾部模板--><?php include template('common/footer'); ?>