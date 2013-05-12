<?php

class PostsController extends  AppController{
    
    //public $scaffold;
    
    public $helpers = array('Html','Form');
    
    public function index(){
        $params = array('order'=> 'modified desc','limt' => 5);
        
        $this->set('posts',$this->Post->find('all',$params));
        $this->set('title_for_layout','記事一覧');
    }
    
    public function view($id = null){
        $this->Post->id = $id;
        $this->set('post',$this->Post->read());
    }
    
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
    
    public function edit($id = null){
        $this->Post->id = $id;
        if($this->request->is('get')){
            $this->request->data = $this->Post->read();
        } else {
            
        }
    }
    
}
