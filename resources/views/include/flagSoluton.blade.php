<?php 

use App\flagSolution;

$text = $_GET['text'];
$qustiionId = $_GET['solotoinid'];
$userId = Auth::user()->id;
$name = Auth::user()->name;



if (strlen($text) > 10) {
 $flaged =  flagSolution::where('userid',$userId)->where('questionsgid',$qustiionId)->get();
    if (sizeOf($flaged) <=0) {
        $flag  = new flagSolution;
    $flag->text = $text;
    $flag->userid = $userId;
    $flag->user = $name;
    $flag->questionsgid = $qustiionId;
    $flag->save();
    }else {
flagSolution::where('userid',$userId)->where('questionsgid',$qustiionId)->update(['text'=>$text]);
    }
   ?>

   <div class="container">
<p class=" text-small text-success">Flaged by {{$name}}</p>
    <p class="lead">{{$text}}</p>
    <hr class="my-4">
    
</div>

   <?php

}else {
    ?>
   <div class="container">
    <p class=" text-small text-success">FLaged by {{$name}}</p>
        <p class="lead">Provide more info.</p>
        <hr class="my-4">
        
    </div>
<?php
}

?>

