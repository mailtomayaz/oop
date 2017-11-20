<?php

/* 
 * example of inheritance in php
 * this class will extend the person class
 */

//extend person class

class employ extends person{
    
    //add constructor function
    function __construct($person_name = '') {
        $this->set_name($person_name);
    }
    /*

     * overriding function set_name()
     * redeclear method
     * change functionalty as you wish
     *      */
    
     function set_name($new_name) {
        if($new_name == 'Ayaz'){
            $this->name = strtoupper($new_name); 
        }else{
            person::set_name($new_name);
        }
    }
    
    
}

