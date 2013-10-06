<?php
class User extends AppModel {
    public $name = 'User';


    public $validate = array(
        'username' => array(
            array('rule' => array('custom', '/^[a-zA-Z0-9]+$/'), 'message' => '半角英数字で入力してね'),
            array('rule' => 'isUnique', 'message' => '既に使用されているユーザー名です')
        ),
        'password' => array(
            array('rule' => array('custom', '/^[a-zA-Z0-9]+$/'), 'message' => '半角英数字で入力してね'),
            array('rule' => array('minLength', 6), 'message' => 'パスワードは半角英数で６文字以上としてください'),
            array('rule' => array('maxLength', 20), 'message' => 'パスワードは半角英数で20 文字以下としてください')
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            // パスワードハッシュ化
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
    }
}
