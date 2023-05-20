<!DOCTYPE html>
<html lang="en">
  <head>
    <title>  TekporAca - Admin_page</title>
    @include('include/head')
  </head>
  <body onscroll="scrolling()">
    @include('include.header')

   <div >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div  class="searchform order-lg-last">
          <div class="form-group d-flex">

            <input type="text" id="search" onfocus="focus();" onkeyup="seacher('onlines')" name="searches" class="form-control pl-3" placeholder="Search">

            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
          <div id="onlines">

          </div>
        </div>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="../home" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="../store" class="nav-link">Store</a></li>
	        	<li class="nav-item"><a href="../category" class="nav-link">Category</a></li>
	        	<li class="nav-item"><a href="../teachers" class="nav-link">Staff</a></li>
	        	<li class="nav-item"><a href="../blog" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="../Games" class="nav-link">Games/Quizzes</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Accounts</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Accounts <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>
		<div class="container">
			<br />
			<h3 align="center">File Uploader</h3>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading"><b>Update Profile</b></div>
				<div class="panel-body">
					<form id="uploadImage" action="upload.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label></label>
							<input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
						</div>
						<div class="form-group">
							<input type="submit" id="uploadSubmit" value="Upload" class="btn btn-info" />
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div id="targetLayer" style="display:none;"></div>
					</form>
					<div id="loader-icon" style="display:none;"><img src="loader.gif" /></div>
				</div>
			</div>
		</div>
		@include('include/footer')

		@include('include/down')
	  
	</body>
</html>

<script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
	});
});
</script>
