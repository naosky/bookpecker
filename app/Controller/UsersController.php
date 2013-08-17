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
                    $msg = 'ユーザーの登録が完了しました。';
                    $msg_level = 'alert-success';
                    $this->redirect('login');
                } else {
                    $msg = 'ユーザーの登録に失敗しました。';
                    $msg_level = 'alert-danger';
                }
                $this->set(compact('msg'));
                $this->set(compact('msg_level'));
            } 
        }
    }

    public function login() {
        if($this->request->is('post')) {
            if ($this->Auth->login()) {
                $user = $this->User->find('first',array('conditions'=>array('id'=>$this->User->id)));
                $this->set(compact('user'));
                return $this->redirect($this->Auth->redirect());
            } else {
                $msg = 'ログインIDとパスワードの組み合わせが間違っています';
                $msg_level = 'alert-danger';
                $this->set(compact('msg'));
                $this->set(compact('msg_level'));
            }
        }
    }

    public function logout() {
        $this->Auth->logout();
        return $this->redirect('login');
    }
}
