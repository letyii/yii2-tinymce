<?php

// namespace frontend\assets;
namespace frontend\widgets\let\tinymce;

use yii\web\AssetBundle;

class TinymceAssets extends AssetBundle
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
