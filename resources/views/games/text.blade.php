<?php
use App\typing;
use App\typingClase;
$typing = $_REQUEST['typing'];
$level = $_REQUEST['level'];
$accurate = $_REQUEST['accurate'];
$speed = $_REQUEST['speed'];
$user = Auth::user()->id;
typingClase::where('user',$user)->update(['typing_id'=>$typing,'level'=>$level,'accurate'=>$accurate,'speed'=>$speed]);
$typingClass = typingClase::where('user',$user)->get();
foreach ($typingClass as $key => $Class) {
	$typing = typing::where('id',"$Class->typing_id")->get();
}
?>
    @foreach ($typing as $item)
    <div id="intext1">{{$item->text}}</div>
    <input type="hidden" id="typingid" value="{{$item->id}}">
    <textarea aria-autocomplete="none" disabled="true" autocomplete="none" id="inputtext1" autofocus="ture" oninput="error()" onkeydown="keyboard()" aria-expanded="false" spellcheck="false"></textarea>
    <div   style="display: none" id="intext2"></div>
    <textarea  style="display: none" disabled="true" aria-autocomplete="none" autocomplete="none"  aria-expanded="false" spellcheck="false" id="inputtext2"></textarea>
    @endforeach