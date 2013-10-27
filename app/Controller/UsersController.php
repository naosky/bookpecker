<?php
class UsersController extends AppController {
//test
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
                    $user = $this->_add_login($this->request->data);
                    $this->set(compact('user'));
                    $this->redirect($this->Auth->redirect());
                } else {
                    $msg = 'ユーザーの登録に失敗しました。';
                    $msg_level = CLASS_ERROR;
                    $this->set(compact('msg'));
                    $this->set(compact('msg_level'));
                }
            } 
        }
    }

    public function login() {
        if($this->request->is('post')) {
            if ($this->Auth->login()) {
//                var_dump($this->Auth->User);exit;
                $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
//                var_dump($this->Auth->user('id'));exit;
                $this->set(compact('user'));
                $this->redirect($this->Auth->redirect());
            } else {
                $msg = 'ユーザー名とパスワードの組み合わせが間違っています';
                $msg_level = CLASS_ERROR;
                $this->set(compact('msg'));
                $this->set(compact('msg_level'));
            }
        }
    }

    public function logout() {
        $this->Auth->logout();
        return $this->redirect('login');
    }

    private function _add_login($user_info) {
        if($this->Auth->login($user_info)) {
            var_dump($this->Auth->user);exit;
            $user = $this->User->find('first',array('conditions'=>array('id'=>$this->Auth->user('id'))));
            var_dump($user);exit;
            return $user;
        } else {
            $msg = 'ログインに失敗しました。';
            $msg_level = CLASS_ERROR;
            $this->set(compact('msg'));
            $this->set(compact('msg_level'));
            $this->redirect('login');
        }
    }
}
