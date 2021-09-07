<?php
class Contact{
    public $host="us-cdbr-east-04.cleardb.com";
    public $user="b08c1808084ca5";
    public $pass="3a79ca18";
    public $db="heroku_0af9df796b9f7d5";
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
