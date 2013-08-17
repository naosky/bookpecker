<?php 
class MylistsController extends AppController {
    public $layout;
    public $uses = array('User','Mylist','Booklist','Usertransaction');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout =  'mylist';
    }

    public function mylist() {
        if(!empty($this->User->id)) {

        }
    }

    public function complete() {
        if(!empty($this->User->id)) {

        }
    }

    public function bookadd() {
    
    }
}