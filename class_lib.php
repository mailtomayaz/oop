<?php

/* 
 * Simple page to show class in PHP
 * 
 * author: Muhammad Ayaz
 * Dated:Nov 21,2017
 */

//create class
class person{
    
    //add variables called properties 
    //restructing access to properties using access modifiers 
    /*

     * there are three access modifiers public,private and protected
     * public is default modifier
     * when you declear property with var it is considerd public
     *      */
    //public: Have no access restructions, mean anyone can access
    var $name;
    public $height;
    //protected: only the same class and classes drived from that class can access the property
    protected $social_insurance;
    //private: only the same class can access the property
    private $pin_number;


    //constructor... its allow us to initiase object properties when object create
    //php automaticly call __construct() method when you create object from class
    
    function __construct($person_name='') {
        $this->name = $person_name;
    }
        
    //add functions/methods (funcitons are called methods in class)
    //set name acceccable to this and inherted classes
    function set_name($new_name){
        $this->name = $new_name;   
    }
    
    //get name 
     function get_name(){
        return $this->name;
    }
    
   /*

    * restricting access to methods
    * this will word as with the object properties
    * i.e
    *     */
    
    private function get_pin_number(){
        return $this->pin_number;
    }
    
}

//class employ extends person{
//    
//    //add constructor function
//    function __construct($person_name = '') {
//        $this->set_name($person_name);
//    }
//    
//}



