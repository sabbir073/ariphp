<?php

if(isset($_POST["finalstepbutton"])){

    //accident number
    $accidentnumber = stripslashes($_REQUEST['accidentnumber']);
    $accidentnumber = mysqli_real_escape_string($con,$accidentnumber);

    //primary information number
    $primaryinformationumber = stripslashes($_REQUEST['primaryinformationumber']);
    $primaryinformationumber = mysqli_real_escape_string($con,$primaryinformationumber);

    //thana
    $thana = stripslashes($_REQUEST['thana']);
    $thana = mysqli_real_escape_string($con,$thana);

    //zilla
    $zilla = stripslashes($_REQUEST['zilla']);
    $zilla = mysqli_real_escape_string($con,$zilla);

    //accident vehicle amount
    $accidentcarnumber = stripslashes($_REQUEST['accidentcarnumber']);
    $accidentcarnumber = mysqli_real_escape_string($con,$accidentcarnumber);

    //accident driver amount
    $injureddrivernumber = stripslashes($_REQUEST['injureddrivernumber']);
    $injureddrivernumber = mysqli_real_escape_string($con,$injureddrivernumber);

    //accident passenger amount
    $injuredpassengernumber = stripslashes($_REQUEST['injuredpassengernumber']);
    $injuredpassengernumber = mysqli_real_escape_string($con,$injuredpassengernumber);

    //accident road walker amount
    $injuredpassersbynumber = stripslashes($_REQUEST['injuredpassersbynumber']);
    $injuredpassersbynumber = mysqli_real_escape_string($con,$injuredpassersbynumber);

    //level of accident
    $accidentlevel = stripslashes($_REQUEST['accidentlevel']);
    $accidentlevel = mysqli_real_escape_string($con,$accidentlevel);

    //day of accident
    $day = stripslashes($_REQUEST['day']);
    $day = mysqli_real_escape_string($con,$day);

    //date of accident
    $accidentdate = date('d', strtotime($_REQUEST['accidentdate']));
    $accidentday = stripslashes($accidentdate);
    $accidentday = mysqli_real_escape_string($con,$accidentday);

    //month of accident
    $accidentmonth = date('m', strtotime($_REQUEST['accidentdate']));
    $accidentdaymonth = stripslashes($accidentmonth);
    $accidentdaymonth = mysqli_real_escape_string($con,$accidentdaymonth);

    //year of accident
    $accidentyear = date('Y', strtotime($_REQUEST['accidentdate']));
    $accidentdayyear = stripslashes($accidentyear);
    $accidentdayyear = mysqli_real_escape_string($con,$accidentdayyear);

    //time of accident
    $accidenttime = date('H:i:s', strtotime($_REQUEST['accidenttime']));
    $accidentdaytime = stripslashes($accidenttime);
    $accidentdaytime = mysqli_real_escape_string($con,$accidentdaytime);

    //time of report
    $reporttime = date('H:i:s', strtotime($_REQUEST['reporttime']));
    $reportdaytime = stripslashes($reporttime);
    $reportdaytime = mysqli_real_escape_string($con,$reportdaytime);

    //date of report
    $reportdate = date('Y-m-d', strtotime($_REQUEST['reportdate']));
    $reportdaydate = stripslashes($reportdate);
    $reportdaydate = mysqli_real_escape_string($con,$reportdaydate);

    //accident location type
    $accidentlocationtype = stripslashes($_REQUEST['accidentlocationtype']);
    $accidentlocationtype = mysqli_real_escape_string($con,$accidentlocationtype);

    //accident location type
    $accidentlocationtype = stripslashes($_REQUEST['accidentlocationtype']);
    $accidentlocationtype = mysqli_real_escape_string($con,$accidentlocationtype);
    if($accidentlocationtype == "7"){
        $accidentlocationtype = stripslashes($_REQUEST['extendedoption1']);
        $accidentlocationtype = mysqli_real_escape_string($con,$accidentlocationtype);
    }

    //Traffic controlling system
    $trafficcontrolsystem = stripslashes($_REQUEST['trafficcontrolsystem']);
    $trafficcontrolsystem = mysqli_real_escape_string($con,$trafficcontrolsystem);
    if($trafficcontrolsystem == "8"){
        $trafficcontrolsystem = stripslashes($_REQUEST['extendedoption2']);
        $trafficcontrolsystem = mysqli_real_escape_string($con,$trafficcontrolsystem);
    }

    //collision type
    $collisiontype = stripslashes($_REQUEST['collisiontype']);
    $collisiontype = mysqli_real_escape_string($con,$collisiontype);
    if($collisiontype == "11"){
        $collisiontype = stripslashes($_REQUEST['extendedoption3']);
        $collisiontype = mysqli_real_escape_string($con,$collisiontype);
    }

    //vehicle movement direction
    $carmovementdirection = stripslashes($_REQUEST['carmovementdirection']);
    $carmovementdirection = mysqli_real_escape_string($con,$carmovementdirection);

    //road divider
    $roaddivider = stripslashes($_REQUEST['roaddivider']);
    $roaddivider = mysqli_real_escape_string($con,$roaddivider);

    //weather
    $weather = stripslashes($_REQUEST['weather']);
    $weather = mysqli_real_escape_string($con,$weather);

    //light
    $light = stripslashes($_REQUEST['light']);
    $light = mysqli_real_escape_string($con,$light);

    //road geometric info
    $roadgeometricinfo = stripslashes($_REQUEST['roadgeometricinfo']);
    $roadgeometricinfo = mysqli_real_escape_string($con,$roadgeometricinfo);

    //road surface condition
    $roadsurfacecondition = stripslashes($_REQUEST['roadsurfacecondition']);
    $roadsurfacecondition = mysqli_real_escape_string($con,$roadsurfacecondition);
    if($roadsurfacecondition == "5"){
        $roadsurfacecondition = stripslashes($_REQUEST['extendedoption4']);
        $roadsurfacecondition = mysqli_real_escape_string($con,$roadsurfacecondition);
    }

    //road type
    $roadtype = stripslashes($_REQUEST['roadtype']);
    $roadtype = mysqli_real_escape_string($con,$roadtype);

    //road condition
    $roadcondition = stripslashes($_REQUEST['roadcondition']);
    $roadcondition = mysqli_real_escape_string($con,$roadcondition);

    //road class
    $roadclass = stripslashes($_REQUEST['roadclass']);
    $roadclass = mysqli_real_escape_string($con,$roadclass);

    //road characteristic
    $roadcharacteristic = stripslashes($_REQUEST['roadcharacteristic']);
    $roadcharacteristic = mysqli_real_escape_string($con,$roadcharacteristic);

    //area type
    $areatype = stripslashes($_REQUEST['areatype']);
    $areatype = mysqli_real_escape_string($con,$areatype);

    //xy map
    $xymap = stripslashes($_REQUEST['xymap']);
    $xymap = mysqli_real_escape_string($con,$xymap);

    //x axis
    $xaxis = stripslashes($_REQUEST['xaxis']);
    $xaxis = mysqli_real_escape_string($con,$xaxis);

    //y axis
    $yaxis = stripslashes($_REQUEST['yaxis']);
    $yaxis = mysqli_real_escape_string($con,$yaxis);

    //route
    $route = stripslashes($_REQUEST['route']);
    $route = mysqli_real_escape_string($con,$route);

    //kilometre
    $kilometre = stripslashes($_REQUEST['kilometre']);
    $kilometre = mysqli_real_escape_string($con,$kilometre);

    //hundred metre
    $hundredmetre = stripslashes($_REQUEST['hundredmetre']);
    $hundredmetre = mysqli_real_escape_string($con,$hundredmetre);

    //node map
    $nodemap = stripslashes($_REQUEST['nodemap']);
    $nodemap = mysqli_real_escape_string($con,$nodemap);

    //node one
    $nodeone = stripslashes($_REQUEST['nodeone']);
    $nodeone = mysqli_real_escape_string($con,$nodeone);

    //node two
    $nodetwo = stripslashes($_REQUEST['nodetwo']);
    $nodetwo = mysqli_real_escape_string($con,$nodetwo);

    //city name
    $cityname = stripslashes($_REQUEST['cityname']);
    $cityname = mysqli_real_escape_string($con,$cityname);

    //distance
    $distance = stripslashes($_REQUEST['distance']);
    $distance = mysqli_real_escape_string($con,$distance);

    //road name
    $roadname = stripslashes($_REQUEST['roadname']);
    $roadname = mysqli_real_escape_string($con,$roadname);

    //road place
    $roadorplace = stripslashes($_REQUEST['roadorplace']);
    $roadorplace = mysqli_real_escape_string($con,$roadorplace);

    //distancetwo
    $distancetwo = stripslashes($_REQUEST['distancetwo']);
    $distancetwo = mysqli_real_escape_string($con,$distancetwo);

    //roadorplace2
    $roadorplace2 = stripslashes($_REQUEST['roadorplace2']);
    $roadorplace2 = mysqli_real_escape_string($con,$roadorplace2);

    //distancethree
    $distancethree = stripslashes($_REQUEST['distancethree']);
    $distancethree = mysqli_real_escape_string($con,$distancethree);

    //roadnametwo
    $roadnametwo = stripslashes($_REQUEST['roadnametwo']);
    $roadnametwo = mysqli_real_escape_string($con,$roadnametwo);

    //distancefour
    $distancefour = stripslashes($_REQUEST['distancefour']);
    $distancefour = mysqli_real_escape_string($con,$distancefour);


    //place to work for file uploading



    //accident summary
    $accidentsummary = stripslashes($_REQUEST['accidentsummary']);
    $accidentsummary = mysqli_real_escape_string($con,$accidentsummary);

    //witness name and address
    $nameandaddress = stripslashes($_REQUEST['nameandaddress']);
    $nameandaddress = mysqli_real_escape_string($con,$nameandaddress);

    //witness name and address 2
    $nameandaddresstwo = stripslashes($_REQUEST['nameandaddresstwo']);
    $nameandaddresstwo = mysqli_real_escape_string($con,$nameandaddresstwo);

    //officer name or rank
    $nameorrank = stripslashes($_REQUEST['nameorrank']);
    $nameorrank = mysqli_real_escape_string($con,$nameorrank);

    //officer info entry date
    $infoentrydate = date('Y-m-d', strtotime($_REQUEST['infoentrydate']));
    $infoentrydatedate = stripslashes($infoentrydate);
    $infoentrydatedate = mysqli_real_escape_string($con,$infoentrydatedate);

    //research officer name or rank
    $nameorranktwo = stripslashes($_REQUEST['nameorranktwo']);
    $nameorranktwo = mysqli_real_escape_string($con,$nameorranktwo);

    //research officer info entry date
    $infoentrydatetwo = date('Y-m-d', strtotime($_REQUEST['infoentrydatetwo']));
    $infoentrydatetwodate = stripslashes($infoentrydatetwo);
    $infoentrydatetwodate = mysqli_real_escape_string($con,$infoentrydatetwodate);

    //checking officer name or rank
    $nameorrankthree = stripslashes($_REQUEST['nameorrankthree']);
    $nameorrankthree = mysqli_real_escape_string($con,$nameorrankthree);

    //checking officer info entry date
    $infoentrydatefour = date('Y-m-d', strtotime($_REQUEST['infoentrydatefour']));
    $infoentrydatefourdate = stripslashes($infoentrydatefour);
    $infoentrydatefourdate = mysqli_real_escape_string($con,$infoentrydatefourdate);

    //law rules number
    $lawrulesnumber = stripslashes($_REQUEST['lawrulesnumber']);
    $lawrulesnumber = mysqli_real_escape_string($con,$lawrulesnumber);

    //case situation
    $casesituation = stripslashes($_REQUEST['casesituation']);
    $casesituation = mysqli_real_escape_string($con,$casesituation);



    //this place is for vehicle driver passenger and road walker works 



    //accident reason one
    $accidentreasonone = stripslashes($_REQUEST['accidentreasonone']);
    $accidentreasonone = mysqli_real_escape_string($con,$accidentreasonone);

    //accident reason two
    $accidentreasontwo = stripslashes($_REQUEST['accidentreasontwo']);
    $accidentreasontwo = mysqli_real_escape_string($con,$accidentreasontwo);

    //accident reason three
    $accidentreasonthree = stripslashes($_REQUEST['accidentreasonthree']);
    $accidentreasonthree = mysqli_real_escape_string($con,$accidentreasonthree);



    //adding all to database
    $query = "INSERT into `accidents` (`accident number`, `information number`, `thana`, `zilla`, `vehicle amount`, `driver amount`, `passenger amount`, `walker amount`, `accident level`, `day of accident`, `date of accident`, `month of accident`, `year of accident`, `time of accident`, `time of report`, `date of report`, `location type`, `traffic system`, `collision type`, `movement direction`, `road divider`, `weather`, `light`, `geometric info`, `surface condition`,`road type`, `road condition`, `road class`, `road characteristic`, `area type`, `xy map`, `x axis`, `y axis`, `route`, `kilometre`, `hundred metre`, `node map`, `node one`, `node two`, `city name`, `distance`, `road name`, `road place`, `distancetwo`, `roadorplace2`, `distancethree`, `roadnametwo`, `distancefour`, `accident summary`, `witnessone`, `witnesstwo`, `officer`, `officer entry date`, `research officer`, `research entry date`, `checking officer`, `checking entry date`, `law`, `case situation`, `reason one`, `reason two`, `reason three`)
    VALUES ('$accidentnumber', '$primaryinformationumber', '$thana', '$zilla', '$accidentcarnumber', '$injureddrivernumber', '$injuredpassengernumber', '$injuredpassersbynumber', '$accidentlevel', '$day', '$accidentday', '$accidentdaymonth', '$accidentdayyear', '$accidentdaytime', '$reportdaytime', '$reportdaydate', '$accidentlocationtype', '$trafficcontrolsystem', '$collisiontype', '$carmovementdirection', '$roaddivider', '$weather', '$light', '$roadgeometricinfo', '$roadsurfacecondition', '$roadtype', '$roadcondition', '$roadclass', '$roadcharacteristic', '$areatype', '$xymap', '$xaxis', '$yaxis', '$route', '$kilometre', '$hundredmetre', '$nodemap', '$nodeone', '$nodetwo', '$cityname', '$distance', '$roadname', '$roadorplace', '$distancetwo', '$roadorplace2', '$distancethree', '$roadnametwo', '$distancefour', '$accidentsummary', '$nameandaddress', '$nameandaddresstwo', '$nameorrank', '$infoentrydatedate', '$nameorranktwo', '$infoentrydatetwodate', '$nameorrankthree', '$infoentrydatefourdate', '$lawrulesnumber', '$casesituation', '$accidentreasonone', '$accidentreasontwo', '$accidentreasonthree')";
    $result = mysqli_query($con,$query);

    if($result){
        echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
              </button><strong>Success!</strong> Added data to database.
            </div>';
    }
    else{
        echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
              </button><strong>Failed!</strong> Failed adding data to database.
            </div>';
    }
    

}



