<?php
require_once("lib/phpQuery-onefile.php");
$ini_array = parse_ini_file("config.ini", true);
$html = file_get_contents($ini_array["scraping"]["mifa_url"]);
$dom = phpQuery::newDocument($html);

foreach($dom->find("#event_list") as $child) {
    // なぜかevent_list以外も取得される
    // HTMLを解析していたらdivの閉じタグがなかった・・・orz
    // サイト側の問題なのでどうすることもできず挫折
    echo pq($child);
}

