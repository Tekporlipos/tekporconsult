var canvas = document.getElementById("level");
var audiobee = document.getElementById("audiobee");
var menu = document.getElementById("menu");
var changeposion = document.getElementById("changelevel");
var stagee1 = document.getElementById("stagee1");
var stage2 = document.getElementById("stage2");
var review = document.getElementById("review");
var stage3 = document.getElementById("stage3");
var wallpeperctx = document.getElementById("wallpeper");
wallpeperctx.height = innerHeight;
wallpeperctx.width = innerWidth;
var wallpeperctx = wallpeperctx.getContext("2d");
canvas.height = menu.clientHeight;
canvas.width = menu.clientWidth;
var leveveboolen = false;
var ctx = canvas.getContext("2d");
var policy = document.getElementById('policy');
var positionx = 15;
var positony = canvas.height-95;

if (changeposion.value == "2") {
   positionx = 60;
   positony = canvas.height-95;
}else if(changeposion.value == "3"){
  positionx = canvas.width-90;
   positony = canvas.height-(90+(canvas.height/5));
}
else if(changeposion.value == "4"){
   positionx = 30;
    positony = canvas.height-(90+(canvas.height/5));
}
else if(changeposion.value == "5"){
   positionx = 30;
    positony = canvas.height-(90+(canvas.height/5)+(canvas.height/5));
} else if(changeposion.value == "6"){
   positionx = canvas.width-90;
    positony = canvas.height-(90+(canvas.height/5)+(canvas.height/5));
}
else if(changeposion.value == "7"){
   positionx = canvas.width-90;
    positony = canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5));
} else if(changeposion.value == "8"){
   positionx = 30;
    positony = canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5));
}
else if(changeposion.value == "9"){
   positionx = 30;
    positony = canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5));
}
else if(changeposion.value == "10"){
   positionx = canvas.width/2;
    positony = canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5));
}






function leveled() {
  
    ctx.strokeStyle='#008000a2';
    ctx.beginPath();
    ctx.lineWidth = 30;
    ctx.lineCap='round';
    ctx.lineJoin = 'round';
    ctx.moveTo(60,canvas.height-60);
    ctx.lineTo(canvas.width-60,canvas.height-60);
    ctx.lineTo(canvas.width-60,canvas.height-(60+(canvas.height/5)));
    ctx.lineTo(60,canvas.height-(60+(canvas.height/5)));
    ctx.lineTo(60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)));
    ctx.lineTo(canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)));
    ctx.lineTo(canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)));
    ctx.lineTo(60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)));
    ctx.lineTo(60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)));
    ctx.lineTo(canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)));
    ctx.stroke();

    ctx.strokeStyle='#6e796eb0';
    ctx.fillStyle = '#6e796eb0'

ctx.beginPath();
    ctx.arc(60,canvas.height-60,20,0,Math.PI*2);
    ctx.fill();
    ctx.stroke();
    
    ctx.beginPath();
    //1
    ctx.arc(canvas.width-60,canvas.height-60,20,0,Math.PI*2);
    ctx.stroke();
    
    ctx.beginPath();
    //2
    ctx.arc(canvas.width-60,canvas.height-(60+(canvas.height/5)),20,0,Math.PI*2)
    ctx.stroke();
    
    ctx.beginPath();
    //3
    ctx.arc(60,canvas.height-(60+(canvas.height/5)),20,0,Math.PI*2);
    ctx.stroke();
    
    ctx.beginPath();
    //4
    ctx.arc(60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)),20,0,Math.PI*2)
    ctx.stroke();
    
    ctx.beginPath();
    //5
    ctx.arc(canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)),20,0,Math.PI*2);
    ctx.stroke();
    
    ctx.beginPath();
    //6
    ctx.arc(canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)),20,0,Math.PI*2);
    ctx.stroke();
    
    ctx.beginPath();
    //7
    ctx.arc(60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)),20,0,Math.PI*2);
    ctx.stroke();
    
    ctx.beginPath();
    //8
    ctx.arc(60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)),20,0,Math.PI*2);
    ctx.stroke();
    
    ctx.beginPath();
    //9
    ctx.arc(canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)),20,0,Math.PI*2);

    
   // ctx.lineTo(canvas.height,canvas.width-150);
    ctx.stroke();
    }
    
leveled();


function Killer(x,y,f,dx,dy) {
    this.x = x;
    this.y = y;
    this.w =  70;
this.food = f;
this.speedx = dx;
this.speedy = dy;
     this.element = function() {
ctx.fillStyle = "blue";
this.image =  new Image(70,70);
this.image.src = this.food;
this.initial = y;
ctx.drawImage(this.image,this.x,this.y,this.w,this.w);
     }
 
 this.update = function() {
//wall
//1

if (this.x == 40) {
   leveveboolen = false;;
    canvas.style.display = "none";
    stagee1.style.display = "block";
    audiobee.pause();
};

if (this.x == 45) {
   audiobee.play();
};

if (this.x == (canvas.width-100)-canvas.width%10) {
    leveveboolen = false;
    canvas.style.display = "none";
    stagee1.style.display = "block";
    audiobee.pause();
};
if (this.x < 30) {
        this.speedx = dx;
        this.speedy =0;
        audiobee.play();       
};
   //2
     if (this.x >= canvas.width-90 && this.y <= canvas.height-90) {
        this.speedx = 0;
        this.food = '/spellingBee/top.png';
        this.speedy = -2;
        audiobee.play();
     }
 
   //3
     if (this.x >= canvas.width-90 && this.y <= canvas.height-(90+(canvas.height/5))) {
        this.speedx = -dx;
        this.speedy =0;
        this.food = '/spellingBee/left.png';
        audiobee.play();
     }
     //4 60,
     if (this.x <= 30 && this.y <= canvas.height-(60+(canvas.height/5))) {
        this.speedx = 0;
        this.food = '/spellingBee/top.png';
        this.speedy = -2;
        audiobee.play();
     }
     //5 60,canvas.height-(60+(canvas.height/5)+(canvas.height/5))
     if (this.x <= 30 && this.y <= canvas.height-(90+(canvas.height/5)+(canvas.height/5))) {
        this.food = '/spellingBee/bee.png';
        this.speedx = dx;
        this.speedy =0;
        audiobee.play();
     }
     //6  canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5))
     if (this.x >= canvas.width-90 && this.y <= canvas.height-(90+(canvas.height/5)+(canvas.height/5))) {
        this.speedx = 0;
        this.food = '/spellingBee/top.png';
        this.speedy = -2;
        audiobee.play();
     }
     //7  canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))
     if (this.x >= canvas.width-90 && this.y <= canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))) {
        this.speedx = -dx;
        this.speedy =0;
        this.food = '/spellingBee/left.png';
        audiobee.play();
     }
     //8 60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))
     if (this.x <= 30 && this.y <= canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))) {
        this.speedx = 0;
        this.food = '/spellingBee/top.png';
        this.speedy = -2;
        audiobee.play();
     }

     //9 60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))
     if (this.x <= 30 && this.y <= canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))) {
        this.food = '/spellingBee/bee.png';
        this.speedx = dx;
        this.speedy =0;
        audiobee.play();
     }

     //10 canvas.width-60,canvas.height-(60+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))

     if (this.x >= canvas.width-90 && this.y <= canvas.height-(90+(canvas.height/5)+(canvas.height/5)+(canvas.height/5)+(canvas.height/5))) {
         this.w =200;
         this.food = '/spellingBee/trophy.png';
         audiobee.pause();
         this.x = canvas.width/3;
         this.y = canvas.height/3;
        this.speedy =0;
        this.speedx = 0;
        var win = document.getElementById('win');
        win.play();
     }

  this.x += this.speedx;
  this.y += this.speedy;
 this.element();

 }
 }

 function Bees(x,y,f,dx,dy) {
   this.x = x;
   this.y = y;
   this.w =  (Math.random()*40)+10;
this.food = f;
this.speedx = dx;
this.speedy = dy;
    this.element = function() {
wallpeperctx.fillStyle = "blue";
this.image =  new Image(50,50);
this.image.src = this.food;
wallpeperctx.drawImage(this.image,this.x,this.y,this.w,this.w);
    }

this.update = function() {
//wall
    if (this.x < 0) {
       this.speedx = dx;
       this.food  = '/spellingBee/right-side.png';
    }
    if (this.x+50 > innerWidth-4) {
       this.speedx = -this.speedx;
       this.food  = '/spellingBee/left-side.png';
    }

    if (this.y < 0) {
       this.speedy = dy;
       
    }
    if (this.y+50 > innerHeight-4) {
       this.speedy = -this.speedy;
    }
    this.x += this.speedx;
   this.y += this.speedy;

this.element();
}
    
}


var  beee = [];
    for (let i = 0; i < innerWidth*0.015; i++) {
       var x = Math.random()*innerWidth-70;
       var y = Math.random()*innerHeight-70;
       var dx = Math.random()*7;
       var dy = Math.random()*7;
        var f ='/spellingBee/right-side.png';
        beee.push( new Bees(x,y,f,dx,dy));
    }
 
 killer = [];
for (let i = 0; i < 1; i++) {
    var x =positionx-positionx%5;
    var y = positony-positony%5;
    var dx = 5;
    var dy = 0;
    var f ='/spellingBee/bee.png';
    killer.push( new Killer(x,y,f,dx,dy));
}





function action() {
    requestAnimationFrame(action);
    wallpeperctx.clearRect(0,0,innerWidth,innerHeight);
    for (let j = 0; j < beee.length; j++) {
      beee[j].update();
 }
    if (leveveboolen == true ) {
       if (policy.value == "1") {
         ctx.clearRect(0,0,canvas.width,canvas.height);
         leveled();
         for (let j = 0; j < killer.length; j++) {
             killer[j].update();
       }
       
      }
    }
    


}
 function name() {
    leveveboolen = false;
 }   
 function bname() {
    leveveboolen = true;
 } 
action();

function nextFromReview() {
   
   var changeLevel = document.getElementById("change-level");
   changeLevel.play();
   var level = document.getElementById("levelstatus");
   var stage = document.getElementById("stage");
 if (Number(level.value) == 1) {
   stage3_Questions();
   review.style.display = "none";
   stage2.style.display = "block";
   level.value=2;
   name();
 }else if (Number(level.value) == 2) {
   review.style.display = "none";
   stage3.style.display = "block";
   level.value=3;
   name();
 }else if (Number(level.value) == 3) {
   level.value=1;
   stage.value = Number(stage.value)+1;
   review.style.display = "none";
   stage3.style.display = "none";
   menu.style.display = "block";
   var initialStart = document.getElementById('initialStart');
   initialStart.style.display="block";
   var newStart = document.getElementById('newStart');
   newStart.style.display="none";
   var playsound = document.getElementById('beeBee');
   playsound.play();
 if (document.getElementById('policy').value == "1") {
   newlevel();
 }else{
   document.getElementById('trygain').style.display="block";
  
 }

 }
  

}
function homeFromReview() {
   menu.style.display = "block";
   var initialStart = document.getElementById('initialStart');
   initialStart.style.display="none";
   var newStart = document.getElementById('newStart');
   newStart.style.display="block";
   var playsound = document.getElementById('beeBee');
 playsound.play();
};

function resume() {
   menu.style.display="none";
   var playsound = document.getElementById('beeBee');
   playsound.pause();
}



