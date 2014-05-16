#Yii2-tinymce is extention for Yii Framework 2.0

### Usage Example
~~~php
$model = Article::findOne(1);
echo $form->field($model, 'content')->widget(letyii\tinymce\Tinymce::className(), [
    'htmlOptions' => [
        'name' => 'testName',
        'id' => 'testid',
    ],
    'configs' => [ // Read more: http://www.tinymce.com/wiki.php/Configuration
        'selector' => 'textarea',
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
