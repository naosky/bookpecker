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

    public function search() {
        //if(!empty($this->User->id)) {
            $this->Pas->setLocale('jp');
            $parameters = array(
                 'Keywords' => 'OnePeace',
                 'SearchIndex' => 'Books',
                 'ResponseGroup' => 'Medium'
            );
            $results = $this->Pas->itemSearch($parameters);
            var_dump($results);exit();
        //}
    }

}