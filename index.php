<?php
@$_url = $_GET['url'];
@$get = file_get_contents("https://api.sssgram.com/st-tik/ins/dl?url=" . $_url);
@$array = json_decode($get, true);

@$result = [];
@$i = 0;

foreach($array as $key){
    $url = str_replace('\\', '', $array['result']['insBos'][$i]['url']);
    $type = $array['result']['insBos'][$i]['type'];
    if($type == 'jpg'){
        array_push($result,['type' => 'image', 'url' => $url]);
    }elseif($type == 'mp4'){
        array_push($result,['type' => 'video', 'url' => $url]);
    }
    $i++;
}

echo json_encode($result);
exit;
?>
