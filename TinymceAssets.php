<?php

namespace letyii\tinymce;

class TinymceAssets extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/tinymce/tinymce';
	public $js = [
		'tinymce.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
