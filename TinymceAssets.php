<?php

namespace letyii\tinymce;

class TinymceAssets extends yii\web\AssetBundle
{
	public $sourcePath = '@app/widgets/let/tinymce';
	public $basePath = '@webroot/assets';
	//public $baseUrl = '@web';
	// public $css = [
	// ];
	public $js = [
		'tinymce/tinymce.min.js',
		// 'tinymce/tinymce.run.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\web\JqueryAsset',
	];
}
