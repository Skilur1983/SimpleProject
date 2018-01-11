<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testMeAway
 *
 * @author dmitry
 */

require_once "expression.php";

class testMeAway {
    public $name, $password;
    
    function getName(){
       return  $this->name;
    }
    
    function getPassword(){
        return $this->password;
    }
    
    function credentials(){
        $credentials = $this->name.' / '.$this->password;
        return $credentials;
    }

    static function fun(){
        println('Best ever');
    }
}

println('Here comes new User. Be ware');

$User1 = new testMeAway();
$User1->name = "Joe";
$User1->password = "pass";
println($User1->getName().' / '.$User1->getPassword());
println($User1->credentials());
$User2 = clone $User1;
$User2->name = "Kraft";
println($User2->name);
println("Here comes the magic");
println("User1's name is ...".$User1->name." And User2's name is ...".$User2->name);
println($User1->name);
println($User2->name);

testMeAway::fun();
$User1->fun();

$temp = new Test();
echo "Test 1: ".Test::$static_property;
echo "Test 2: ".$temp->get_sp();
echo "test 3: ".$temp->static_property;
println(" ");

class Test{
    static $static_property = "This is static, beatch";
    
    function get_sp(){
        return self::$static_property;
    }
}

class User extends testMeAway{
    public $phone, $email;
    
    function display(){
        println($this->name);
        println($this->password);
        println($this->phone);
        println($this->email);
    }
}

$Freak = new User();
$Freak->name = "You know my name";
$Freak->password = "Never forget me";
$Freak->phone = "I'll ring when I can";
$Freak->email = "You've got email dumbass";
$Freak->display();