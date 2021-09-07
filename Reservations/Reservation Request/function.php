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

    public function reservation_request($data){
        $fname=$data['name'];
        $datetime=$data['datetime'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];
        $q="insert into reservation_request set full_name='$fname', date_and_time='$datetime', email='$email', phone='$phone', message='$message'";
       $data= $this->mysqli->query($q);
       
    }

}

?>
