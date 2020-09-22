<?php
class User{
  public $id;
  public $name;
  public $lastname;
  public $document_type;
  public $document_number;

  public function __construct($id, $name = NULL, $lastname = NULL, $document_type = NULL, $document_number = NULL ){
    $this -> id = $id;
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> document_type = $document_type;
    $this -> document_number = $document_number;
  }

  public function __toString() {
    return    'ID  = ' . $this -> id . '<br>'
            . 'Name = ' . $this -> name . '<br>'
            . 'Lastname = ' . $this -> lastname . '<br>'
            . 'Document_type = ' . $this -> document_type . '<br>'
            . 'Document_number = ' . $this -> document_number;
  }

}

$user_1 = new User(1, "David", "Janashia",  "CI", "1357924680");
$user_2 = new User(2, "John", "Smith", "CI", "1234567890");

echo $user_1;
echo '<br><br>';
echo $user_2;

?>
