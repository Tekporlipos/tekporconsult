<?php 

use App\flagSolution;

$qustiionId = $_GET['solotoinid'];
$flaged =  flagSolution::where('questionsgid',$qustiionId)->get();
?>
  @foreach ($flaged as $item)
  <div class="container" >
    <p class=" text-small text-success">FLaged by {{$item->user}}</p>
        <p class="lead">{{$item->text}}</p>
        <hr class="my-4">
</div>
  @endforeach

<?php
?>

