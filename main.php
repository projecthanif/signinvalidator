<?php
abstract class Main{


    public $fname;
    public $lname;
    public $email;
    public $pnumber;
    public $pwd;

    abstract function __construct($fname,$lname,$email,$pnumber,$pwd);
   
   



}