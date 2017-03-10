<?php
class UsersController extends AppController{
    public $components = array('Session' , 'Flash');
    public $uses = array('Cart');
    public function index(){

        #echo '<pre>';
        #echo sizeof( $this->Cart->find('all',array('conditions'=>array('Cart.ck_val !='=> 0 ) ) ) );
       # echo '</pre>';
    }

    public function login(){
        if($this->request->is('post')){
            if($this->Auth->login()){
                if( sizeof( $this->Cart->find('all',array('conditions'=>array('Cart.ck_val !='=> 0 ),'recursive' => -1 ) ) ) ){
                    $this->Cart->updateAll(array(
                        'ck_val' => 0,
                        'user_id' => $this->Session->read('Auth.User.id')
                        ),
                        array('Cart.ck_val !=' => 0 , 'Cart.user_id' => 0)
                    );
                    #$this->Cart->save();
                }

                $this->redirect(array('controller'=>'products' , 'action' => 'index'));
            }else{
                $this->Session->setFlash('<span style="color:red;">Invalid User</span>');
            }
        }
    }

    public function signup(){
        if($this->request->is('post')){
            $this->User->create();
            if($this->User->save($this->request->data)){
                $this->redirect(array('controller'=>'users' , 'action' => 'login'));
            }
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function accountupdate(){
        $id = $this->Session->read("Auth.User.id");
        if ($this->request->is(array('post'))) {
            $this->User->recursive=-1;
            $userInfo=$this->User->findById($id);
            if (!empty($this->request->data['User']['password']) && !empty($this->request->data['repassword'])) {
                if ($this->request->data['User']['password'] == $this->request->data['repassword']) {

                    if(Security::hash($this->data['oldpassword'], 'blowfish', $userInfo['User']['password']) == $userInfo['User']['password']){

                        $this->User->id = $id;
                        if ($this->User->saveField('password' ,$this->request->data['User']['password']) ) {
                            $this->Session->setFlash('<span style="color: darkgreen">Password Changed Successfully</span>');
                            $this->redirect(array('controller' => 'users' , 'action' => 'accountupdate'));
                        }
                        else{
                            $this->Session->setFlash('not save');
                        }
                    }
                    else {
                        $this->Session->setFlash('<span style="color: red">Old password is incorrect</span>');
                    }
                } else {
                    $this->Session->setFlash('<span style="color: red">Password and Re password does not match</span>');
                }
            } else {
                $this->Session->setFlash('<span style="color: red">Password and Re password cannot be empty</span>');
            }
        }
    }
}
?>