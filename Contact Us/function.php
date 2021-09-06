<?php
class Contact{
    public $host="us-cdbr-east-04.cleardb.com";
    public $user="b0ecf54bec4eba";
    public $pass="b5205414";
    public $db="heroku_02106e4305f1793";
    public $mysqli;

    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function contact_us($data){
        $fname=$data['name'];
        $lname=$data['surname'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];
        $q="insert into contact_us set first_name='$fname', last_name='$lname', email='$email', phone='$phone', message='$message'";
       $data= $this->mysqli->query($q);
       
    }

}

?>
