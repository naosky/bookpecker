<?php
class UsersController extends AppController {
    public $layout = 'bookpecker';
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'login');
    }

    public function add() {

    }

    public function login() {

    }
}
