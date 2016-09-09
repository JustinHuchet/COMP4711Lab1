<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //include the Student.php
            include('Student.php');

            //Initializes the students array
            $students = array();

            //Creates the first Student object
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            //Creates the second Student object
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //Creates the third Student object
            $third = new Student();
            $third->surname = "Huchet";
            $third->first_name = "Justin";
            $third->add_email('home','xxxxxxxx@gmail.com');
            $third->add_grade(42);
            $third->add_grade(69);
            $third->add_grade(88);
            $students['j456'] = $third;
            
            //sorts the student array
            ksort($students);
            
            //loops through the student array, printing each Student
            foreach($students as $student)
                echo $student->toString();
        ?>
    </body>
</html>
