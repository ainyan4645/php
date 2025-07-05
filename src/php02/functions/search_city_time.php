<?php
function searchCityTime($city_name)
{
    // ファイルの読み込み
    require('config/cities.php');
    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
            // フォーマット変更
            $time = $date_time->format('H:i');
            $city['time'] = $time;
            return $city;
        }
    }
}