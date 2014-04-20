<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
</div>
</div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
  <div class="bm">
    <div class="bm_h cl"> <a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
      <h2> 
        <?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?> 
        <span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span> </h2>
    </div>
    <div class="bm_c" id="focus_con"> </div>
  </div>
</div><?php $focusi = 0;?> <?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
  <dl class="xld cl bbda">
    <dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
    <?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
    <dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
    <?php } ?>
    <dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
  </dl>
  <p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?> 
<?php } ?> 
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script> 
<?php } ?> 
<?php if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?> <?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?> <?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?> <?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?> <?php echo adshow("cornerbanner/a_cn");?> 

<?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div id="footer">
  <div class="container1">
    <div class="col">
      <div class="footer-title">极客公园</div>
      <ul class="footer-content">
        <li><a title="关于极客公园" href="#">关于我们</a></li>
        <li><a title="加入我们" href="#" target="_blank">加入我们</a></li>
        <li><a title="访问移动版" class="jump-to-mobile" href="#">访问移动版</a></li>
        <li><a title="产品求关注" href="#" target="_blank">产品求关注</a></li>
      </ul>
    </div>
    <div class="col">
      <div class="footer-title">实验室</div>
      <ul class="footer-content">
        <li><a title="极客公园 - Google Reader 归档计划" href="#">Google Reader 归档计划</a></li>
        <li><a title="极客早知道 - iOS 客户端" href="#">极客早知道：iOS 版</a></li>
        <li><a href="#" title="极客公园 - 多看月刊">极客公园月刊</a></li>
      </ul>
    </div>
    <div class="col">
      <div class="footer-title">订阅</div>
      <ul class="footer-content">
        <li><a class="social-media-icon rss" title="RSS" target="_blank" href="#">RSS订阅</a></li>
        <li><a class="social-media-icon email" title="Email Service" target="_blank" href="#">活动通知订阅</a></li>
      </ul>
    </div>
    <div class="col social-media">
      <div class="footer-title">关注我们</div>
      <ul class="footer-content">
        <li><a class="social-media-icon sina" title="新浪微博: @geekpark" target="_blank" href="#">新浪微博</a></li>
        <li><a class="social-media-icon tencent" title="腾讯微博: @geekparknet" target="_blank" href="#">腾讯微博</a></li>
        <li><a class="social-media-icon twitter" title="Twitter: @GeekParkNet" target="_blank" href="#">Twitter</a></li>
        <li><a class="social-media-icon gplus" title="Google+: @geekparker" target="_blank" href="#" rel="publisher">Google+</a></li>
        <li><a class="social-media-icon huaban" title="花瓣网: @geekpark" target="_blank" href="#">花瓣网</a></li>
        <li><a class="social-media-icon renren" title="人人小站: @geekpark" target="_blank" href="#">人人小站</a></li>
        <li><a class="social-media-icon diandian" title="点点: @geekparknet" target="_blank" href="#">点点</a></li>
        <li class="wei"><img original-title="在微信里搜索"极客公园"或在手机上扫描本二维码添加极客公园微信帐号" class="weixin-qrcode" alt="GeekPark 微信" src="template/win8mi_1st_geek/src/img/weixin.png" style="display: none;" height="200" width="200"><a class="social-media-icon weixin" title="微信" href="#">微信</a></li>
      </ul>
    </div>
    <div class="col cp">
      <div class="support">
        <p>Powered by <strong><a href="http://www.discuz.net" target="_blank" style="color: #CCCCCC;">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em></p>
      </div>
      <div class="copyright ICP">
        <p>Copyright &copy; 2001 - 2013</p>
        <p>珠海市现代模板设计有限公司</p>
      </div>
      <div class="ICP">
        <p><?php if($_G['setting']['icp']) { ?><a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: #CCCCCC;"><?php echo $_G['setting']['icp'];?> 号</a><?php } ?></p>
        <p><a href="misc.php?mod=stat" style="color: #CCCCCC;">站点统计</a> - <a href="forum.php?mobile=yes" style="color: #CCCCCC;">手机版</a> - <a href="archiver" style="color: #CCCCCC;">Archiver</a></p>
      </div>
    </div>
  </div>
  <div id="ft" class="wp cl"> 
    <?php updatesession();?> 
    <?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?> 
    <script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script> 
    <?php } ?> 
  </div>
</div>
<?php } ?> 

<?php if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']) { ?> 
<?php if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?> 
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script> 
<?php } ?> 

<?php if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?> 
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script> 
<?php } ?> 

<?php if(!isset($_G['cookie']['sendmail'])) { ?> 
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script> 
<?php } ?> 

<?php if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?> 
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script> 
<?php } ?> 
<?php } ?> 

<?php if($_GET['diy'] == 'yes') { ?> 
<?php if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?> 
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
<?php } ?> 
<?php if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?> 
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
<?php } ?> 
<?php } ?> 
<?php if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?> 
<script type="text/javascript">patchNotice();</script> 
<?php } ?> 
<?php if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script> 
<?php } ?> 
<?php if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script> 
<?php } ?> 
<?php if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?> 
<script type="text/javascript">noticeTitle();</script> 
<?php } ?> 

<?php if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?> 
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script> 
<?php } ?> <?php userappprompt();?> 
<?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop"> 
  <?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?> 
  <span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span> 
  <?php } ?> 
  <span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span> 
  <?php if($_G['fid']) { ?> 
  <span> 
  <?php if($_G['mod'] == 'viewthread') { ?> 
  <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a> 
  <?php } else { ?> 
  <a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a> 
  <?php } ?> 
  </span> 
  <?php } ?> 
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script> 
<?php } ?> 
<?php if(isset($_G['makehtml'])) { ?> 
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script> 
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script> 
<?php } ?> <?php output();?></body></html>
