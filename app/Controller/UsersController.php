<?php
class UsersController extends AppController {
    public $layout;
    public $uses = array('User');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'bookpecker';
        $this->Auth->allow('add', 'login');
    }

    public function add() {
        if($this->request->is('post')) {
            var_dump($this->request->data);exit;
        }
    }

    public function login() {
        if($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('ログインIDとパスワードの組み合わせが間違っています。');
            }
        }
    }

    public function logout() {
        $this->Auth->logout();
        return $this->redirect('/');
    }
}
