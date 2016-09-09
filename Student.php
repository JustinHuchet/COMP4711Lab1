<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Justin
 */
class Student {
    
    //Initializes the student object
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //sets the student's email(s)
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //sets the student's grade(s)
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //takes the average of all the student's grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //prints and formats all the information we have on the student
    function toString() {
        $result = "<h1 style=\"font-size:20px\">".$this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")</h1>";
        foreach($this->emails as $which=>$what)
            $result .= "<strong>".$which . ':'."</strong>\t<i>". $what. "</i>\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
