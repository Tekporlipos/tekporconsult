<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Basic Category Class</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()" contenteditable="true">
    @include('include.header')
   <div >
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/store_back.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Course</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="Games">Course <i class="ion-ios-arrow-forward"></i></a></span> <span>Basic Course<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <div class="row" style="margin: 0;">
        <div class="col-md-3 text-left">
            
            <div>
                <h3>Content</h3>
                <ul style="list-style: none;margin: 0;padding: 0; font-size:15px">
                    <li> <u><a href="#SHAPE-AND-SPACE">SHAPE AND SPACE</a></u> </li>
                    <li> <u><a href="#Solid-Figures">Solid Figures</a></u></li>
                    <li> <u><a href="#Cuboid">Cuboid</a></u></li>
                    <li> <u><a href="#Prism">Prism</a></u></li>
                    <li>  <u><a href="#Pyramid">Pyramid</a></u> </li>
                    <li>  <u><a href="#Net">Net </a></u> </li>
                   
                </ul>
            </div>
           
            
        </div>
       <div class="col-md-9" >
           <div class="jumbotron" style="font-size: 100">
<h2 id="SHAPE-AND-SPACE" ><strong>SHAPE AND SPACE</strong></h2><p><strong>Shape</strong> is the appearance of something in terms of its arrangements in <i>space</i>, especially its outline.</p><p><strong>Space</strong> is distance between or physical extent across two or three dimensions; area, volume.</p><p><br><strong>Line Segment</strong>: is a part of a straight line bounded by two point. Let A and B be two point on a line.</p><figure class="image"><img src="/basicimage/lingsegment.png" alt="lingsegment"><figcaption><strong>Line Segment</strong></figcaption></figure><p>&nbsp;</p><p><strong>Ray</strong>: is a ling segment where one end of the line is extended endlessly.</p><figure class="image"><img src="/basicimage/ray.png" alt="lingsegment"><figcaption><strong>Ray</strong></figcaption></figure><p>&nbsp;</p><p><strong>Vertex</strong>: Is the point where two or move lines connect to form a corner.</p><figure class="image"><img src="/basicimage/vertex.png" alt="lingsegment"><figcaption>There are four vertices, The vertex at A,B,C and D.</figcaption></figure><p><br>&nbsp;</p><p><i>Note the joint at the middle are not vertex, vertex makes a corner.</i></p><p><br>&nbsp;</p><h3 id="Solid-Figures"><strong>Solid Figures</strong></h3><p><strong>Solid figures</strong> have faces,Vertex and edges.</p><p>Ex:Cuboid, Prisms, Pyramid etc.</p><h3 id="Cuboid"><strong>Cuboid</strong></h3><p>A <strong>cuboid</strong> is a box-shape object, it has six flat sides and all angles adjacent between sides are right angles and of its faces are rectangles.</p><p>&nbsp;</p><figure class="image"><img src="/basicimage/cuboid.png" alt="lingsegment"><figcaption><i>It has 6 faces, 12 edges and 8 vertices.</i></figcaption></figure><p>&nbsp;</p><p><strong>Edge</strong> is a line segment joining two adjacent vertices.</p><p><strong>Face</strong> is the flat bounding surfaces of a solid figure.</p><p><br>&nbsp;</p><h3 id="Prism"><strong>Prism</strong></h3><p>A <strong>prism</strong> is a 3-dimensional <strong>shape</strong> with two identical <strong>shapes</strong> facing each other.</p><p>Ex: Rectangular Prism, Pentagonal Prism, Cylinder,etc</p><p><br>&nbsp;</p><figure class="image"><img src="/basicimage/prism.png"><figcaption><i>3 faces, 2 edges and 0 vertex &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6 faces, 12 edges and 8 vertices</i></figcaption></figure><p>&nbsp;</p><h3 id="Pyramid"><strong>Pyramid</strong></h3><p>A <strong>pyramid</strong> is a structure whose outer surfaces are triangular and converge to a single step at the top, making the shape roughly a pyramid in the geometric sense.</p><p>Ex: Rectangular Pyramid, Triangular Pyramid, etc.</p><p><br>&nbsp;</p><figure class="image"><img src="/basicimage/pyramid.png"><figcaption><i>5 faces, 8 edges and 5 vertex &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4 faces, 6 edges and 4 vertex</i></figcaption></figure><p>&nbsp;</p><h3 id="Net"><strong>Net&nbsp;</strong></h3><p>Net is the flat representation of a solid figure that can be folded to make the figure it represent.</p><figure class="image"><img src="/basicimage/net.png"><figcaption>Cube Net</figcaption></figure><p>&nbsp;</p><figure class="image"><img src="/basicimage/pyramid2.png"><figcaption>Square Pyramid Net</figcaption></figure>
       </div>
    </div>
 
    </div>
 
 


		
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