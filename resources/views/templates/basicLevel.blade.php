<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - <?php echo @$_GET['field'] ?></title>
  <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
  <meta charset="UTF-8">
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
    
    <?php   
    use App\basicLevel;
    use App\basicClass;
 
@$id_feild = $_GET['id_feild'];
$category = $_GET['field'];
@$name = @$_GET['name'];
$id = str_replace("_", " ", $name);
    $basicLevel =  basicLevel::where('subject', 'LIKE',"%$category%")->get();
    $basicClass =  basicClass::where('name', 'LIKE',"%$id%")->where('level_id', 'LIKE',"%$id_feild%")->orderBy('id','desc')->get();
?>
    <!-- END nav -->
    @if (($id_feild)==null)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/store_back.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread"><?php echo $_GET['field'] ?> </h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="/courseCategory">Course <i class="ion-ios-arrow-forward"></i></a><a href="/Basiccategory">Basic Course <i class="ion-ios-arrow-forward"></i></a> </span> <span><i class="ion-ios-arrow-forward"></i><?php echo $_GET['field'] ?> </span></p>
          </div>
        </div>
      </div>
    </section>
    @endif


@if (($id_feild)!=null)
@foreach ($basicClass as $item)
  <h1 class="text-center">{{$id}}</h1>
{!!  html_entity_decode($item->teachings) !!}
@endforeach
    
@else
    <section class="ftco-section">
    <div class="container-fluid px-4">

        <div class="row">
@foreach ($basicLevel as $item)
    
<div class="col-md-4 course ftco-animate">
    <div class="img" style="background-image: url(../{{$item->link}});"></div>
    <div class="text pt-4">
        <p class="meta d-flex">
            <span><i class="icon-user mr-2"></i>{{$item->Admin}}</span>
            <span><i class="icon-table mr-2"></i>12+</span>
            <span><i class="icon-calendar mr-2"></i>6/7</span>
        </p>
      <h3><a href="/basicLevel?name={{str_replace("_", " ", $item->name)}}&field={{$category}}&id_feild={{$item->id}}">{{$item->name}}</a></h3>
        <p>{{$item->disreption}}</p>
        <p><a href="/basicLevel?name={{str_replace(" ", "_", $item->name)}}&field={{$category}}&id_feild={{$item->id}}" class="btn btn-primary">Start Now</a></p>
    </div>
</div>


@endforeach
            
         
        </div>
    </div>
</section>

@endif


		
		@include('include/footer')

      @include('include/down')
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