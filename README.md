# Yii2-tinymce is extention for Yii Framework 2.0
Renders a [TinyMCE WYSIWYG text editor plugin](http://www.tinymce.com/) widget.

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "letyii/yii2-tinymce" "dev-master"
```
or add

```json
"letyii/yii2-tinymce": "dev-master"
```

to the require section of your application's `composer.json` file.

## Usage Example
~~~php
$model = Article::findOne(1);
echo $form->field($model, 'content')->widget(letyii\tinymce\Tinymce::className(), [
    'options' => [
        'id' => 'testid',
    ],
    'configs' => [ // Read more: http://www.tinymce.com/wiki.php/Configuration
        'link_list' => [
            [
                'title' => 'My page 1',
                'value' => 'http://www.tinymce.com',
            ],
            [
                'title' => 'My page 2',
                'value' => 'http://www.tinymce.com',
            ],
        ],
    ],
]);
~~~
