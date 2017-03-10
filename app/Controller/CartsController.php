<?php
class CartsController extends AppController{
    public $components = array('Flash' , 'Session' , 'Cookie');

    ######################################  ADD CART  #########################################


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Cookie->name = 'crt';
        $this->Cookie->time = 1296000;  //  '15 DAYS'
        #$this->Cookie->path = '/bakers/preferences/';
        #$this->Cookie->domain = '';
        #$this->Cookie->secure = true;  // i.e. only sent if using secure HTTPS
        $this->Cookie->key = 'qSI232qs*&sXOw!adre@34SAv!@*(XSL#$%)asGb$@11~_+!@#HKis~#^';
        #$this->Cookie->httpOnly = true;
        $this->Cookie->type('aes');
    }

    public function addcrt($id){

        if($this->Session->check('Auth.User')) {
            $this->Cart->Create();
            $this->request->data['Cart']['ck_val'] = 0;
            $this->request->data['Cart']['user_id'] = $this->Session->read('Auth.User.id');
            $this->request->data['Cart']['product_id'] = $id;
            $this->Cart->save($this->request->data);

        }
        else{
            $ck_val = uniqid();
            $this->Cookie->write($ck_val,$id);
            #$pr_id = $this->Cookie->read($ck_val);
            $this->Cart->create();
            $this->request->data['Cart']['ck_val'] = $ck_val;
            $this->request->data['Cart']['user_id'] = 0;
            $this->request->data['Cart']['product_id'] = $id;
            $this->Cart->save($this->request->data);
        }

    }

################################# Show Carts ITEMS ##########################################

    public function showitemsincart(){
        if($this->Session->check('Auth.User')) {
            $authuserid = $this->Session->read('Auth.User.id');
            $cartdata = $this->Cart->find('all',array('user_id' => $authuserid));
            $countdata = sizeof($cartdata);
            return $countdata;
        }
        else{
            $cartdata = $this->Cart->find('all',array('user_id' => 0));

            $countdata = sizeof($cartdata);
            echo '<pre>';
            echo $countdata;
            echo '</pre>';
            return $countdata;
        }
    }
}
?>