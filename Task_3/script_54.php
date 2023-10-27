<!-- Create a PHP script that extracts a specific column from a multidimensional array using
the array_column() function. -->

<?php

    $student = array(array('id' => 101, 'name' => 'ravi', 'age' => 20 ),
                     array('id' => 201, 'name' => 'vishal', 'age' => 20 ),
                     array('id' => 301, 'name' => 'mehul', 'age' => 21 ),
                     array('id' => 401, 'name' => 'milan', 'age' => 19 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>