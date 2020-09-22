<?php
class User{
  public $id;
  public $name;
  public $lastname;
  public $password;
  public $login;

  public function __construct($id, $name = NULL, $lastname = NULL, $password = NULL, $login = NULL ){
    $this -> id = $id;
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> password = $password;
    $this -> login = $login;
  }

  public function __toString() {
    return    'ID  = ' . $this -> id . '<br>'
            . 'Name = ' . $this -> name . '<br>'
            . 'Lastname = ' . $this -> lastname . '<br>'
            . 'Password = ' . $this -> password . '<br>'
            . 'Login = ' . $this -> login;
  }

}

$user_1 = new User(1, "David", "Janashia",  "password1", "DJ");
$user_2 = new User(2, "John", "Smith", "password2", "JS");

echo $user_1;
echo '<br><br>';
echo $user_2;

?>
