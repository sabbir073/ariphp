<?php 
include("auth.php");
include("db.php");
$query = "SELECT * FROM accidents ORDER BY id DESC";
$result = mysqli_query($con, $query);
?>

<?php

$output = '';
if(isset($_POST["downloadreport"])){
    $query = "SELECT * FROM accidents ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        $output.= '<table class="table">
        <thead>
          <tr>
            <th scope="col">1.দুর্ঘটনার ক্রমিক নাম্বার</th>
            <th scope="col">2.প্রাথমিক তথ্য বিবরণী নাম্বার</th>
            <th scope="col">3.থানা</th>
            <th scope="col">4.জিলা/মেট্রোপলিটন পুলিশ</th>
            <th scope="col">5.দুর্ঘটনা কবলিত গাড়ির সংখ্যা</th>
            <th scope="col">6.হতাহত ড্রাইভারের সংখ্যা</th>
            <th scope="col">7.হতাহত যাত্রীর সংখ্যা</th>
            <th scope="col">8.হতাহত পথচারীর সংখ্যা</th>
            <th scope="col">9.দুর্ঘটনার মাত্রা</th>
            <th scope="col">10.দিন</th>
            <th scope="col">11.তারিখ</th>
            <th scope="col">12.মাস</th>
            <th scope="col">13.বছর</th>
            <th scope="col">14.দুর্ঘটনার সময়</th>
            <th scope="col">15.সংযোগ স্থলের ধরণ</th>
            <th scope="col">16.ট্রাফিক নিয়ন্ত্রন ব্যবস্থা</th>
            <th scope="col">17.সংঘর্ষের ধরণ</th>
            <th scope="col">18.গাড়ি চলাচলের দিক</th>
            <th scope="col">19.রোড ডিভাইডার</th>
            <th scope="col">20.আবহাওয়া</th>
            <th scope="col">21.আলো</th>
            <th scope="col">22.রাস্তার জ্যামিতিক বিবরণ</th>
            <th scope="col">23.রাস্তার উপরিভাগের অবস্থা</th>
            <th scope="col">24.রাস্তার প্রকারভেদ</th>
            <th scope="col">25.রাস্তার প্রকৃতি</th>
            <th scope="col">26.রাস্তার শ্রেণী</th>
            <th scope="col">27.রাস্তার বৈশিষ্ট্য</th>
            <th scope="col">28.এলাকার ধরণ</th>
            <th scope="col">29.XY MAP</th>
            <th scope="col">30.X</th>
            <th scope="col">31.Y</th>
            <th scope="col">32.ROUTE</th>
            <th scope="col">33.KM</th>
            <th scope="col">34.100m</th>
            <th scope="col">35.NODE MAP</th>
            <th scope="col">36.NODE 1</th>
            <th scope="col">37.NODE 2</th>
            <th scope="col">65.দুর্ঘটনার সহায়ক কারণ</th>
            <th scope="col">65.দুর্ঘটনার সহায়ক কারণ</th>
            <th scope="col">65.দুর্ঘটনার সহায়ক কারণ</th>
          </tr>
        </thead>
        <tbody>';
      while($row = mysqli_fetch_array($result)){
        $output.= '<tr>
                        <td>'.$row["accident number"].'</td> 
                        <td>'.$row["information number"].'</td> 
                        <td>'.$row["thana"].'</td>
                        <td>'.$row["zilla"].'</td> 
                        <td>'.$row["vehicle amount"].'</td> 
                        <td>'.$row["driver amount"].'</td> 
                        <td>'.$row["passenger amount"].'</td> 
                        <td>'.$row["walker amount"].'</td> 
                        <td>'.$row["accident level"].'</td> 
                        <td>'.$row["day of accident"].'</td> 
                        <td>'.$row["date of accident"].'</td> 
                        <td>'.$row["month of accident"].'</td> 
                        <td>'.$row["year of accident"].'</td> 
                        <td>'.$row["time of accident"].'</td> 
                        <td>'.$row["location type"].'</td> 
                        <td>'.$row["traffic system"].'</td> 
                        <td>'.$row["collision type"].'</td> 
                        <td>'.$row["movement direction"].'</td> 
                        <td>'.$row["road divider"].'</td> 
                        <td>'.$row["weather"].'</td>
                        <td>'.$row["light"].'</td> 
                        <td>'.$row["geometric info"].'</td> 
                        <td>'.$row["surface condition"].'</td>
                        <td>'.$row["road type"].'</td> 
                        <td>'.$row["road condition"].'</td> 
                        <td>'.$row["road class"].'</td> 
                        <td>'.$row["road characteristic"].'</td> 
                        <td>'.$row["area type"].'</td> 
                        <td>'.$row["xy map"].'</td> 
                        <td>'.$row["x axis"].'</td> 
                        <td>'.$row["y axis"].'</td> 
                        <td>'.$row["route"].'</td> 
                        <td>'.$row["kilometre"].'</td> 
                        <td>'.$row["hundred metre"].'</td> 
                        <td>'.$row["node map"].'</td> 
                        <td>'.$row["node one"].'</td> 
                        <td>'.$row["node two"].'</td> 
                        <td>'.$row["reason one"].'</td> 
                        <td>'.$row["reason two"].'</td> 
                        <td>'.$row["reason three"].'</td>
                    </tr>';
      }
      $output.= '</tbody>
      </table>';
      header('Content-Type: application/xls');
      header('Content-Disposition: attachment; filename=accidentsdownload.xls');
      echo $output;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accident Research Institute BUET</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">1.দুর্ঘটনার ক্রমিক নাম্বার</th>
            <th scope="col">2.প্রাথমিক তথ্য বিবরণী নাম্বার</th>
            <th scope="col">3.থানা</th>
            <th scope="col">4.জিলা/মেট্রোপলিটন পুলিশ</th>
            <th scope="col">5.দুর্ঘটনা কবলিত গাড়ির সংখ্যা</th>
            <th scope="col">6.হতাহত ড্রাইভারের সংখ্যা</th>
            <th scope="col">7.হতাহত যাত্রীর সংখ্যা</th>
            <th scope="col">8.হতাহত পথচারীর সংখ্যা</th>
            <th scope="col">9.দুর্ঘটনার মাত্রা</th>
            <th scope="col">10.দিন</th>
            <th scope="col">11.তারিখ</th>
            <th scope="col">12.মাস</th>
            <th scope="col">13.বছর</th>
            <th scope="col">14.দুর্ঘটনার সময়</th>
            <th scope="col">15.সংযোগ স্থলের ধরণ</th>
            <th scope="col">16.ট্রাফিক নিয়ন্ত্রন ব্যবস্থা</th>
            <th scope="col">17.সংঘর্ষের ধরণ</th>
            <th scope="col">18.গাড়ি চলাচলের দিক</th>
            <th scope="col">19.রোড ডিভাইডার</th>
            <th scope="col">20.আবহাওয়া</th>
            <th scope="col">21.আলো</th>
            <th scope="col">22.রাস্তার জ্যামিতিক বিবরণ</th>
            <th scope="col">23.রাস্তার উপরিভাগের অবস্থা</th>
            <th scope="col">24.রাস্তার প্রকারভেদ</th>
            <th scope="col">25.রাস্তার প্রকৃতি</th>
            <th scope="col">26.রাস্তার শ্রেণী</th>
            <th scope="col">27.রাস্তার বৈশিষ্ট্য</th>
            <th scope="col">28.এলাকার ধরণ</th>
            <th scope="col">29.XY MAP</th>
            <th scope="col">30.X</th>
            <th scope="col">31.Y</th>
            <th scope="col">32.ROUTE</th>
            <th scope="col">33.KM</th>
            <th scope="col">34.100m</th>
            <th scope="col">35.NODE MAP</th>
            <th scope="col">36.NODE 1</th>
            <th scope="col">37.NODE 2</th>
            <th scope="col">65.দুর্ঘটনার সহায়ক কারণ</th>
            <th scope="col">65.দুর্ঘটনার সহায়ক কারণ</th>
            <th scope="col">65.দুর্ঘটনার সহায়ক কারণ</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($result)){
            echo '<tr>
            <td>'.$row["accident number"].'</td> 
            <td>'.$row["information number"].'</td> 
            <td>'.$row["thana"].'</td>
            <td>'.$row["zilla"].'</td> 
            <td>'.$row["vehicle amount"].'</td> 
            <td>'.$row["driver amount"].'</td> 
            <td>'.$row["passenger amount"].'</td> 
            <td>'.$row["walker amount"].'</td> 
            <td>'.$row["accident level"].'</td> 
            <td>'.$row["day of accident"].'</td> 
            <td>'.$row["date of accident"].'</td> 
            <td>'.$row["month of accident"].'</td> 
            <td>'.$row["year of accident"].'</td> 
            <td>'.$row["time of accident"].'</td> 
            <td>'.$row["location type"].'</td> 
            <td>'.$row["traffic system"].'</td> 
            <td>'.$row["collision type"].'</td> 
            <td>'.$row["movement direction"].'</td> 
            <td>'.$row["road divider"].'</td> 
            <td>'.$row["weather"].'</td>
            <td>'.$row["light"].'</td> 
            <td>'.$row["geometric info"].'</td> 
            <td>'.$row["surface condition"].'</td>
            <td>'.$row["road type"].'</td> 
            <td>'.$row["road condition"].'</td> 
            <td>'.$row["road class"].'</td> 
            <td>'.$row["road characteristic"].'</td> 
            <td>'.$row["area type"].'</td> 
            <td>'.$row["xy map"].'</td> 
            <td>'.$row["x axis"].'</td> 
            <td>'.$row["y axis"].'</td> 
            <td>'.$row["route"].'</td> 
            <td>'.$row["kilometre"].'</td> 
            <td>'.$row["hundred metre"].'</td> 
            <td>'.$row["node map"].'</td> 
            <td>'.$row["node one"].'</td> 
            <td>'.$row["node two"].'</td> 
            <td>'.$row["reason one"].'</td> 
            <td>'.$row["reason two"].'</td> 
            <td>'.$row["reason three"].'</td>
        </tr>';
        } 
       ?>
        </tbody>
      </table>
    </div>
</div>

