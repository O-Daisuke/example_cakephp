<?php

class Post extends AppModel{
    
    public $hasMany = 'Comment';
    
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message'=>'入力してください。'
        ),
        'body' => array(
            'rule'=>'notEmpty'
        )
    );
}

