<!DOCTYPE html>
<html lang="en">
  <head>

    <title>TekporAcademy - {{  $id }}</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    @include('include.head')
 
  </head>
  <body>
  	<?php
    use App\books;
$quizName =  books::where('title',$id)->take(1)->get();
    ?>
   @foreach($quizName as $item)
<section>
    {!! $item->link !!}
</section>
   @endforeach


<script>
    var bookheigth = document.getElementById('bookreader');
    bookheigth.height = screen.availHeight;
</script>
<script type="text/javascript">
          function seacher(div){
   document.getElementById('onlines').style.display='block';
 if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById(div).innerHTML = this.responseText;
 }
 }
 var sear = document.getElementById('search');
 var requst = `searched=${sear.value}`;
 var urled = "{{ URL::to('search?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 message.value = "";
 };
      </script>
  </body>
</html>