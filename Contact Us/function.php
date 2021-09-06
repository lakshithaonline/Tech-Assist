<?php
class Contact{
    public $host="eu-cdbr-west-01.cleardb.com";
    public $user="b30408a4390f55";
    public $pass="9f19047b";
    public $db="heroku_bd0c0b070629615";
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
