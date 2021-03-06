<?php 
use app\common\services\UrlService;
use app\common\services\ConstantMapService;
use \app\common\services\StaticService;

StaticService::includeAppJsStatic( '/js/web/book/cat_set.js', app\assets\WebAsset::className() );
?>
<?=  \Yii::$app->view->renderFile('@app/modules/web/views/common/tab_book.php',['current'=>'cat_set']);?>

<div class="row m-t  wrap_cat_set">
    <div class="col-lg-12">
        <h2 class="text-center">分类设置</h2>
        <div class="form-horizontal m-t m-b">
            <div class="form-group">
                <label class="col-lg-2 control-label">分类名称:</label>
                <div class="col-lg-10">
                    <input type="text" name="name" class="form-control" placeholder="请输入分类名称~~" value="<?=$car_info['name'] ?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">权重:</label>
                <div class="col-lg-10">
                    <input type="text" name="weight" class="form-control" placeholder="请输入分类名称~~" value="<?= $car_info['weight'] ?>">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-2">
                    <input type="hidden" name="id" value="<?= $car_info['id'] ?>">
                    <button class="btn btn-w-m btn-outline btn-primary save">保存</button>
                </div>
            </div>
        </div>
    </div>
</div>

