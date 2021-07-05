<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <style>
    *{padding:0;
      margin:0;
      box-sizing: border-box;

    }
    .container{
        max-width: 80%;
        background-color:rgb(228, 195, 195);
        margin: auto;
        padding:23px;
    }

    </style>
</head>
<body>
     <div class="container">
     <h1>Lets learn about PHP</h1>
     <p> Your party status is :</p>
     <?php

     $age=18;
     if($age>18)
         echo "this can go to party";

     else 
     echo "you cannot go to party";
     
     echo "<br>";
     $languages=array("Python","C++","php","nodejs");
     echo $languages[1];
    //  echo count($languages);
     
     echo"<br>";
     $a=0;
     while($a< count($languages))
     {  echo "the value of language is:" ;
        echo $languages[$a];
        echo "<br>";
        $a++;

     }


    //  $a=0;
    //  do 
    //  {  echo "the value of language is:" ;
    //     echo $languages[$a];
    //     echo "<br>";
    //     $a++;

    //  }while($a< count($languages));

    //FOR LOOP
    // for ($a=0; $a <count($languages); $a++) { 
    //     echo $languages[$a];

    //     # code...
    // }
     foreach($languages as $value)
     {
         echo "<br>The value for foreach loop is : ";
         echo $value;
     }
     ?>

     </div>
</body>
</html>