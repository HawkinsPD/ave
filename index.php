<?php
$json_file = file_get_contents("test.json");
$json_decode = json_decode($json_file, true);

foreach($json_decode as $keyTag => $itemArray) {
//    echo $keyTag, "<br>";
    $keyKeyArr = array();
    $keyValueArr = array();
    foreach($itemArray as $keyKey => $keyValue) {
//        echo $keyKey . ' '. $keyValue, "<br>";
        $keyKeyArr[] = $keyKey;
        $keyValueArr[] = $keyValue;
    }
    $resultN = "<$keyTag $keyKeyArr[1]='$keyValueArr[1]'>$keyValueArr[0]<$keyTag/>";
    echo $resultN;
}

?>

<?php
//
//echo "
//<h1 style='margin-bottom: 1rem'>title</h1>
//<div style='color: red'>main content</div>
//";

// -> /Users/roughty/php/docker docker-compose up -d
// docker-compose down
// docker ps
