<!DOCTYPE>
<html lang="en" dir="ltr" >
<head>
</head>

<body>
  <?php
include "index.html";
if (isset($_POST["Calculate"])){
    $Dayscount = $_POST["Dayscount"];
    $OldReading = $_POST["OldReading"];
    $NewReading = $_POST["NewReading"];
    $kwhpesos = $_POST["kwhpesos"];

    function Calculate($Dayscount, $OldReading, $NewReading, $kwhpesos){
      $TotalReading = $OldReading - $NewReading;
      if ($TotalReading == 0){
        return "Input is invalid, please try again!";

      }elseif($NewReading < $OldReading){
        return"<p>Invalid input, New reading will be higher than Old Reading</p>";
      }else{
        $kwhvalue = $kwhpesos;
        $TotalReading = $NewReading - $OldReading;
        $Averageperday = $TotalReading / $Dayscount;
        $Perdaypesos = $Averageperday * $kwhvalue;
        echo "<h3 class='bg-gray-200 m-3 p-3 rounded-2xl text-blue-800 text-center'>The Average Kilowatt per day: <h3 class='text-center text-green-300 '>$Averageperday ";
        $priceKilowatt = $TotalReading * $kwhvalue;
        echo "<h3 class='bg-gray-200 m-3 p-3 rounded-2xl text-blue-800 text-center'>The Electric bill in $Dayscount Days</h3><h2 class='text-center text-green-300'>$priceKilowatt php";
        echo "<h3 class='bg-gray-200 m-3 p-3 rounded-2xl text-blue-800 text-center'> The average ammount per day:</h3> <h2 class='text-center text-green-300'>$Perdaypesos php";
        echo "<h3 class='bg-gray-200 m-3 p-3 rounded-2xl text-blue-800 text-center'> The ongoing reading:</h3><h2 class='text-center text-green-300'> $NewReading Kilowatt";
        return "<h3 class='bg-gray-200 m-3 p-3 rounded-2xl text-blue-800 text-center'>The Total Reading:</h3> <h2 class='text-center text-green-300'>$TotalReading Kilowatt";

      }
    }
    echo Calculate($Dayscount, $OldReading, $NewReading, $kwhpesos);
  }
   ?>
</body>

<footer>
</footer>
