<?php
/**
 * Tinymce v4.0.21
 * Homepage: http://www.tinymce.com/
 * Examples: http://www.tinymce.com/tryit/basic.php
 * Options: http://www.tinymce.com/wiki.php/Configuration
 * 
 * Let Yii2 Tinymce v4.0.21 (Yii Framework 2.0 extention)
 * @copyright Copyright (c) 2014 Let.,ltd
 * @author Ngua Go <nguago@let.vn>, Mai Ba Duy <maibaduy@gmail.com>
 */

namespace letyii\tinymce;
use yii\helpers\Html;
use yii\helpers\Json;
use letyii\tinymce\TinymceAssets;

class Tinymce extends \yii\widgets\InputWidget
{
    public $id = '';
    
    public $content = '';
    
    public $configs = [];

    public $addConfigString = '';

    /**
	 * Initializes the widget.
	 */
	public function init() {
		TinymceAssets::register($this->view);
	}

	/**
	 * Renders the widget.
	 */
	public function run() {
        $this->options['id'] = Html::getInputId($this->model, $this->attribute);
        $this->configs['selector'] = 'textarea#' . $this->options['id'];

        $configsEncode = Json::encode($this->configs);
        $configsEncode = rtrim($configsEncode, '}');

        $this->addConfigString = str_replace('{{id}}', $this->options['id'], $this->addConfigString);
        $configsEncode .= ','. $this->addConfigString .'}';

		$this->getView()->registerJs('tinymce.init('. $configsEncode .');');
        echo Html::activeTextarea($this->model, $this->attribute, $this->options);
	}
}
