<?php
    use App\books;
    use App\admin;
  $quizName =  books::where('title',$id)->get();
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - <?php echo (str_replace("_", " ", $id)); ?></title>

    @include('include.head')
    @foreach($quizName as $item)
    <meta name="twitter:image" content="https://tekporacademy.tk/{{ $item->logo }}">
    <meta property="og:image" content="https://tekporacademy.tk/{{ $item->logo }}" />
@endforeach
 <meta content="<?php echo (str_replace("_", " ", $id)); ?>">
  </head>
  <body onscroll="scrolling()">
    @include('include.header')

   <div >
   
@foreach($quizName as $item)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/store_back.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread"> <?php echo (str_replace("_", " ", $item->title)); ?></h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="../home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../store">Store <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../Bookname/{{$item->title}}"><?php echo (str_replace("_", " ", $item->title)); ?> <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>

@endforeach
   </div>

	   
		
		<section class="ftco-section">
			<div class="container" >
				<div class="row">
          <div class="col-lg-8 ftco-animate">


@foreach($quizName as $item)
   <h2 class="mb-3 ftco-animate"><?php echo (str_replace("_", " ", $item->title)); ?></h2>
            <p class="ftco-animate">
              {{ substr($item->description,0,200)  }}
            </p>
            <p class="ftco-animate">
              <img  property="og:image" src="../{{ $item->logo }}" width="100%" alt="" class="img-fluid">
            </p>
            <p class="ftco-animate">{{ substr($item->description,200,500)  }}
            </p>
            
            <div class="tag-widget post-tag-container mb-5 mt-5 ftco-animate">
              <div class="row">
              <div class="col-6">
                <div class="tagcloud">
                  <?php
if (!empty($item->title)) {
?>
  <a target="blank" href="../read_book/{{  $item->title }}#" class="tag-cloud-link lg">READ NOW</a>
<?php
}

?>
              
               
              </div>
              </div>
               <div class="col-6">
                <div class="tagcloud">
                  <?php
                  if (!empty($item->download)) {
                  ?>
                    <a target="blank" href="{{$item->download}}#" class="tag-cloud-link lg" >HOW TO DOWNLOAD</a>
                  <?php
                  }
                  
                  ?>
               
               
              </div>
              </div>
            </div>
              
            <div class="text-right">AUTHOR:<a href="#" class="tag-cloud-link lg" > {{$item->author}}</a> </div>
            </div>
            <?php
            
            $name = $item->admin;
            $admin =  admin::where('name',$name)->take(1)->get();
            ?>
        

  @endforeach


           
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            @include('include/sidebar')
          </div><!-- END COL -->
        </div>
			</div>
		</section> 
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