<?php

//namespace yii\bootstrap;
namespace frontend\widgets\let\tinymce;
//namespace letkit\tinymce;

use Yii;
use yii\helpers\ArrayHelper;
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
        $htmlOptions = $this->getHtmlOptions();
		$html = '<textarea '.$htmlOptions.'></textarea>';
		echo $html;
	}

	public function getConfigs ()
	{
        return $configs = json_encode($this->configs);
	}

	public function getHtmlOptions()
	{
        $options = array();
        foreach ($this->htmlOptions as $option => $value) {
            $options[] = $option . '="' . $value .'"';
        }
        return $options = implode(' ', $options);
	}

}
