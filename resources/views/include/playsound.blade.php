<?php 

use App\words;
$url;
$word = words::where('word',$_GET['sound'])->get();
foreach ($word as $value) {
    $url = $value->link;
}
?><audio src="{{$url}}" id="playme" autoplay style="display: none" id="woo"></audio><script> document.getElementById('playme').play();</script>