<?php
//    echo "<html>";
//        echo "<head>";
//            echo "<title>";
//                echo "HOME";
//            echo "</title>";
//        echo "</head>";
//        echo "<body>";
//            echo "<h1>This is a heading.</h1>";
//            echo "<p>This is a Paragraph.</p>";
//        echo "</body>";
//    echo "</html>";
//?>

<!--<html>-->
<!--    <head>-->
<!--        <title> --><?php //echo "HOME"; ?><!-- </title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1> --><?php //echo "This is a heading."; ?><!-- </h1>-->
<!--        <p> --><?php //echo "This is a Paragraph."; ?><!-- </p>-->
<!--    <input type="text" value="--><?php //echo "input"; ?><!--">-->
<!--    </body>-->
<!--</html>-->


<?php
    //3 major rules for creating a variable
        /*
            * Start with $ sign
            * A-Z, a-z, 0-9, _
            * No number in first
         */
    //3 standard rules for creating variable
        /*
            * small_letter
            * meaning full
            * readable
         */

    $first_name; //good but at present most uses camelCase;
    $firstName = "Rabik";
    $lastName = "hasan";

    echo $firstName.' '.$lastName.'<br/>';


    /*
        * Arithmetic Operator
            * Binary (+, -, *, /, %)
            * Unary (++, --, (-) )
        * Assignment Operator
            * =, +=, -=, *=, /=, %=, .=
        * Conditional Operator
            * >, >=, <, <=, ==, !=, ===,!==
        * Logical Operator
            * &&, ||, !
     */

    $x = 10;
    $y = 20;

    echo $x+$y.'<br/>';
    echo $x-$y.'<br/>';
    echo $x*$y.'<br/>';
    echo $x/$y.'<br/>';
    echo $x%$y.'<br/>';
    echo $x++.'<br/>';
    echo --$x.'<br/>';
    echo ($x+=$y).'<br/>';
    echo ($x-=$y).'<br/>';
    echo ($x*=$y).'<br/>';
    echo ($x/=$y).'<br/>';
    echo ($x%=$y).'<br/>';
    $x = 10;
    $y = 20;
    echo ($x.=$y).'<br/>';
    echo (($x.=$y)+10).'<br/>';
    $z = ($x.=$y)+10;

    if($x%400==0) {
        echo 'Leap Year.<br/>';
    } else if($x%4==0 && $x%100!=0) {
        echo 'Leap Year.<br/>';
    } else {
        echo 'Not Leap Year.<br/>';
    }

    switch ($x){
        case 1:
            //do something
            break;
        case 2:
            //do something
            break;
        case 3:
            //do something
            break;
        default:
            //do something
    }


    /*
         * Single Line Statement
         * Conditional Statement
            * IF
            * IF ELSE
            * IF ELSE IF
            * SWITCH
         * Repeated Statement
            * FOR
            * WHILE
            * DO WHILE
            * FOREACH
     */

    for($i=0 ;$i<10; $i++){
        echo 'We are learning php.<br/>';
    }
    $i=0;
    while($i<10){
        echo 'While php.<br/>';
        $i++;
    }
    $i=0;
    do{
        echo 'Next we will learn laravel.<br/>';
        $i++;
    }
    while($i<10);

    function demo() {
        echo "Hello Function.<br/>";
    }

    demo();
?>