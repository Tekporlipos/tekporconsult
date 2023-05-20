<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Add Question</title>
    @include('include.head')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script> -->
<meta property="og:title" content="TekporAcademy - Add Question" />
<meta property="og:type" content="text.question" />
<meta property="og:url" content="https://tekporacademy.tk/QuestionEdit" />
<meta property="og:image" content="https://tekporacademy.tk/images/guide.jpg" />
  </head>
  <body ondblclick="scrolling();scroll()">
    @include('include.header')

   <div >

    
    <section class="hero-wrap hero-wrap-2 ftco-animate" style="background-image: url('{{ asset('images/guide.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Discussion Room</h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../../forum">FORUM <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a>EDIT QUESTION</a></span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section ftco-animate container">
      <div class="bg-light">
        <div class="row">
          <div class="col-lg-7 ftco-animate">
            <div class="justify-content-center jumbotron">
              <div class="container">
                <p class="text-justified alert alert-danger">
                  <span class="ion-md-warning" aria-hidden="true"></span>
                 <span class="sr-only">TAKE NOTE:</span>
                  Get information and guidance from WHO regrading the current outbreak of coronavirus disease (COVID-19).<br>
                  What would you what do know about coronavirus? <br> Follow the link to learn more about coronavirus. <a href="http://www.who.org" target="blank">WHO</a>
                </p>
              </div>
            </div>
                
                <div class="bg-light">                 
                   <div class="comment-form-wrap pt-5 ftco-animate">
                <h3 class="mb-5 h4 font-weight-bold">Ask Question</h3>
                <?php
use App\forum;
 $user_id = Auth::user()->id;
$forum = forum::where('user_id', $user_id)->orWhere('user_id', 21)->where('id', $id)->orderBy('id','desc')->take(1)->get();
                ?>
               @foreach ($forum as $item)
 <div  class=" bg-light"> 
                  <form action="/EditaddQuestion" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="hidden" name="User" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="title">EDIT QUESTION: (<SPAN class="text-danger text-small">required</SPAN>)</label><br/>
                      <label for="title"><i>Ask the question like you are asking someone infront of you.</i></label>
                      <div class="form-group">
                        <textarea name="title" id="title" cols="30" rows="1.5" placeholder="<?php if (isset($_GET['title'])) {
                          echo $_GET['title'];
                        }else{
                          echo 'eg: What is the diffence between Demography and Statistics?';
                        }  ?>" class="form-control" minlength="20" required><?php echo str_replace("_", " ", $item->title)?></textarea>
                     <input type="hidden" name="title_old" value="<?php echo str_replace("_", " ", $item->title)?>">
                   </div>
                      <br>
                    <label for="message">Description: (<SPAN class="text-danger text-small">required</SPAN>)</label><br/>
                    <label for="message"><i>Include all the information someone would need to answer this question</i></label>
                    <div class="text-justified">
                      <textarea name="question" id="editor" cols="30" rows="10" minlength="10" placeholder="<?php if (isset($_GET['question'])) {
                          echo $_GET['question'];
                        }else{
                          echo 'Give more information to the question.';
                        }  ?>" class="form-control">{{$item->question}}</textarea>
                    </div>
                    
                  </div>
                  <br/>
                  <div class="row" class="bg-light container" style="border:2px solid black">
                          <div class="col-md-6">
                                 <div class="form-group" id="profileUpload">
                                  
                  <label for="Profile">Attach a file: (<SPAN class="text-danger text-small">optional</SPAN>)</label>
                  <textarea type="text" name="URL" value="" id="url" style="display: none;"  cols="30" rows="1" placeholder="Iframe URL" ></textarea>
                  <input type="file" class="form-control-file" name="attachment" id="uploadFile" placeholder="select file" accept="image/*,video/*" aria-describedby="fileHelpId">
                </div>
                          </div>
                          <div class="col-md-6">
                            <label for="Profile">Select Type: (<SPAN titile="required if file is attached" class="text-danger text-small">required</SPAN>)</label>
                            <select name="type" onchange="showingType()" id="categoryed" class="form-control mb-2 text-center" >
                           <option value="" >Select Type</option>
                    <option value="picture" >Picture(3MB) </option>
                    <option value="video" >Video(64MB)</option>
                    <option value="URL" >URL(Iframe)</option>
                    
                        </select>
                  
                          </div>
                          <div class="text-center text-success">
                            <label class="text-center"><input type="radio" value="remove" name="remove"> Remove attachement </label> <label class="text-center"><input type="radio" value="" name="remove"> Cancel </label>
                          </div>
                          
                        </div>
                  <br>
                   <label for="Tags">Tags: (<SPAN class="text-danger text-small">required</SPAN>)</label><br/>
                   <label for="Tags">Add tags to help locate your question.</label>
                   <div class="form-group">
                    <textarea name="tag" id="tag" class="form-control" cols="30" rows="1" placeholder="<?php if (isset($_GET['tag'])) {
                          echo $_GET['tag'];
                        }else{
                          echo "Add tag eg: Statistics,Demography";
                        }  ?>" class="form-control" minlength="5" required="yes">{{$item->tag}}</textarea>
                   </div><div class="row">
                    <div class="col-md-12">
                       <select name="category" class="form-control" required >
                    <option value="">Category</option>
                    <option value="Agriculture">Agriculture </option>
                    <option value="Art">Art and Built</option>
                    <option value="Computing">Computing</option>
                    <option value="Courses">Uni. Courses</option>
                     <option value="Engineering">Engineering</option>
                    <option value="Health">Health Sciences</option>
                    <option value="Humanities">Humanities</option>
                     <option value="Robotics">Robotics</option>
                    <option value="Science">Sciences</option>
                    <option value="Vocational">Vocational</option>
                    <option value="Others">Others</option>
                </select>
                    </div>
                  </div>
                      <div class="form-group">
                    <input type="submit" onclick="comment('comment')" value="Submit Question" class="btn py-3 px-4 btn-primary" required>
                    <button class="btn btn-primary py-3 px-4">
                   <a style="color: red" href="/postDelete/{{$id}}?code_id={{$user_id}}&post={{$item->id}}&actionBy={{Auth::user()->name}}">Delate Post</a>
                 </button>  
                  </div>
                </div>
               @endforeach


                  </form>
                  
              </div>
                </div>
           
          </div> <!-- .col-md-8 -->

          <div class="col-lg-5 sidebar ftco-animate">
            @include('include/sidebar')
          </div><!-- END COL -->
     
        </div>
      </div>
    </section>
    
    <div id="break"></div>
    @include('include/footer')
    
    @include('include/down')

  <script>
    
    function showingType(){
    var URL = document.getElementById('categoryed');
    var url = document.getElementById('url');
  var select = document.getElementById('uploadFile');
  if (URL.value == 'URL') {
    url.style.display="block";
    select.style.display="none";
    select.value = "";
  }else{
    url.style.display="none";
    url.value = "";
select.style.display="block";
  }
  }
    



    if (innerWidth > 1000) {
      document.getElementById('break').innerHTML=" <br><br><br><br><br><br><br><br><br><br><br><br>";
    }
    
    function redirict(para){
        window.location.href = para;
    }
    </script>
    <!-- search -->
       <script>
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

     function scrolling() {
     document.getElementById('onlines').style.display='none'
     };

     function comment(div){
         
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
     var sear = document.getElementById('message');
     var title = document.getElementById('type');
     var requst = `message=${sear.value}&title=${title.value}`;
     var urled = "{{ URL::to('answerQuestion?')}}"+requst;
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send(); 
     message.value = "";
     };

     function showrep(div1,div2) {
     document.getElementById(div1).style.display='none';
     document.getElementById(div2).style.display='block';
     };

     function replyxml(div){
         
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
         var sear = document.getElementById('reply');
         var comid = document.getElementById('com_id');
         var requst = `reply=${sear.value}&commet_id=${comid.value}`;
         var urled = "{{ URL::to('replyanswer?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send(); 
         sear.value = "";
         };
         function onsen(div,div1) {
           var viewer = document.getElementById(div);
           viewer.style.display = 'none';
           var viewer1 = document.getElementById(div1);
           viewer1.style.display = 'block';
         }
       </script>
       <!-- Question search -->

       <script>
        function questions(div){
         document.getElementById('questions').style.display='block';
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
     var sear = document.getElementById('question');
     var requst = `searched=${sear.value}`;
     var urled = "{{ URL::to('questionSearch?')}}"+requst;
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send(); 
     };

     function scroll() {
     document.getElementById('questioncomming').style.display='none'
     };
       </script>
       <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
  </body>
</html>