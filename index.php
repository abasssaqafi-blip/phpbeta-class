<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BETA APP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="sellavera">
   <?php 
       $userName = "Abdussalam";
       echo "<h1> WELCOME TO KREDIBLE</h1>";
       echo "<h2>We are Happy to see you $userName</h2>";
       echo date("d-m-Y");

        #types of comments

       #single line comment method 1

       //single line comment method 2

       /*multi-line comment
         multi-line comment 
         multi-line comment
         multi-line comment
         multi-line comment
         multi-line comment
       */
    ?>
</div>

<div class="data">
    <?php 
       //TYPE CASTING {INTEGER}
        $foodPrice = 80;
        $transportPrice = 40;
        $refreshmentPrice = (int) 20.65;
        $totalPrice = $foodPrice + $transportPrice +  $refreshmentPrice;

        echo "<p>The price of food is \$$foodPrice </p>";
        echo "<p>The price of transport is \$$transportPrice </p>";
        echo "<p>The price of refreshment is \$$refreshmentPrice </p>";
        echo "<p>The total cost of expenditure is \${$totalPrice} </p>";

        var_dump($refreshmentPrice);
    ?>
</div>


<div class="data constant">
    <?php 
        //CONSTANT

        //USE OF FUNCTION FOR CONSTANT
        define ('FOOD','20 naira');
        echo "The price of food is"." ", FOOD;


        //USE OF LANGUAGE CONSTRUCT FOR CONSTANT
        const FUEL_PRICE = '1320';
        echo "<br> <br> The price of fuel since yesterday is".' ', "$", FUEL_PRICE .' ', "per litre";
    ?>
</div>



<div class="data">
    <?php 
      //TYPE CASTING {FLOAT}
        $foodPrice = 80.67;
        $transportPrice = 40.85;
        $refreshmentPrice = (float) 20;
        $totalPrice = $foodPrice + $transportPrice +  $refreshmentPrice;

        echo "<p>The price of food is \$$foodPrice </p>";
        echo "<p>The price of transport is \$$transportPrice </p>";
        echo "<p>The price of refreshment is \$$refreshmentPrice </p>";
        echo "<p>The total cost of expenditure is \${$totalPrice} </p>";

        var_dump($refreshmentPrice);
    ?>
</div>

<div class="data constant">
    <?php

      //indexed array
      $phone = array("<br>Iphone <br>","Samsung <br>", "Infinix <br>", "Xiaomi <br>");
      $phone[4] = "Techno<br><br>";
      echo "Different types of phone products are available. <br> They include; <br>";
      echo $phone[0];
      echo $phone[1];
      echo $phone[2];
      echo $phone[3];
      echo $phone[4];

      // Associative arrays
      $phone=["brand"=>"Samsung", "model"=>" S26 ultra", "year"=> 2026];
      echo"The brand i want is  ";
      echo $phone ["brand"];
      echo " ;";
      echo $phone["model"];

      //multidimensional arrays

    ?>
</div>

<div class="data">
    <?php 

    echo "<b> <span class= presentation > RESULTS OF 300 LEVEL PRESENTATION </span></b><br>";

    $malik=70;
    $yunus=77;
    $malikName= "Abdulmalik Babanla";
    $yunusName= "Yunus Sulaiman";
    
       echo "<b> <span class= result> GROUP A </span></b>";
       if ($yunus >= $malik) {
        echo "$yunusName : Passed <br><br>";
       }
       else{
        echo "$yunusName : Failed  <br><br>";
       }
       if ($malik >= $yunus ) {
        echo "$malikName : Passed <br><br>";
       }
       else{
        echo "$malikName : Failed  <br><br>";
       }

    //    $value= 21747/4;
    //    var_dump($value);

       $biozeez=60;
       $mubarak=55;

       $biozeezName= "Abdulazeez Ibrahim";
       $mubarakName="Mubarak Omadada";

       echo "<b> <span class= result> GROUP B </span></b>";
       if ($biozeez >= $mubarak) {
        echo "$biozeezName : Passed <br><br>";
       }
       else{
        echo "$yunusName : Failed  <br><br>";
       }
       if ($mubarak >= $biozeez) {
        echo "$mubarakName : Passed <br><br>";
       }
       else{
        echo "$mubarakName : Failed  <br><br>";
       }

       $fatimoh=68; 
       $maryam=59;

       $fatimohName="Fatimoh Abdullah";
       $maryamName="Maryam Sulayman";

       echo " <b> <span class= result> GROUP C </span> </b>";
       if ($fatimoh >= $maryam) {
        echo "$fatimohName : Passed <br><br>";
       }
       else{
        echo "$fatimohName : Failed  <br><br>";
       }
       if ($maryam >= $fatimoh) {
        echo "$maryamName : Passed <br><br>";
       }
       else{
        echo "$maryamName : Failed  <br><br>";
       }
    ?>
</div>
<div class="data constant">
    <?php

echo "<b> <span class= presentation > RESULTS OF PHYSICAL TESTS</span></b><br>";

$malik1=50;
$yunus1=77;
$malikName= "Abdulmalik Babanla";
$yunusName= "Yunus Sulaiman";

   echo "<b> <span class= result> FULL BLOOD COUNT TEST </span></b>";
   if ($yunus1 === $malik1 && $yunus1 >= 60) {
    echo "$yunusName : Passed <br><br>";
   }
   else{
    echo "$yunusName : Failed  <br><br>";
   }
   if ($malik1 === $yunus1 && $malik1 >= 60 ) {
    echo "$malikName : Passed <br><br>";
   }
   else{
    echo "$malikName : Failed  <br><br>";
   }

   echo "<b> <span class= result> PHYSICAL FITNESS </span></b>";

   if ($yunus1 === $malik1 || $yunus1 >= 60) {
    echo "$yunusName : Fit <br><br>";
   }
   else{
    echo "$yunusName : Not Fit  <br><br>";
   }
   if ($malik1 === $yunus1 || $malik1 >= 60 ) {
    echo "$malikName : Fit <br><br>";
   }
   else{
    echo "$malikName : Not Fit  <br><br>";
   }
    ?>
</div>

<div class="data studentPart">
    <?php 
      $name = "Abdussalam Abdullah";
      $score = 90;
      $age = 20;
      $payment = 300000;
      define("passMark", 50);
      define("minimumAge", 18);
      define("minPayment", 300000);

      //PASS OR FAIL
      if($score >= passMark){
        $result = "Pass";
      }
      else{
        $result = "Fail";
      }

      //GRADE
      if($score >= 75 ){
        $grade = "A";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 50){
        $grade = "C";
      }
      elseif($score >= 45){
        $grade = "D";
      }
      else{
       $grade = "F";
      }

      if($age >= minimumAge){
        $qualificationAge = "Qualified";
      } 
      else{
        $qualificationAge = "Underage";
      }

      if($payment >= minPayment){
        $paymentStatus = "Paid";
      }
      else{
        $paymentStatus = "No Payment";
      }

    ?>
    <div class= students>
      <?php echo "<b> <span class=  > SYO STUDENTS END OF SESSION DATA</span></b>"; ?>
    </div>
    
   <div class="studentsDetails">
    <?php
      echo  "<p> <b> <span class= details> NAME :</b></span> $name </p>";
      echo  "<p> <b> <span class= details> SCORE :</b></span> $score </p> ";
      echo  "<P> <b> <span class= details> GRADE :</b></span> $grade </p>";
      echo  "<P> <b> <span class= details> AGE :</b></span> $age </p>";
      echo  "<P> <b> <span class= details> QUALIFICATION :</b></span> $qualificationAge </p>";
      echo  "<P> <b> <span class= details> PAYMENT STATUS :</b></span>  $paymentStatus  </p>";
    ?>
    </div>
   
</div>

<div class="data studentPart">
    <?php 
      $name = "Ibrahim Abdulazeez";
      $score = 70;
      $age = 17;
      $payment = 200000;

      //PASS OR FAIL
      if($score >= passMark){
        $result = "Pass";
      }
      else{
        $result = "Fail";
      }

      //GRADE
      if($score >= 75 ){
        $grade = "A";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 50){
        $grade = "C";
      }
      elseif($score >= 45){
        $grade = "D";
      }
      else{
       $grade = "F";
      }

      if($age >= minimumAge){
        $qualificationAge = "Qualified";
      } 
      else{
        $qualificationAge = "Underage";
      }

      if($payment >= minPayment){
        $paymentStatus = "Paid";
      }
      else{
        $paymentStatus = "No Payment";
      }

    ?>
    <div class= students>
      <?php echo "<b> <span class=  > SYO STUDENTS END OF SESSION DATA</span></b>"; ?>
    </div>
    
  <div class="studentsDetails">
    <?php
      echo  "<p> <b> <span class= details> NAME :</b></span> $name </p>";
      echo  "<p> <b> <span class= details> SCORE :</b></span> $score </p> ";
      echo  "<P> <b> <span class= details> GRADE :</b></span> $grade </p>";
      echo  "<P> <b> <span class= details> AGE :</b></span> $age </p>";
      echo  "<P> <b> <span class= details> QUALIFICATION :</b></span> $qualificationAge </p>";
      echo  "<P> <b> <span class= details> PAYMENT STATUS :</b></span>  $paymentStatus  </p>";
    ?>
  </div>
</div>

<div class="data studentPart">
    <?php 
      $name = "Mubarak Salman Omadada";
      $score = 60;
      $age = 19;
      $payment = 300000;


      //PASS OR FAIL
      if($score >= passMark){
        $result = "Pass";
      }
      else{
        $result = "Fail";
      }

      //GRADE
      if($score >= 75 ){
        $grade = "A";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 50){
        $grade = "C";
      }
      





      
      else{
       $grade = "F";
      }

      if($age >= minimumAge){
        $qualificationAge = "Qualified";
      } 
      else{
        $qualificationAge = "Underage";
      }

      if($payment >= minPayment){
        $paymentStatus = "Paid";
      }
      else{
        $paymentStatus = "No Payment";
      }

    ?>
    <div class= students>
      <?php echo "<b> <span class=  > SYO STUDENTS END OF SESSION DATA</span></b>"; ?>
    </div>
    
  <div class="studentsDetails">
    <?php
      echo  "<p> <b> <span class= details> NAME :</b></span> $name </p>";
      echo  "<p> <b> <span class= details> SCORE :</b></span> $score </p> ";
      echo  "<P> <b> <span class= details> GRADE :</b></span> $grade </p>";
      echo  "<P> <b> <span class= details> AGE :</b></span> $age </p>";
      echo  "<P> <b> <span class= details> QUALIFICATION :</b></span> $qualificationAge </p>";
      echo  "<P> <b> <span class= details> PAYMENT STATUS :</b></span>  $paymentStatus  </p>";
    ?>
  </div>
</div>

<div class="data studentPart">
    <?php 
      $name = "Maryam Sulayman";
      $score = 55;
      $age = 16;
      $payment = 300000;


      //PASS OR FAIL
      if($score >= passMark){
        $result = "Pass";
      }
      else{
        $result = "Fail";
      }

      //GRADE
      if($score >= 75 ){
        $grade = "A";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 60){
        $grade = "B";
      }
      elseif($score >= 50){
        $grade = "C";
      }
      elseif($score >= 45){
        $grade = "D";
      }
      else{
       $grade = "F";
      }

      if($age >= minimumAge){
        $qualificationAge = "Qualified";
      } 
      else{
        $qualificationAge = "Underage";
      }

      if($payment >= minPayment){
        $paymentStatus = "Paid";
      }
      else{
        $paymentStatus = "No Payment";
      }

    ?>
    <div class= students>
      <?php echo "<b> <span class=  > SYO STUDENTS END OF SESSION DATA</span></b>"; ?>
    </div>
    
  <div class="studentsDetails">
    <?php
      echo  "<p> <b> <span class= details> NAME :</b></span> $name </p>";
      echo  "<p> <b> <span class= details> SCORE :</b></span> $score </p> ";
      echo  "<P> <b> <span class= details> GRADE :</b></span> $grade </p>";
      echo  "<P> <b> <span class= details> AGE :</b></span> $age </p>";
      echo  "<P> <b> <span class= details> QUALIFICATION :</b></span> $qualificationAge </p>";
      echo  "<P> <b> <span class= details> PAYMENT STATUS :</b></span>  $paymentStatus  </p>";
    ?>
  </div>
</div>

<div class="data">

<div class="dailyRoutinE"> <h3>MY DAILY ACTIVITIES SCHEDULE</h3></div>
  <?php
  $day = "Monday";

  switch($day){
    case "Monday":
    echo "
     <ul> 
     <li>Do Murajah </li>
     <li>Memorise Mutoon </li>
     <li>Attend PHP Class</li>
     <li>Go to Madrasa </li>
     <li>Do Murajah </li>
     </ul>
  
    ";
    break;

    case "Tuesday":
    echo "
      <ul> 
        <li>Do Murajah </li>
        <li>Attend Shaykh Abu Naasir class </li>
        <li>Attend PHP Class </li>
        <li>Go to Madrasa </li>
        <li>Go For shaykh Ajia Halqoh </li>
      </ul>
    ";
    break;

    case "Wednesday":
    echo "
      <ul> 
        <li>Do Murajah </li>
        <li>Memorise Mutoon </li>
        <li>Attend PHP Class </li>
        <li>Go to Madrasa </li>
        <li>Meet with Abu Abdulhaleem </li>
      </ul>
      ";
    break;

    case "Thursday":
    echo "
    <ul> 
      <li>Do Murajah </li>
      <li>Memorise Mutoon </li>
      <li>Meet with Abu Abdulhaleem </li>
    </ul>
    ";
    break;

    case "Friday":
      echo "
      <ul> 
        <li>Do Murajah </li>
        <li>Go to Babamole Mosque </li>
        <li>Go to Abu khadeejah Halqoh </li>
      </ul>
    ";
      break;

  }

  ?>
</div>


    
</body>
</html>