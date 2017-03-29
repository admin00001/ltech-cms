<?php if (!defined('THINK_PATH')) exit(); $listdata = array('status' => 1); $limit = 10; $list = D("News")->select($listdata,$limit); ?>
<div class="border">
    <div class="news-list text-center">NEWS LIST</div>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list">
            <div class="content-box">
                <a class="content" href="<?php echo U('News/detail',array(id =>$list[news_id] ));?>" title="<?php echo ($list["title"]); ?>"><?php echo ($list["title"]); ?></a>
                <a class="icon" href="<?php echo U('News/detail',array(id =>$list[news_id]));?>" title="<?php echo ($list["title"]); ?>"><i class="fa fa-angle-right"></i></a>
            </div>
        </div><?php endforeach; endif; ?>
</div>