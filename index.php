<?php

# Ushbu kod Ahmadjon Dadabayev tomonidan qaytadan yozib chiqarildi. uitc.uz platformasi uchun bajarildi
# Mualliflik huquqi saqlansin!
# dadabayev.uz
# +998902224311
# @Akhmadjon

# This code was rewritten by Ahmadjon Dadabayev. Done for the uitc.uz platform
# Copyright reserved!
# dadabayev.uz
# +998902224311
# @Akhmadjon

# Этот код был переписан Ахмаджоном Дадабаевым. Сделано для платформы uitc.uz
# Авторские права защищены!
# dadabayev.uz
# +998902224311
# @Akhmadjon

function insta($link){

$fields = ['link' => $link];

$url = "https://instasaver.ru:443/api/post-content";
$ch = curl_init();
curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_POST => count($fields),
  CURLOPT_POSTFIELDS => http_build_query($fields),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_ENCODING => "UTF-8",
  CURLOPT_USERAGENT => "Mozilla/5.0 (Linux; Android 7.0; Nexus 6 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Mobile Safari/537.36"
    ]);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}

print_r (insta($_GET['url']));
exit;
?>
