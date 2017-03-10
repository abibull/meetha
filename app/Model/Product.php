<?php
class Product extends AppModel{
    public $hasMany = array(
        'Picture'=>array(
            'dependent'=> true
        ));
}
?>