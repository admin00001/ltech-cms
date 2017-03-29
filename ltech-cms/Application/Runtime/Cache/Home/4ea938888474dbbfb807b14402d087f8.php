<?php if (!defined('THINK_PATH')) exit(); if(is_array($result)): foreach($result as $key=>$list): ?><div class="row " >
        <div class="col-xs-12">
            <div class='result-row clearfix'>
                <div class="col-sm-6 col-md-5 -col-lg-4">
                    <img class="img-responsive center-bloack" src="<?php echo ($list["thumb"]); ?>" alt="<?php echo ($list["name"]); ?>">
                </div>
                <div class="col-sm-6 col-md-7 -col-lg-8">
                    <h3><?php echo ($list["name"]); ?></h3>
                    <p class="products-description">
                        <?php echo ($list["description"]); ?>
                    </p>
                </div>
            </div>
        </div>

    </div><?php endforeach; endif; ?>

<div class="row">
    <div class="col-xs-12">
        <?php echo ($page); ?>
    </div>
</div>