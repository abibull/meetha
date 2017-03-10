<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
    public $displayField = 'email';

    public function beforeSave($option = array()){
        if(isset($this->data['User']['password'])){
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
        }
    }

    public $validate = array(
        'email' => 'email',
        'password' => array(
            'rule' => array('minLength' , '8'),
            'message' => 'Minimum 8 characters long'
        ),
        'fname' => array(
            'rule' => 'notBlank',
            'required' => true
        ),
        'mob' => array(
            'phone_no_should_be_numeric'=>array(
                'rule' => 'numeric',
                'message'=>'Phone number should be numeric'
            ),
            'Phone_no_should_be_unique'=>array(
                'rule' => 'isUnique',
                'message'=>'Phone number already exist'
            ),
            'Phone_no_should_have_10_length'=>array(
                'rule' => '/^[0-9]{10,10}$/i',
                'message' => 'Only integers, min and max 10 characters'
            )
        )
    );
}
?>