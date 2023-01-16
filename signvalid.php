<?php
    require_once('mydb.php');
require_once("main.php");
    

class Signvalid extends Main{
    public $fname;
    public $lname;
    public $email;
    public $pnumber;
    public $pwd;
   
    
    function __construct($fname,$lname,$email,$pnumber,$pwd)
    {
        
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->pnumber = $pnumber;
        $this->pwd = $pwd;
    }
    function getfname(){
        return $this->fname;
    }
    function getlname(){
        return $this->lname;
    }
    function getemail(){
        return $this->email;
    }
    function getpnumber(){
        return $this->pnumber;
    }
    function getpwd(){
        return $this->pwd;
    }
    
}

$new = new Signvalid($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['pnumber'],$_POST['pwd']);


$fname = $new->fname;
$lname = $new->lname;
$email = $new->email;
$pnumber = $new->pnumber;
$pwd= $new->pwd;




