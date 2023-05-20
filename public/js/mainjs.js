 function scrolling() {
 document.getElementById('onlines').style.display='none'
 };

     function scrolling() {
     document.getElementById('onlines').style.display='none'
     };
         function onsen(div,div1) {
           var viewer = document.getElementById(div);
           viewer.style.display = 'none';
           var viewer1 = document.getElementById(div1);
           viewer1.style.display = 'block';
         };
          function redirict(para){
        window.location.href = para;
    };

    function starting(){
      alert("TIMMER WILL START THE MOMENT THE PAGE LOADS")
    };
   function change() {
     var profile = document.getElementById("profile");
     profile.click();
    };
    function play(argument) {
 	var vid = document.getElementById(argument);
 	vid.autoplay=true;
 	 if (vid.currentTime > 5) {
vid.currentTime=0;
  }
  vid.play();
 };
 function pluse(argument) {
 	var vid = document.getElementById(argument);
 	vid.pause();
 	vid.currentTime=00;
 };


