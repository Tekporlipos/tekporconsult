<!DOCTYPE html>
<html lang="en">
  <head>
	<title>TekporAcademy - Registration_Page</title>
  @include('include/head')
  <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
    
<?php 
 use App\admin;
      $id = Auth::user()->id;
      $admins = admin::where('user_id',$id)->get();
foreach ($admins as $key => $value) {
  # code...
  $ids = $value->id;
}
      if (empty($ids)) {
        # code...

        ?>
<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(/images/bg_5.jpg);" data-stellar-background-ratio="0.5"     id="signup">
  <div class="overlay"></div>
    <div class="container" >
    <div class="row justify-content-end">
      <div class="col-md-8 py-5 px-md-5">
        <div class="py-md-5" >
          <div class="heading-section heading-section-white ftco-animate mb-5">
            <h3 class="mb-4">User Create Blog Account</h3>
            <p>Blog Account <i class='text-danger text-large'> {{$erro ?? ''}}</i></p>
          </div>
          <form action="/blog_register" method="POST" class="appointment-form ftco-animate">
            @csrf
            <div class="d-md-flex">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <div class="form-group">
                <input type="text" name="blogName" class="form-control @error('blogName') is-invalid @enderror" value="{{ old('blogName') }}" placeholder="Blog Name" required >

                @error('blogName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="form-group ml-md-4">
                <input type="text" name="blogField" class="form-control" placeholder="Bloger's Academic Field">
              </div required>
            </div>
            <div class="d-md-flex">
              <div class="form-group">
                <input type="text" name="Institution" class="form-control" placeholder="Institution" required >
              </div>
              <div class="form-group ml-md-4">
                <input type="email" class="form-control" name="email" placeholder="Blog Email" required >
              </div>
            </div>
         
            <div class="d-md-flex">
              <div class="form-group">
                <div class="form-field">
                  <div class="select-wrap">
                   
                    <input type="text" name="type" class="form-control" placeholder="Type (Eg: Teacher/Blogger)" required >
                  </div>
                </div>
              </div>
              <div class="form-group ml-md-4">
                <textarea name="info" id="" cols="30" maxlength="500" minlength="60" rows="2" class="form-control" placeholder="Blog Discreption" required></textarea>
              </div>
              </div>
            </div>
           
            <div class="row">
              <div class=" ml-md-6 col-md-6 text-center">
                <input type="submit" value="CREATE" class="btn btn-lg btn-primary py-3 px-4">
                    </div>
                    <hr/><hr/>
                    
            </div>
           
             
            
                    </form>
                </div>

      </div>
    </div>
  </div>
    
</section>

<?php
      }else {
        ?>
        <script>
window.location =('replace','accounts')
        </script>
 
        <?php
      }
?>

    

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