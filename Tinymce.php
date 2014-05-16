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
    public $class = '';
    public $content = '';
    public $configs = array();
    public $htmlOptions = array();

    /**
	 * Initializes the widget.
	 */
	public function init()
	{
		TinymceAssets::register($this->view);

		$this->getView()->registerJs('
			tinymce.init('. Json::encode($this->configs) .');
		');
	}

	/**
	 * Renders the widget.
	 */
	public function run()
	{
        if (!isset($this->htmlOptions['name']))
            $this->htmlOptions['name'] = 'tinymce';
        $html = Html::textarea($this->htmlOptions['name'], $this->content, $this->htmlOptions);
		echo $html;
	}

}
