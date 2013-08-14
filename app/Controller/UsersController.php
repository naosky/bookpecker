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
            if(!empty($this->request->data)) {
                if($this->User->save($this->request->data)) {
                    $this->Session->setFlash('ユーザーの登録が完了しました！LoginNow!!');
                    $this->redirect('login');
                } else {
                    $this->Session->setFlash('ユーザーの登録に失敗しました！');
                }
            } 
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
