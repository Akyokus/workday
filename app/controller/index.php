<?php

if (session('user')){
if (post('start')){ //the post method comes from public/js/create.js
    $start = post('start');
    $startDate = explode("/",$start);
    $finish = post('finish');
    $finishDate = explode("/",$finish);
    $holiday = 0;
    $workday = 0;
    $halfHoliday = 0;
    $debugList = [];        //for debug details
    $holidays = ["1/1/2022","4/23/2022","5/1/2022","5/19/2022","7/15/2022","8/30/2022","10/29/2022"
                ,"5/02/2022","7/9/2022","5/2/2022","5/3/2022","5/4/2022","7/10/2022","7/11/2022",
                "7/12/2022","7/8/2022","10/28/2022"];   //turkish holidays
    $hill = ["1","3","5","7","9","11"];     //odd months
    $diff = (strtotime($finish) - strtotime($start)) / 86400;   //difference between 2 days
    for ($i=0;$i<$diff+1;$i++){

            if ($startDate[1] == 32 && in_array($startDate[0],$hill)){      //for odd months
                $startDate[1] = 1;
                $startDate[0] +=1;
            }elseif ($startDate[1] == 29 && $startDate[0] == 2){            //for february
                $startDate[1] = 1;
                $startDate[0] +=1;
            }elseif($startDate[1] == 31 && !in_array($startDate[0],$hill)){ //other months
                $startDate[1] = 1;
                $startDate[0] +=1;
            }
    $debug = " Bugün ".$startDate[1];
    array_push($debugList,$debug);

    $currentDay = mktime(0,0,0,$startDate[0],$startDate[1],$startDate[2]);  //create date for loop
    $currentDay = getdate($currentDay);

    $neddle = $currentDay['mon']."/".$currentDay['mday']."/".$currentDay['year'];
    if (($currentDay['weekday'] == 'Sunday' || $currentDay['weekday'] == 'Saturday') && !in_array($neddle,$holidays)){
        $debug = " Haftasonu Tatil: ".$startDate[1];
        array_push($debugList,$debug);
        $holiday++;
    }

    if (in_array($neddle,$holidays)){

        if ($neddle == "7/8/2022" || $neddle == "10/28/2022"){
            $debug = " YarıgünTatil: ".$neddle;
            array_push($debugList,$debug);
            $halfHoliday++;
        }else{
            $debug = " BayramTatil: ".$neddle;
            array_push($debugList,$debug);
            $holiday++;
        }
    }

    $workday = $diff - $holiday - $halfHoliday*0.5;
    $startDate[1]+=1;

}
    $debug = "\nTGünSayısı: ".$diff." TatilGünü: ".$holiday." YarıGünTatil: ".$halfHoliday*0.5." Workday: ".$workday;
    array_push($debugList,$debug);
    //debugList($debugList);   //if u see debug details

    $create = [
        'uname' => session('user'),
        'startdate' => date("d/m/Y",strtotime($start)),
        'enddate' => date("d/m/Y",strtotime($finish)),
        'wday' => $workday
    ];  // array to create request

    if (request::createRequest($create)){
        echo "İzin talebiniz iletilmiştir.";
    }else{
        echo "Yeterli izin bakiyeniz bulunmamaktadır.";
    } // request response
    exit();
}
}else{
    header("Refresh: 0;url=".site_url('login'));
}

require view('index');
