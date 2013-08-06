<?php
class UsersController extends AppController {
    public $layout;
    public $uses = array('User');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'login');
    }

    public function add() {

    }

    public function login() {
        $this->layout = 'bookpecker';
        if($this->request->is('post')) {
            var_dump($this->request->data);exit;
        }


    }
}
