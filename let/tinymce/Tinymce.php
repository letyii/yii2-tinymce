<?php
/**
 * Tinymce v4.0.21
 * Homepage: http://www.tinymce.com/
 * Examples: http://www.tinymce.com/tryit/basic.php
 * Options: http://www.tinymce.com/wiki.php/Configuration
 * 
 * Let Yii2 Tinymce v4.0.21 (Yii Framework 2.0 extention)
 * Auth: maibaduy (maibaduy@gmail.com), nguago (nguago@let.vn)
 * Group: LetYii Team (letyii.com)
 */

namespace frontend\widgets\let\tinymce;
use yii\helpers\Html;
use frontend\widgets\let\tinymce\TinymceAssets;

class Tinymce extends \yii\base\Widget
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
			tinymce.init('. $this->getConfigs() .');
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

	public function getConfigs ()
	{
        return $configs = json_encode($this->configs);
	}

}
