<?php

/* 
 * Application for OOP concepts
 */

// Report all errors
//error_reporting(E_ALL);
// ini_set( "display_errors", 1 );
//include class
include './class_lib.php';
include './class_emp.php';

//create object of class person .. instantiation

$personOne      = new person();
$personTwo      = new person();
$personThree    = new person();

//set object data/property

$personOne->set_name('Person One');
$personTwo->set_name('Person two');
$personThree->set_name('Person three');


//access object data don't access object propety directly i.e  $personOne->name always use setter and getter functions 
echo $personOne->get_name();
echo "<br>";
echo $personTwo->get_name();
echo "<br>";
echo $personThree->get_name();


//create an object with a constructor i.e 

$perCost =  new person('Muhammad Ayaz');
echo "<br>";
echo $perCost->get_name();

//access modifier examples

$perFad = new person();
//name is public variable
echo "<br>";
$perFad->set_name('Fahad');
echo $perFad->get_name();
//access private variable
/*

 * Here i am trying to access private property of the class and getting the error ""
 * Fatal error: Cannot access private property person::$pin_number
 * because it is a private proprty and can not access outside the class
 *  */
//echo $perFad->pin_number;
//$perFad->pin_number= '1000';

//accessing private function try

//$perFad->get_pin_number();

/*

 * Reusing code with inheritance
 * 
 *  */

$mustf= new person('Mustfeez ');
echo "<br>";
echo $mustf->get_name();
echo "<br>";
$yous= new employ('Ayaz');
//$yous->set_name('Ayaz');
echo $yous->get_name();


/*

 * method overriding
 * we have set_name() method in base class  person()
 * if we want to change the functioality of that method somehow change in inherted class i. employ class
 * simply we reclear the method in the child class and do what ever functionalty you want to add in the function
 * this concept mean overriding method
 * we are going to override set_name() method in employ class
 *  */


