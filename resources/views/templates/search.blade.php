
<?php 
$name = $_GET['searched'];
use App\books;
use App\quizing;
use App\forum;
if (strlen($name) > 4) {
  # code...
$books = books::where('title', 'LIKE',"%$name%")->orWhere('course', 'LIKE',"%$name%")->get();

$quizing = quizing::where('title', 'LIKE',"%$name%")->orWhere('course', 'LIKE',"%$name%")->get();
$forum = forum::where('title', 'LIKE',"%$name%")->orWhere('question', 'LIKE',"%$name%")->get();

?>
<div class="jumbotron jumbotron-fluid">

    <div class="container" style="overflow-x: hidden">
      <h3 class="display-3 text-center"><u>BOOKS</u> </h3>
      @foreach ($books as $item)

      <li class="" style="cursor: pointer;list-style-type: none;" >
        <a style="text-decoration:none; color:black"  href="/Bookname/{{$item->title}}">
            
          <div class="row">
            <div class="col-4" style="overflow-x: hidden">
              <figure class="figure">
                <img class="figure-img img-fluid" src="/{{$item->logo}}" alt="{{$item->title}}">
                <figcaption class="figure-caption text-center">{{$item->category}}</figcaption>
              </figure>
            </div>
            <div class="col-8" style="overflow-x: hidden">
              <div class="user_info;text-center">
                <span>{{$item->author}}</span>
                <p>{{str_replace("_", " ", $item->title)}}</p>
              </div>
            </div>
          </div>          
            </a>
          </li>
          @endforeach
    </div>

    <hr>
  <hr>
  <hr>

  <div class="container">
    <h3 class="display-3 text-center"> <u>QUIZING</u> </h3>
    @foreach ($quizing as $item)

    <li class="" style="cursor: pointer;list-style-type: none;" >
      <a style="text-decoration:none; color:black"  href="/Quizname/{{$item->title}}">
          
        <div class="row">
          <div class="col-4" style="overflow-x: hidden">
            <figure class="figure">
              <img class="figure-img img-fluid" src="/{{$item->logo}}" alt="{{$item->title}}">
              <figcaption class="figure-caption text-center">{{$item->category}}</figcaption>
            </figure>
          </div>
          <div class="col-8" style="overflow-x: hidden">
            <div class="user_info;text-center">
              <span>{{$item->author}}</span>
              <p>{{str_replace("_", " ", $item->title)}}</p>
            </div>
          </div>
        </div>          
          </a>
        </li>
        @endforeach
  </div>


  <hr>
  <hr>
  <hr>




  <div class="container">
    <h3 class="display-3 text-center"> <u>Forum</u> </h3>
    @foreach ($forum as $item)

    <li class="" style="cursor: pointer;list-style-type: none;" >
      <a style="text-decoration:none; color:black"  href="/forum/questions/{{str_replace("/", "⚡", $item->title) }}">
        <div class="d-flex bd-highlight text-center">
         
        
        </div>



        <div class="row">
          <div class="col-6" style="overflow-x: hidden">
            <div class="img_cont; text-left" >
              <i>{{$item->tag}}</i>
                <br>
                <span class="">{{$item->category}}</span>
              </div>
          </div>
          <div class="col-6" style="overflow-x: hidden">
            <div class="user_info; text-right">
              <span>{{$item->admin}}</span>
              <p>{{str_replace("_", " ", $item->title)}}</p>
            </div>
          </div>
        </div>          
          </a>
        </li>
        @endforeach
  </div>

</div>


<?php
};
?>
