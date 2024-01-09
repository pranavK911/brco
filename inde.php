<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- <form action="new.php" method="post">
      <label>username</label><br>
      <input type="text" name="username"><br>
      <label> username</label><br>
      <input type="password" name="password"><br>
      <br><input type="submit" value="login">
    </form> -->

    <!-- <form action="new.php" method="get">
      <label >pizza</label><br>
      <input type="text" name="quantity">
       <input type="submit" value="btn"> 
      <input type="submit" value="total">
    </form> -->
  
    <!-- <form action="new.php" method="post">
      <label >first value</label>
      <input type="text" name="frv">
      <br>
      <label >second value</label>
      <input type="text" name="scv"><br>
      <input type="submit" value="calculate">
    </form> -->

    <!-- <form action="new.php" method="post">
      <label> radious</label>
      <input type="text" name="radious"><br>
      <input type="submit" value="calculate">
    </form> -->

    <!-- <form action="inde.php" method="post">
      <label>Enter number between 1 to 6</label><br>
      <input type="text" name="number">
      <input type="submit" value="run">
    </form> -->

     <!-- <form action="inde.php" method="post">
      <input type="submit" value="stop" name="stop">
     </form> -->

     <!-- <form action="inde.php" method="post">
      <label>alphabate</label><br>
      <input type="text" name="alp"><br>
      <input type="submit">
     </form> -->

     <!-- <form action="inde.php" method="post">
      <label>Contry name</label>
      <input type="text" name="contry">
      <label>Capital name</label>
      <input type="text" name="capital">
      <input type="submit"><br><br><br>
      <label>call Capital name</label>
      <input type="text" name="contrycall">
       <input type="submit">
     </form> -->

     <!--  
     <form action="inde.php" method="post">
      <label>user name</label>
      <input type="text" name="username"><br>
      <label>password</label>
      <input type="password" name="password"><br>
      <input type="submit" name="login" value="login">
     </form> -->
   
     <!-- <form action="inde.php" method="post">
      <input type="radio" name="card" value="rupay">RuPay<br>
      <input type="radio" name="card" value="visa">visa<br>
      <input type="radio" name="card" value="mastercard">mastercard<br>
      <input type="radio" name="card" value="americanex">american Express<br>
      <input type="submit" name="cofirm" value="con">
     </form> -->
     
     <form action="inde.php" method="post">
      <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
      <label for="vehicle1"> I have a bike</label><br>
      <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
      <label for="vehicle2"> I have a car</label><br>
      <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
      <label for="vehicle3"> I have a boat</label><br>
      <input type="submit" name="btn" value="btn">
     </form>

</body>
</html>


<?php

  // echo $_POST["username"];
  // echo $_POST["password"];

  // $noOfPizza=$_GET["quantity"];
  // $total=$noOfPizza*10;
  // echo "total prise of pizza is {$total}";
  
  // $fv=$_POST["frv"];
  // $sv=$_POST["scv"];
  // $total=$fv+$sv;
  // $total=pow($fv,$sv);
  // $total=sqrt($fv);
  // echo "total value is {$total}";

  // $rads=$_POST["radious"];
  // $total=2* pi() * $rads;
  // $total=round($total,4);
  // echo "circumfrence is {$total}";
  
  // if -else -elseif
//    $age=199;
//    if($age==18){
//     echo"value = {$age}";
//    }elseif($age==19){
//     echo"value = {$age}";
//    }else{
//     echo"value = 0):";
//    }
  
/// ----logical operator-----------

//////--- switch--------/////
//  $number=$_POST["number"];
//  switch($number){
//       case 1:{
//         echo "sunday";
//         break;
//       }case 2:{
//         echo"monday";
//         break;
//       }case 3:{
//         echo"tuesday";
//         break;
//       }case 4:{
//         echo"thursday";
//         break;
//       }case 5:{
//         echo"friday";
//         break;
//       }case 6:{
//         echo"saturday";
//         break;
//       }default:{
//         echo"invalid";
//       }
//   }
//   $dd=date("l");
//    echo $dd;

///--------------for -loop--------------------
//  for($i=0;$i<50;$i++){
//   echo "heloo world ".$i."<br>";
//  }

/////--------- while-loop------------------------
//  $st=true;
//  while($st<10){
//   echo "heloo world".$st."<br>";
//   $st++;
//  }
//  while($st){
//    if(isset($_POST["stop"])){
//      $st=false;
//    }else{
//     $st++;
//     echo"heloo world".$st."<br>";
//    }
//  }

////////-----array------------------------

//  $arry=array("name",4,"kumar",55.6,"A");
//  $arry[0]="pranav";
//  array_pop($arry);
// array_push($arry,"vvit");
// array_shift($arry);
//  for($i=0;$i<4;$i++){
//   echo $arry[$i]."<br>";
//  }

///--------associtive array [key => value] array-----------------

// $marks=array("a"=>40,
//              "b"=>44,
//              "c"=>22,
//              "d"=>56);

//   $mrk=$marks[$_POST["alp"]];
//   echo "marks of {$_POST["alp"]} is {$mrk}";



// $capital=array("india"=>"new delhi",
//                "Usa"=>"dc",
//                "russia"=>"moscow",
//                "nepal"=>"katmandu"
//               );

// $capital[$_POST["contry"]]=$_POST["capital"];
// $capital["itly"]="rome";
// array_pop($capital);
// array_shift($capital);
// foreach($capital as $key=>$value){
//   echo"{$key} = {$value} <br>";

// }
///-------------foreach-loop----
// foreach($capital as $key => $v){
//   echo "{$key}={$v} <br>";

// }
// $cal=$capital[$_POST["contrycall"]];
// //  echo $capital["russia"];
// echo $cal;

  // $marks["c"]=77;
  // echo $marks["c"];
  // for($i=0;$i<4;$i++){
  // }

  //------ isset()---- empty()---------//
  
  // $name="pranav";
  // if(empty($name)){
  //   echo $name;
  // }else{
  //   echo "false";
  // }
 
  // if($_POST["login"]){
  //   // echo "heloo";
  //     if(empty($_POST["username"])){
  //       echo "username is missing";
  //     }
  //     elseif(empty($_POST["password"])){
  //       echo "password is missing";
  //     }else{
  //       echo "everything is okkkkk";
  //     }
  // }

  // echo $_POST["card"];
  // if($_POST["cofirm"]){
  //   // echo $_POST["card"];
  // }
  
    // switch($_POST["card"]){
    //   case "rupay":{
    //     echo "you selected rupay";
    //     break;
    //   }
    //   case "mastercard":{
    //     echo "you selected mastercard";
    //     break;
    //   }
    //   case "visa":{
    //     echo "you selected visa";
    //     break;
    //   }
    //   case "americanex":{
    //     echo "you selected american ex";
    //     break;
    //   }
    // }

    // echo  $_POST["vehicle1"];

    // if(isset(($_POST["btn"]))){
      // if(isset($_POST["vehicle1"])){
      //   echo "you selected bike <br>";
      // }
      // if(isset($_POST["vehicle2"])){
      //   echo "you selected car";
      // }
      // $arr=$_POST["vehicle"];
      // echo $arr[0];
      // echo $arr[1];
      // echo $arr[2];
    //   foreach($arr as $ar){
    //     echo $ar ."<br>";
    //   }
    // }

    ///----------------function----------///
//     function happy($name){
//       echo "happy birthday {$name}<br>";
//     }
  
// // happy();
// for($i=0;$i<3;$i++){
//   happy("pranav");
// }

///--------------string----------------------///

?> 