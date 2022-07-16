<?php


class request
{
public static function createRequest($create){
    if (self::controlRequest($create)){
        global $db;
        $query = $db->prepare("INSERT INTO requests SET username=:uname,startDate=:startdate,endDate=:enddate,workday=:wday");
        $row = $query->execute($create);
        if ($row){

            return true;
        }else{
            return "Veritabanı Hatası";
        }
    }else{
        return false;
    }
}
public static function controlRequest($create){
    global $db;
    $query= $db->prepare("SELECT * FROM requests WHERE username=:uname");
    $query->execute([
        'uname' => session('user')
    ]);
    $oldRequest = $query->fetchAll(PDO::FETCH_ASSOC);
    $totalRequest = 0;
    foreach ($oldRequest as $old){
        $totalRequest = $totalRequest + $old['workday'];
    }
    $query = $db->prepare("SELECT dayLimit FROM daylimit WHERE id=:id");
    $query->execute([
        'id' => session('id')
    ]);
    $limit = $query->fetch(PDO::FETCH_ASSOC);
    if ($totalRequest+$create['wday'] <= $limit['dayLimit'] && $limit['dayLimit'] >= $create['wday']){
        return true;
    }else{
        return false;
    }
}

}