<?php 
class MylistsController extends AppController {
    public $layout;
    public $uses = array('User','Mylist');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout =  'bookpecker';
    }

    public function index() {
    
    }
}