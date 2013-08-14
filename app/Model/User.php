<?php
class User extends AppModel {
    public $name = 'User';


    public $validate = array(
        'username' => array(
            array('rule' => array('custom', '/^[a-zA-Z0-9]+$/'), 'message' => '半角英数字で入力してね'),
            array('rule' => 'isUnique', 'message' => 'すでに使われてるよ')
        ),
        'password' => array(
            array('rule' => array('custom', '/^[a-zA-Z0-9]+$/'), 'message' => '半角英数字で入力してね'),
            array('rule' => array('minLength', 6), 'message' => '6 文字以上入力してね'),
            array('rule' => array('maxLength', 20), 'message' => '25 文字以下にしてね')
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            // パスワードハッシュ化
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
    }
}
