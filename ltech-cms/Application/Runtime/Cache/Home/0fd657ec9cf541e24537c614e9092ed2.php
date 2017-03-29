<?php if (!defined('THINK_PATH')) exit(); $listdata = array('status' => 1); $limit = 10; $list = D("Projects")->select($listdata,$limit); ?>
<div class="border">
    <div class="news-list text-center">LASTEST PROJECT</div>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list">
            <div class="content-box">
                <a class="content" href="<?php echo U('Projects/detail',array(id =>$list[projects_id] ));?>" title="<?php echo ($list["name"]); ?>"><?php echo ($list["name"]); ?></a>
                <a class="icon" href="<?php echo U('Projects/detail',array(id =>$list[projects_id]));?>" title="<?php echo ($list["name"]); ?>"><i class="fa fa-angle-right"></i></a>
            </div>
        </div><?php endforeach; endif; ?>
</div>