<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
 <?php
    //josn 파일 읽기
    $url ='character.json';
    $url2 ='characterskill.json';
    if(!file_exists($url)) {
        echo '파일이 없습니다.';
        exit;
    }
    if(!file_exists($url2)) {
        echo '파일이 없습니다.';
        exit;
    }
    $json_string = file_get_contents($url);
    $R = json_decode($json_string, true);
    $json_string2 = file_get_contents($url2);
    $R2 = json_decode($json_string2, true);
    // json_decode : JSON 문자열을 PHP 배열로 바꾼다
    // json_decode 함수의 두번째 인자를 true 로 설정하면 무조건 array로 변환된다.
    // $R : array data
    echo '<pre>';
    print_r($R);
    echo '</pre>';
    echo '<pre>';
    print_r($R2);
    echo '</pre>';
    
    foreach ($R['data'] as $row) {
        $name = $row['name'];
        echo '<pre>';
    print_r($name);
    echo '</pre>';
    }
    foreach ($R2['data'] as $row) {
        $otherPlatFormUrl = $row['otherPlatFormUrl'];
        echo '<pre>';
    print_r($otherPlatFormUrl);
    echo '</pre>';
    echo '<a href='.$otherPlatFormUrl.'>안녕</a>';
    }   

    

?>

</body>
</html>