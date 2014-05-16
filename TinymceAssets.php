<?php

namespace letyii\tinymce;

class TinymceAssets extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/letyii/yii2-tinymce';
	public $js = [
		'tinymce/tinymce.min.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\web\JqueryAsset',
	];
}
