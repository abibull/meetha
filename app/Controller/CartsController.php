<?php
class CartsController extends AppController{
    public $components = array('Flash' , 'Session' , 'Cookie');
    
    public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow('delete');
        $this->Cookie->name = 'crt';
        $this->Cookie->time = 1296000;  //  '15 DAYS'
		#$this->Cookie->time = 1800; // for 30 mins
        #$this->Cookie->path = '/bakers/preferences/';
        #$this->Cookie->domain = '';
        #$this->Cookie->secure = true;  // i.e. only sent if using secure HTTPS
        $this->Cookie->key = 'qSI232qs*&sXOw!adre@34SAv!@*(XSL#$%)asGb$@11~_+!@#HKis~#^';
        #$this->Cookie->httpOnly = true;
        $this->Cookie->type('aes');
		
		
		
		
    }

	
######################################  ADD CART  #########################################

    public function addcrt($id){

        if($this->Session->check('Auth.User')) {
            $this->Cart->Create();
            $this->request->data['Cart']['ck_val'] = 0;
            $this->request->data['Cart']['user_id'] = $this->Session->read('Auth.User.id');
            $this->request->data['Cart']['product_id'] = $id;
            $this->Cart->save($this->request->data);
			$this->redirect(array('controller'=>'carts','action'=>'basket'));
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
		$this->redirect(array('controller'=>'carts','action'=>'basket'));
    }

################################# Show Number of items in Carts ##########################################

    public function showitemsincart(){
		
		######################### Delete data which have older by 45 days from carts #####################
		$this->Cart->query('Delete from carts where modified < date_sub(now(),interval 45 day);');
		
		// Only accessible via requestAction()		
						
		if($this->Session->check('Auth.User')) {				
			$authuserid = $this->Session->read('Auth.User.id');			
			$cartdata = $this->Cart->find('all',array('conditions'=>array('user_id ' => $authuserid)));
			$countdata = sizeof($cartdata);			
			return $countdata;						
		}
		else{   
			$ckvals = $this->Cart->find('all',array('conditions'=>array('user_id' => 0)));   ####ckval holds cookies values
			foreach($ckvals as $ckval){
				if( !$this->Cookie->check($ckval['Cart']['ck_val']) ){
					$this->Cart->delete($ckval['Cart']['id']);
				}												
			}
			$cartdata = $this->Cart->find('all',array('conditions'=>array('user_id' => 0)));
			$countdata = sizeof($cartdata);				
			return $countdata;					
		}		     
    }
	
############################## BASKET ############################	

	public function basket(){
		if($this->Session->check('Auth.User')){
			$crtid = $this->Cart->find('list', array('fields'=> array('product_id') , 'conditions' => array('user_id' => $this->Session->read('Auth.User.id'))));			
		}
		else{			
			$crtid = $this->Cart->find('list', array('fields'=> array('product_id') , 'conditions' => array('user_id' => 0)));			
			#echo '<pre>';
			#print_r ($contents);
			#echo '</pre>';	
		}
		$this->loadModel('Product');
		$contents = $this->Product->find('all' , array('conditions' => array('id' => array_values($crtid))));
		$this->set('contents',$contents);
	}
	
	public function delete($id ){
		if($this->Session->check('Auth.User')){
			$crtid = $this->Cart->find('list',array('conditions'=>array('product_id'=>$id,'user_id'=>$this->Session->read('Auth.User.id'))));
			$this->Cart->delete($crtid);
		}else{
			$this->Cart->delete($this->Cart->find('list',array('conditions'=>array('product_id'=>$id,'user_id'=>0))));			
		}
		$this->redirect(array('controller'=>'carts','action'=>'basket'));
	}

}
?>