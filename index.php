<?php
   
   //deta typs :- string, integer, folat, bolean, null, aray, object, resource
   
   
/*============= //bacik ==============*/
   $rifat = "Rubayat";
   echo "I am $rifat <br>";

   echo 'I am ' .$rifat;
   echo "<br>";

   define("NAME","My Name Is Rubayat ");
   echo NAME;
   echo "<br>";
   
   //if else 

   $rahim = "100";
   if($rahim > 100){
      echo "আপনার পাপ্ত নাম্বার টি সঠিক নয় ।";
   }elseif($rahim >= 90 && $rahim <= 100){
      echo "অনেক ভালো করেছেন ।";
   }elseif($rahim <= 89 && $rahim >= 80){
      echo "ভালো ।";
   }elseif($rahim <= 79 && $rahim >= 70){
      echo "মটামটি ভালো ।";
   }elseif($rahim <= 69 && $rahim >= 40){
      echo "আরও ভালো করতে হবে ।";
   }elseif($rahim <= 39 && $rahim >= 33){
      echo "তত ভালো নয় ।";
   }elseif($rahim < 33 && $rahim > 0){
      echo "দুঃখ জনক ভাবে আপনি পাস করতে পারেননি ।";
   }elseif($rahim < 0){
      echo "আপনার পাপ্ত নাম্বার টি সঠিক নয় ।";
   }

   echo "<br>";

   //switch
   
   $lotari = 7;
   switch($lotari){
      case 4:
         echo "Sorry! You will add 5 to win ";
         break;

      case 5:
         echo "Sorry! You will add 4 to win ";
         break;   
      
      case 6:
         echo "Sorry! You will add 3 to win ";
         break;
      case 7:
         echo "Sorry! You will add 2 to win ";
         break;  
      case 9:
         echo "You Are The Lucky Man";
         break;      
      default:
         echo "Please Try Again" ;  
         break; 
   }

   echo "<div style = 'margin: 15px 0'></div>";
   
  //while

   $while = 10;
   while($while >= 1){
      echo "Hello While $while <br>";
      $while --;
   }
   
   echo "<div style = 'margin: 30px 0'></div>";

   $whiledo = 1;

   while($whiledo <= 10){
      echo "Hello While $whiledo <br>";
      $whiledo ++;
   }

   echo "<div style = 'margin: 30px 0'></div>";


   for($for = 1; $for <= 10; $for++){
      echo "Hello For $for <br>";
   }

   echo "<div style = 'margin: 30px 0'></div>";
   
   //foreach

   echo "For Each <br>";
   echo "<div style = 'margin: 7px 0'></div>";

   $valo = ["Bugati", "Laborgini", "Rolls Roys", "Marcities", "Bmw"];
   foreach($valo as $kutniBuri){
      echo $kutniBuri ."<br>";
   }

 //  function

   function yourSelf($name, $work){
      echo "<h1> Hi! I am $name and I am a $work </h1>";
   }

   yourSelf('Rubayat', 'Front End And Backend Devoloper .');


   // function

   function sundoriText($sundor, $color){
      echo "<h1 style = 'text-transform: uppercase; color: $color; font-family: Candara; text-align:           
      center;'>$sundor</h1>";
   } 

   sundoriText('hi i am rifat', 'green');
   $tryboro = "lekha sundor hoise ?";
   sundoriText($tryboro, 'red');

   sundoriText('I am Obaydullah', 'grey');

   //implote

   $car = ['Bugati', 'Lamborgini', 'Rolls Roys', 'Marchities', 'Bmw'];
   echo implode(' | ', $car);

//================= explode =================
  
//    //inderectly

//    $explode = "Hello world, ! I am, Rubayat";
//    $bb = explode(',', $explode);
//    echo "<pre>";
//    print_r($bb);
//    echo "</pre>";

//    //derectly

//    echo "<pre>";
//    print_r(explode(' ', $explode));
//    echo "<pre>";
   
      echo "<br>";

      echo date('d - M - Y');  
      echo "<br>";
      date_default_timezone_set('asia/dhaka');
      echo date('g - i - s');

      //=============== global ===============================

      echo "<br>";

      $nam = "Rubayat";

      function globan(){
         global $nam ;
         echo "My name is " . $GLOBALS['nam'];
         echo "Hello I am " . $nam;
      }

      globan();
    
      //===================== form =======================

      echo "<pre>";

      echo "<br><br><br>";

      print_r ($_POST);

      echo "</pre>";
 ?>
  <br><br>
 <form action="" method="POST" >
   <input type="text" placeholder="Your Name" name="name" required="">
   <input type="password" placeholder="Your Password" name="pass" required="">
   <input type="submit" value="Send">
 </form>