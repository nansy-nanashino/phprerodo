<?php

// アクセス権
// - private: そのクラス内からのみアクセス可能
// - protected: そのクラス＋親子クラス内からのみアクセス可能
// - public: どこからでもアクセス可能

class User {
  // public $name;
  // private $name;
  protected $name;
  public function __construct($name) {
    $this->name = $name;
  }
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

class AdminUser extends User {
  public function sayHello() {
    echo "hello from $this->name";
  }
}

$tom = new User("Tom");
// echo $tom->name;
$steve = new AdminUser("Steve");
$steve->sayHello();