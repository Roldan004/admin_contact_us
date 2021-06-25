<?php 
class Contact{
    private $host="localhost";
    private $user="admin";
    private $pass="password";
    private $db="phplearning5";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $fname=$data['name'];
        $lname=$data['surname'];
        $email=$data['email'];
        $phone=$data['phone'];
        $title=$data['title'];
        $message=$data['message'];
        $q="insert into contact_us set name='$fname', surname='$lname', email='$email', phone='$phone', title='$title', message='$message'";
       $data= $this->mysqli->query($q);    }
}