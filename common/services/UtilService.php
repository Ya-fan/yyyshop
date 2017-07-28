<?php 
namespace app\common\services;


use yii\helpers\Html;
class UtilService
{
	public static function getIP()
	{
		// 反向代理
		if( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
		{
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		} 

		return $_SERVER['REMOTE_ADDR'];
	}

	public static function encode( $display )
	{
		return Html::encode( $display );
	}

	public static function getRootPath(  )
	{
		
		return	str_replace('\\','/', dirname( \Yii::$app->vendorPath ) );
	}	

	public static  function isWechat()
	{
		$ug= isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
		
		if( stripos($ug,'micromessenger') !== false )
		{
			return true;
		}
		
		return false;
	}



}

 ?>