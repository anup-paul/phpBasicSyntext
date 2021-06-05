<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

       echo "hello DesktopIt <br>";


       //Check CaseSensetive
       $language = "php";
       $language1 = "javaScript";

       echo "learning ".$language. "<br>";
    //    echo "learning ".$LANGUAGE. "<br>";
    //    echo "learning ".$LANguage. "<br>";
       echo "Confortable ".$language1. "<br>";

    //Variable Decleartion

        $text = "Declearetion Text";
        $x = 10;
        $y = 5.5;
        echo $text;
        echo "<br>";
        echo "I am learning php  $text <br>";
        echo "This is numeric value $x <br>";
        echo "This is Float value $y <br>";
        echo "Sum= ";
        echo $x + $y;

        echo "<br>";



    //Global Scope
        
        $a = 101; // global Scope
        $a2 = 103;//global Scope
        $a3 = 104; //global SAcope
         function testGlovbalVarivale(){
            //  echo  "This $a variable use inside the function"; // using x inside this function will generate an error
            global $a2, $a3;
            $totalSum = $a2 + $a3;
            echo " Toatl sum of this value is $totalSum <br>";
         }
         testGlovbalVarivale();
         echo "This $a variable use outside the fuction <br>";


    //Local Scope     

         function testLocalVariable(){
            $b = 102; //localScope
            echo "This varibale $b use inside the function <br>";
         }
         testLocalVariable();
        //  echo "This variable $b is called outide the function" this variable shoiwed undefiend

    
    
    //static 
         function test (){
            static $s1 = 0;
            echo $s1;
            $s1 ++;
         }
         test();
         echo"<br>";
         test();
         echo"<br>";
         test();
     
    //Using Echo
         
         echo "<h2> php is interesting!</h2>";
         echo "This ", "string ", " was ", "made ", "with", "multiple parameter";

         $text101 = "larning ";
         $text102 = "PHP";
         $q1 = 10;
         $q2 = 10;
         echo "<h2> $text101 $text102 </h2>";
         echo "total  sum = ", $q1 + $q2, "<br>" ;
         echo $q1 + $q2;
         echo "<br>";



   //Number

         $x = 12132.1212;
         $int_cast = (int)$x;
         echo $int_cast;
         echo "<br>";


   //Constant

         define("greeting", "Welcoime to DesktopIT");
         echo greeting;
         echo "<br>";

   
   //condition

   $s= 20;
   if($s> 10){
      echo $s, "value is gater than 10";
   }
   else if ($s < 10){
       echo $s, "value is less than 10"; 
    }
   
    echo "<br>";
   //loop

   //While
   
   $wl = 0;
   while($wl <= 10){
      echo $wl,"<br>";
      $wl++;
   }

   //for
   for($i = 1; $i <= 10; $i++){
      echo $i, ",";
   }
   echo "<br>";
   
   //ForEach
   $names = array('Sam', 'nis', "shams");
   foreach($names as $value ){
      echo $value, " friends",  "<br>";
      if($value === "Sam"){
         echo $value, " is my best Friend <br>";
      }
      elseif($value === "nis"){
         echo $value, " is my collage Friend <br>";
      }
      elseif($value === "shams"){
         echo $value, " is my University Friend <br>";
      }
   }
   echo "<h4> $names[0],  $names[1],  $names[2]  friends </h4>  <br>";
   print_r($names);

    ?>  
</body>
</html>