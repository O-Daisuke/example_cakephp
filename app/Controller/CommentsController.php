<?php

class CommentsController extends  AppController{
    
    public $helpers = array('Html','Form');
    
    public function add(){
        if($this->request->is('post')){
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash('Success!');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFalse('failed!');
            }
        }
    }
    
    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->request->is('ajax')){
            if($this->Post->delete($id)){
                $this->autoRender = false;
                $this->AutoLayout = false;
                $response = array('id' => $id);
                $this->header('Contenet-Type:application/json');
                echo json_encode($response);
                exit();
            }
        }
        $this->redirect(array('action'=>'index'));
        
    }
    
}
