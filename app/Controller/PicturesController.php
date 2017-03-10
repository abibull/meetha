<?php
class PicturesController extends AppController{

    public function add($id){
        if ($this->Session->read('Auth.User.type') == 'admin'){
            if (!empty($this->request->data)){
                if (!empty($this->request->data['Picture']['smimg']['name']) && !empty($this->request->data['Picture']['mdimg']['name']) && !empty($this->request->data['Picture']['lgimg']['name'])){

                    $filesm = $this->request->data['Picture']['smimg'];
                    echo '<pre>';
                    print_r($filesm);
                    echo '</pre>';
                    $filemd = $this->request->data['Picture']['mdimg'];
                    $filelg = $this->request->data['Picture']['lgimg'];

                    $extsm = substr(strtolower(strrchr($filesm['name'], '.')), 1);
                    $extmd = substr(strtolower(strrchr($filemd['name'], '.')), 1);
                    $extlg = substr(strtolower(strrchr($filelg['name'], '.')), 1);

                    $arr_ext = array('jpg', 'jpeg', 'gif','png');

                    if (in_array($extsm , $arr_ext) && in_array($extmd , $arr_ext) && in_array($extlg , $arr_ext)){

                        move_uploaded_file($filesm['tmp_name'], WWW_ROOT . 'img/'. $filesm['name']);
                        move_uploaded_file($filemd['tmp_name'], WWW_ROOT . 'img/'. $filemd['name']);
                        move_uploaded_file($filelg['tmp_name'], WWW_ROOT . 'img/'. $filelg['name']);

                        $this->request->data['Picture']['smimg'] = $filesm['name'];
                        $this->request->data['Picture']['mdimg'] = $filemd['name'];
                        $this->request->data['Picture']['lgimg'] = $filelg['name'];
                        $this->request->data['Picture']['product_id']=$id;
                    }
                }

                if ($this->Picture->save($this->data)){

                    $this->redirect(array('controller'=>'products','action'=>'swtlst'));
                }
            }
        }

    }

    public function update($id){
        if ($this->Session->read('Auth.User.type') == 'admin'){

            $picid = $this->Picture->find('list',array('conditions'=>array('Picture.product_id'=>$id)));
            $data = $this->Picture->findById($picid,array('recursive' => 0));
            echo '<pre>';
            print_r($data);
            echo '</pre>';
            if($this->request->is(array('post','put'))){

            }
            else{
                $this->request->data = $data;
            }
        }
        else{
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
    }
}