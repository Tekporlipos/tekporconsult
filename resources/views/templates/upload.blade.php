<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy -Upload file section</title>
	<meta property="og:image" content="--/uplaod image is not here yet." />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >

    <section id="erro" class="ftco-section">
        <div class="container">
            <div class="jumbotron jumbotron-fluid">
                @isset($_GET['erro'])
                <p  class="text-justified alert alert-danger">
                    <span class="ion-md-warning" aria-hidden="true"></span>
                   <span class="sr-only">Message:</span>
                   {{ $_GET['erro'] }}
                  </p>
                @endisset

                @isset($_GET['success'])
                <p class="text-justified alert alert-success">
                    <span class="ion-md-warning" aria-hidden="true"></span>
                   <span class="sr-only">Message:</span>
                   {{ $_GET['success'] }}
                  </p>
                @endisset
                <p class="lead">Upload your book or quiz questions here. In PDF format.</p>
                <hr class="my-4">
                <p>

                <form action="../../uploadfiles" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Full Name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelpId" placeholder="Enter Full Name">
                       
                      </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Enter Email">
                 
                </div>
                    <div class="form-group">
                        <label for="description">description:</label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for=""></label>
                      <input name="file" required type="file" class="form-control-file"  id="uploadfile" placeholder="Select file" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted">Select a file (Type pdf)</small>
                    </div>
                    <br>
                    <br>
                    <br>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </form>
                </p>
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