<?php
use app\common\services\UrlService;
use app\common\services\ConstantMapService;
use \app\common\services\StaticService;

StaticService::includeAppJsStatic( '/js/m/user/bind.js', app\assets\WebAsset::className() )
?>

    <div class="page_title clearfix">
        <span>账号绑定</span>
    </div>
    <div class="login_form_wrap">
        <div class="form_box">
            <div class="form_input_box">
                <span class="fa fa-mobile fa-2x"></span>
                <input name="mobile" type="text" placeholder="请输入手机号码" class="form_input" value=""/>
            </div>
            <div class="form_input_box captcha_code">
                <input name="img_captcha" type="text" placeholder="请输入图形验证码" value="" class="form_input"/>
                <img src="/m/default/img_captcha" onclick="this.src="<?= \Yii::$app->params['domain']['m'] ?>"+/default/img_captcha?'+Math.random();"/>
            </div>
            <div class="form_input_box phone_code">
                <span class="fa fa-lock fa-2x"></span>
                <input name="captcha_code" type="text" placeholder="请输入手机验证码" class="form_input"/>
                <button type="button" class="get_captcha">获取验证码</button>
            </div>
        </div>
        <div class="op_box">
            <input style="width: 100%;" type="button" value="绑定" class="red_btn dologin"/>
        </div>
    </div>
