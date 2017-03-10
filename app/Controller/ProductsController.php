<?php
class ProductsController extends AppController{
    public $components = array('Flash' , 'Session' , 'Cookie');

    public function index(){
        $list = $this->Product->find('all');
        $this->set('list',$list);
        /*echo '<pre>';
        print_r($list);
        echo '</pre>';*/
    }

    public function addswt(){
       $userinfo = $this->Session->read('Auth.User.type');
        if($userinfo == 'admin'){
            if($this->request->is('post')){
                $this->Product->create();
                if($this->Product->save($this->request->data)){
                    $this->redirect(array('controller'=>'pictures','action'=>'add',$this->Product->getLastInsertId()));
                }
            }
        }
        else{
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
    }

    public function swtlst(){
        $userinfo = $this->Session->read('Auth.User.type');
        if($userinfo == 'admin'){
            $list = $this->Product->find('all');
            $this->set('list',$list);
        }
        else{
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
    }

    public function editswt($id){
        if ($this->Session->read('Auth.User.type') == 'admin'){
            $data = $this->Product->findById($id);
            if($this->request->is(array('post','put'))){
                $this->Product->id=$id;
                if ($this->Product->save($this->request->data)){
                    $this->redirect(array('controller'=>'products','action'=>'swtlst'));
                }
            }
            else{
                $this->request->data=$data;
            }
        }
        else{
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
    }

    public function deleteswt($id){
        if ($this->Session->read('Auth.User.type') == 'admin'){

            if($this->request->is(array('post','put'))){

                if ($findimage = $this->Product->Picture->find('all',array('fields'=>array('smimg','mdimg','lgimg'),'conditions'=>array('product_id'=>$id)))){
                    /*echo '<pre>';
                    print_r($findimage);
                    echo '</pre>';*/

                    $i =0;
                    while(isset($findimage[$i])){
                        @unlink(WWW_ROOT . 'img/'.$findimage[$i]['Picture']['smimg']);
                        @unlink(WWW_ROOT . 'img/'.$findimage[$i]['Picture']['mdimg']);
                        @unlink(WWW_ROOT . 'img/'.$findimage[$i]['Picture']['lgimg']);
                        $i = $i + 1;
                    }
                    $this->Product->deleteAll(array('Product.id'=>$id), true);
                    $this->redirect(array('controller'=>'products','action'=>'swtlst'));
                }
                else{
                    $this->Product->delete($id);
                    $this->redirect(array('controller'=>'products','action'=>'swtlst'));
                }
            }
        }
    }

    public function detail($id){
        $lists = $this->Product->find('all',array('conditions'=>array('product.id'=>$id)));
        $this->set('lists',$lists);
        /*echo '<pre>';
        print_r($lists);
        echo '</pre>';*/
    }

##############################################  NAMKEEN   ##################################################

    public function namkeen(){

    }

    public function nmklst(){
        $userinfo = $this->Session->read('Auth.User.type');
        if($userinfo == 'admin'){

        }
        else{
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
    }

    public function addnmk(){
        $userinfo = $this->Session->read('Auth.User.type');
        if($userinfo == 'admin'){

        }
        else{
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }

    }


    public function term(){

    }

    public function contact(){

    }

    public function ordershistory(){

    }

    public function orderhistory(){

    }

    public function wishlist(){

    }
}
?>