#Yii2-tinymce is extention for Yii Framework 2.0

### Usage Example
~~~php
echo letyii\tinymce\Tinymce::widget([
    'htmlOptions' => array(
        'name' => 'testName',
        'id' => 'testid',
    ),
    'configs' => array(
        'selector' => 'textarea',
        'link_list' => array(
            array(
                'title' => 'My page 1',
                'value' => 'http://www.tinymce.com',
            ),
            array(
                'title' => 'My page 2',
                'value' => 'http://www.tinymce.com',
            ),
        ),
    ),
]);
~~~
