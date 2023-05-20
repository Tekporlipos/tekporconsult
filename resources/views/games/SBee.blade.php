<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TekporAcademy - Games_Spelling_Bee</title>
	<meta property="og:image" content="https://tekporacademy.tk/../spellingBee/wbhouseSpellingBee.png" />
 <link rel="stylesheet" href="/css/SBee.css">
  </head>

  <body class="code"  >
   
    <audio src="/spellingBee/Bee-noise.mp3" loop style="display: none" id="beeBee"></audio>
    <audio src="/spellingBee/startting.mp3" style="display: none" id="start"></audio>
    <audio src="/spellingBee/selection.mp3" style="display: none" id="selection"></audio>
    <audio src="/spellingBee/change-to-level.mp3" style="display: none"  id="change-level"></audio>
    <audio src="/spellingBee/change-to-review.mp3" style="display: none" id="change-review"></audio>
    <audio src="/spellingBee/clap.wav" style="display: none" id="clap"></audio>
    <audio src="/spellingBee/woo.mp3" style="display: none" id="woo"></audio>
    <audio src="/spellingBee/click.mp3" style="display: none" id="click"></audio>
    <audio src="/spellingBee/stage1.wav" style="display: none" id="stage1noti"></audio>
    <audio src="/spellingBee/stage2.wav" style="display: none" id="stage2noti"></audio>
    <audio src="/spellingBee/stage3.wav" style="display: none" id="stage3noti"></audio>
    <audio src="/spellingBee/win.wav" style="display: none" id="win"></audio>
    <audio src="/spellingBee/answer.mp3" style="display: none" id="answer"></audio>
   <input type="text" style="display: none" id="beecheck">
   <input type="number" style="display: none" value="1" name="true" id="policy">
<div id="soundplaybox"></div>

<canvas id="wallpeper"> 

</canvas>


<div id="frame">

  <a href="">
  
  <div id="trygain">
  
  YOUR SCORE IS BELOW POLICY SCORE. <br> <del>TRY AGAIN.</del>
  
  </div>
  
  </a>
  
  <div id="notification">
  
  </div>
  
  <div id="menu">
  
  
  
  
  
  
  
  <div onclick="cup()" title="Click for information on how to win this cup.">
  
  <img id="cupstyle" src="/spellingBee/trophy.png" alt="cup">
  
  </div>
  
  <br>
  
  <br>
  
  <div onclick="next(); bname()" id="initialStart" title="click to start the BEE">
  
  <img id="arrowstyle" src="/spellingBee/pngegg.png" alt="arrow">
  
  </div>
  
  
  
  <div onclick="resume()" style="display: none" id="newStart" title="click to start the BEE">
  
  <img id="arrowstyle" src="/spellingBee/pngegg.png" alt="arrow">
  
  </div>
  
  <div onclick="home()" title="Click to go back home">
  
  <img id="homestyle" src="/spellingBee/home.png" alt="home">
  
  </div>
  
  
  
  <div id="info">
  
  <p>
  
  <h4>HOW DO I WIN THE TROPHY?</h4><br>
  
  <br>
  
  <em>THIS IS JUST A GAME TO HELP YOU BUILD YOUR SPELLING STRENGTH, <strike>NO CHEATING</strike> </em><br><br>
  
  <b>RULES, HOW TO WIN THE TROPHY</b>
  
  <ul>
  
  <li>DO NOT LOOK INTO A NOTE OR SEARCH FOR THE ANSWERS.</li>
  
  <li>DO NOT ASK FOR HELP, DO YOU!.</li>
  
  <li>DO NOT TRY TO SCRIPT THE SITE.</li>
  
  <li>TAKE NOTE OF THE WORDS.</li>
  
  </ul>
  
  <b>HOW TO PLAY.</b>
  
  <ul>
  <li>THE QUIZ CONTAIN 5 SET OF QUESTIONS, YOU CAN BEGIN ANOTHER WHEN YOU ARE DONE WITH ONE. </li>
  <li>EACH SET CONTAIN 10 LEVELS.</li>
  <li>EACH LEVEL CONTAIN 3 STAGES.</li>
  <li>EACH STAGE CONTAIN 10 QUESTIONS.</li>
  <li>YOU NEED AT LEAST 200 POINTS TO PROMOTE YOU TO THE NEXT LEVEL.</li>
  <br> <b>STAGE INFO.</b><br>
  <li>STAGES ONE: THE DEFINITION IS PROVIDED AND YOU ARE ASK TO SELECT THE ONE THAT MATCHES THE WORD.</li>
  <li>STAGES TWO: YOU ARE ASK TO SELECT THE CORRECT WORD FROM A LIST.</li>
  <li>STAGES THREE: LETTERS ARE PROVIDED FOR YOU TO ARRANGE TO SPELL A WORD.
    <br>
    <ul>
      <b>NOTE: </b> <i>YOU MIGHT SPELL A WORD THAT MAY NOT BE THE ANSWER, IT DOES NOT MEAN IT IS WRONG.</i> 
    </ul>
  </li>
  </ul>
</p>
<div align='right'>
  <span onclick="times()" id="times">X</span>
</div>

</div>
  </div>
  
  <canvas  id="level">
  
  </canvas>
  
  <div  id="stagee1">
    
    <i class="levelNumber" id="lev1">
    </i>
  <div id="definition">
    <b id="definitionin"></b>
 </div>
  <h2  id="question">
Select the right word to the definition above ☝️.
  </h2>
  <div id="option">
    <div class="answer" onclick="ansewerStage1('answer1')" >
      <span class="select" id="answer1"></span>
      
    </div>
    <div class="answer" onclick="ansewerStage1('answer2')" >
      <span class="select" id="answer2"></span>
  
    </div>
    <div class="answer" onclick="ansewerStage1('answer3')" >
      <span class="select" id="answer3"></span>
  
    </div>
    <div class="answer" onclick="ansewerStage1('answer4')" >
      <span class="select" id="answer4"></span>
  
    </div>
  </div>
<div id="navigators">
Powered by WBHouse.
</div>
  </div>
  

  <div  id="stage2">
    <i class="levelNumber" id="lev2">0
    </i>
    <h1  id="question">
  Select the right word to the sound ⬇️.
    </h1>
    <div class="listen" id="listenToAudio">
    </div>
    <div id="options">
      <div class="answer" onclick="ansewerStage2('s2answer1')" >
        <span class="select" id="s2answer1"></span>
        
      </div>
      <div class="answer" onclick="ansewerStage2('s2answer2')" >
        <span class="select" id="s2answer2"></span>
    
      </div>
      <div class="answer" onclick="ansewerStage2('s2answer3')" >
        <span class="select" id="s2answer3"></span>
    
      </div>
      <div class="answer" onclick="ansewerStage2('s2answer4')" >
        <span class="select" id="s2answer4"></span>
    
      </div>
    </div>
  <div id="navigators">
  Powered by WBHouse.
  </div>
  </div>
  <div  id="stage3">
    <i class="levelNumber" id="lev3">0
    </i>
    <div id="definitiona"></div>
    <h2  id="question">
    Arrange the letters in it's correct form.
    </h2>
    <input type="text" style="display: none"  id="hiddenword">
    <div id="optiona">
      <span class="correct" onclick="ansewerStage3('l1')" id="l1">_</span>
      <span class="correct" onclick="ansewerStage3('l2')" id="l2">_</span>
      <span class="correct" onclick="ansewerStage3('l3')" id="l3">_</span>
      <span class="correct" onclick="ansewerStage3('l4')" id="l4">_</span>
      <span class="correct" onclick="ansewerStage3('l5')" id="l5">_</span>
      <br>
      <br>
      <br>
      <br>
      <span class="correct" onclick="ansewerStage3('l6')" id="l6">_</span>
      <span class="correct" onclick="ansewerStage3('l7')" id="l7">_</span>
      <span class="correct" onclick="ansewerStage3('l8')" id="l8">_</span>
      <span class="correct" onclick="ansewerStage3('l9')" id="l9">_</span>
      <span class="correct" onclick="ansewerStage3('l10')" id="l10">_</span>
      <br>
      <br>
      <br>
      <br>
      <span class="correct"  onclick="ansewerStage3('l11')" id="l11">_</span>
      <span class="correct"  onclick="ansewerStage3('l12')" id="l12">_</span>
      <span class="correct"  onclick="ansewerStage3('l13')" id="l13">_</span>
      <span class="correct"  onclick="ansewerStage3('l14')" id="l14">_</span>
      <span class="correct"  onclick="ansewerStage3('l15')" id="l15">_</span>
    </div>

  <div id="navigators">
  Powered by WBHouse.
  </div>
  </div>
  <div  id="review">

<div id="reviewhead"> <u>REVIEW</u> (<span id="scoreb"><i><em id="sorebord"></em>/<span id="over">100</span> </i></span>)</div>

<div id="scroll">
  <div id="reviewscroll">

  </div>
</div >

<div id="bottomNav">
  <span id="navhome" onclick="homeFromReview()">HOME⌛️</span>
  <span onclick="nextFromReview()" id="arrowNav">NEXT➡️</span>
 
</div>
</div>
</div>
<audio src="/spellingBee/Bee-noise.mp3" id="audiobee" loop></audio>
  <!-- values -->
  <input type="text" style="display: none" value='1' id="levelstatus">
  <input type="text" style="display: none" value='1' id="stage">
  <input type="text" style="display: none" value='0' id="place">
  <input type="text" style="display: none" value='0' id="level1Number">
  <input type="text" style="display: none" value='0' id="level2Number">
  <input type="text" style="display: none" value='0' id="level3Number">
 

<!-- values end -->
<i id="asymmetrik">
  
  <?php


 function randomwithout(int $var)
{
   $newvar = rand(1,5);
  for ($i=0; $i <5 ; $i++) { 
    if ($var != $newvar) {
     return $newvar;
    break;
    }else {
      continue;
    }
  }
}
  use App\spellingBeeS1;
  use App\spellingBeeS2;
  use App\spellingBeeS3;
  use App\spellingBeeUser;
  $id = Auth::user()->id;

  if (sizeOf(spellingBeeUser::where('user_id',$id)->get()) <= 0 ) {
    $userSet = new spellingBeeUser;
    $userSet->user_id = $id;
    $userSet->level = "1";
    $userSet->setoflevel = rand(1,5);
    $userSet->save();
    $user = spellingBeeUser::where('user_id',$id)->get();
  }else {
    $leveltestset = rand(1,5);
    $user = spellingBeeUser::where('user_id',$id)->get();
    foreach ($user as  $value) {
   $leveltest = $value->level;
   $leveltestset = $value->setoflevel;
  }
  
  if ($leveltest == 11) {
      $leveltestset = randomwithout($leveltestset);
    spellingBeeUser::where('user_id',$id)->update(['level'=>'1','setoflevel'=>$leveltestset]);
  }
  $user = spellingBeeUser::where('user_id',$id)->get();
  }
  
  foreach ($user as  $value) {
   $level = $value->level;
   $setoflevl =  $value->setoflevel;
  }
  $stage1 = spellingBeeS1::where('setoflevel',$setoflevl)->get();
  $stage2 = spellingBeeS2::where('setoflevel',$setoflevl)->get();
  $stage3 = spellingBeeS3::where('setoflevel',$setoflevl)->get();

  ?>  
   <input type="text" style="display: none" value='{{$level}}' id="changelevel">
   <input type="text" style="display: none" value='{{$setoflevl}}' id="changelevelset">
   <script>
//animation notification function
var noti =  document.getElementById('notification');


function notificationshow() {
var topdiv = 0
 var timeed = setInterval(() => {
   noti.style.display='block';
   noti.style.fontSize=topdiv*10+'%';
   noti.style.paddingTop=topdiv+'px';
    topdiv +=2;
    noti.style.top=topdiv;
    if (topdiv == 18) {
      clearInterval(timeed);
setTimeout(() => {
   noti.style.display='block';
   noti.style.fontSize=0+'%';
   noti.style.paddingTop=0+'px';
}, 1700);
    }
 }, 50);
};


     //stage 1
     var scoresstate1 = 0;
var review = document.getElementById("review");
var stagee1 = document.getElementById("stagee1");
var sorebord = document.getElementById("sorebord");
var level1Number = document.getElementById("level1Number");
if (changelevel.value == "2") {
  level1Number.value = 10;
}else if (changelevel.value == "3") {
  level1Number.value =20;
}
else if (changelevel.value == "4") {
  level1Number.value =30;
}
else if (changelevel.value == "5") {
  level1Number.value =40;
}
else if (changelevel.value == "6") {
  level1Number.value =50;
}
else if (changelevel.value == "7") {
  level1Number.value =60;
}
else if (changelevel.value == "8") {
  level1Number.value =70;
}
else if (changelevel.value == "9") {
  level1Number.value =80;
}
else if (changelevel.value == "10") {
  level1Number.value =90;
}
     var selectedStage1 = [];
     var stage1 = '<?php echo json_encode($stage1);?>';
     var stage1_object = JSON.parse(stage1);
     console.log(stage1_object);
//stage2

var scoresstate2 = 0;
var review = document.getElementById("review");
var stage2 = document.getElementById("stage2");
var level2Number = document.getElementById('level2Number');

if (changelevel.value == "2") {
    level2Number.value = 10;
  }else if (changelevel.value == "3") {
    level2Number.value =20;
  }
  else if (changelevel.value == "4") {
    level2Number.value =30;
  }
  else if (changelevel.value == "5") {
    level2Number.value =40;
  }
  else if (changelevel.value == "6") {
    level2Number.value =50;
  }
  else if (changelevel.value == "7") {
    level2Number.value =60;
  }
  else if (changelevel.value == "8") {
    level2Number.value =70;
  }
  else if (changelevel.value == "9") {
    level2Number.value =80;
  }
  else if (changelevel.value == "10") {
    level2Number.value =90;
  }
     var selectedStage2 = [];
     var stage2 = '<?php echo json_encode($stage2); ?>';
     var stage2_object = JSON.parse(stage2);
     //stage3

var scoresstate3 = 0;
var review = document.getElementById("review");
var stage3 = document.getElementById("stage3");
var level3Number = document.getElementById("level3Number");
if (changelevel.value == "2") {
    level3Number.value = 10;
  }else if (changelevel.value == "3") {
    level3Number.value =20;
  }
  else if (changelevel.value == "4") {
    level3Number.value =30;
  }
  else if (changelevel.value == "5") {
    level3Number.value =40;
  }
  else if (changelevel.value == "6") {
    level3Number.value =50;
  }
  else if (changelevel.value == "7") {
    level3Number.value =60;
  }
  else if (changelevel.value == "8") {
    level3Number.value =70;
  }
  else if (changelevel.value == "9") {
    level3Number.value =80;
  }
  else if (changelevel.value == "10") {
    level3Number.value =90;
  }
     var selectedStage3 = [];
     var stage3 = '<?php echo json_encode($stage3); ?>';
     var stage3_object = JSON.parse(stage3);
</script>
    </i>




<script>
  //stage 1

  function stage1_Questions() {
   var definitions1 = document.getElementById('definitionin');
  var answer1 = document.getElementById('answer1');
  var placed = document.getElementById('place');
  var answer2 = document.getElementById('answer2');
  var answer3 = document.getElementById('answer3');
  var answer4 = document.getElementById('answer4');
  var lev1 = document.getElementById('lev1');
  lev1.innerText = place.value+"/10";
  if (Number(place.value) < 10) {
   
definitions1.innerText=stage1_object[Number(level1Number.value)].definition;
answer1.innerText=stage1_object[Number(level1Number.value)].a1;
answer2.innerText=stage1_object[Number(level1Number.value)].a2;
answer3.innerText=stage1_object[Number(level1Number.value)].a3;
answer4.innerText=stage1_object[Number(level1Number.value)].a4;
  }else{
  
   var changeReview = document.getElementById('change-review');
   changeReview.play();


   lev1.innerText = 0;
   placed.value = '0';
stagee1.style.display = 'none';
review.style.display = 'block';

var container = document.getElementById('reviewscroll');
var intex = '';
var statelevel = Number(level1Number.value)-10;
for (let index = 0; index < selectedStage1.length; index++) {

if ( selectedStage1[index].trim().toUpperCase() != stage1_object[index+statelevel].word.trim().toUpperCase()) {
var textselecetedStatus =  selectedStage1[index].trim().strike();

}else{
var textselecetedStatus =  selectedStage1[index].trim();
scoresstate1+=10;

};

//score warning
if (scoresstate1 < 50 ) {
document.getElementById('scoreb').style.color='#c82c2c';
var woo = document.getElementById('woo');
woo.play();
}else{
document.getElementById('scoreb').style.color='green';
var clap = document.getElementById('clap').play();
};

// score
sorebord.innerText =scoresstate1;
document.getElementById('over').innerText="100";

//score animation

if (Number(sorebord.innerText) == 100) {
  
noti.innerText ="Don't get too comfortable, stage one is always interesting 😅. ";
notificationshow();
document.getElementById('stage1noti').play();
}


//adding
intex = intex+"<div class='container' id='reviewContainer'><div class='correctword'>"+stage1_object[index+statelevel].word+"<img onclick=\"playsound('"+stage1_object[index+statelevel].word+"')\" class='sound' src='/spellingBee/word.png' alt='Sound'></div><div  class='deffinition'>"+stage1_object[index+statelevel].definition+"</div><div class='selected'>"+textselecetedStatus+"</div></div><hr>";
}

container.innerHTML = intex;
selectedStage1 = [];
  };
  
  level1Number.value = Number(level1Number.value)+1;
  }



  //stage 2


  function stage2_Questions() {
  var reviewscroll = document.getElementById('reviewscroll');
  var answer1 = document.getElementById('s2answer1');
  var placed = document.getElementById('place');
  var answer2 = document.getElementById('s2answer2');
  var answer3 = document.getElementById('s2answer3');
  var answer4 = document.getElementById('s2answer4');
  var listenToAudio = document.getElementById('listenToAudio');
  var lev2 = document.getElementById('lev2');
  if (Number(place.value) < 10) {

   lev2.innerText = placed.value+"/10";
   listenToAudio.innerHTML = "<img class='detection' src='/spellingBee/word.png' onclick=\"playsound('"+stage2_object[Number(level2Number.value)].word+"')\" >"; 
answer1.innerText=stage2_object[Number(level2Number.value)].a1;
answer2.innerText=stage2_object[Number(level2Number.value)].a2;
answer3.innerText=stage2_object[Number(level2Number.value)].a3;
answer4.innerText=stage2_object[Number(level2Number.value)].a4;


reviewscroll.innerHTML = '';
  }else{
   lev2.innerText = 0;
   var changeReview = document.getElementById('change-review');
   changeReview.play();
   placed.value = '0';
stage2.style.display = 'none';
review.style.display = 'block';
var intex = '';
scoresstate2 = scoresstate1;
var statelevel = Number(level2Number.value)-10;
for (let index = 0; index < selectedStage2.length; index++) {

//correct or wrong

if ( selectedStage2[index].trim().toUpperCase() != stage2_object[index+statelevel].word.trim().toUpperCase()) {
var textselecetedStatus =  selectedStage2[index].trim().strike();

}else{
var textselecetedStatus =  selectedStage2[index].trim();
scoresstate2+=10;

};

//score warning
if (scoresstate2 < 100 ) {
document.getElementById('scoreb').style.color='#c82c2c';
var woo = document.getElementById('woo');
woo.play();
}else{
document.getElementById('scoreb').style.color='green';
document.getElementById('clap').play();
}

// score
sorebord.innerText =scoresstate2;
document.getElementById('over').innerText="200";

//score animation

if (Number(sorebord.innerText) == 200) {
noti.innerText ="congratulations, keep it up 😉️. ";
notificationshow();
document.getElementById('stage2noti').play();
}

//adding
intex = intex+"<div class='container' id='reviewContainer'><div class='correctword'>"+stage2_object[index+statelevel].word+"<img onclick=\"playsound('"+stage2_object[index+statelevel].word+"')\" class='sound' src='/spellingBee/word.png' alt='Sound'></div><div  class='deffinition'>"+stage2_object[index+statelevel].definition+"</div><div class='selected'>"+textselecetedStatus+"</div></div><hr>";
}

reviewscroll.innerHTML = intex;
selectedStage2 = [];
  }
  level2Number.value = Number(level2Number.value)+1;
  }



     //stage 3


     function stage3_Questions() {
  var reviewscroll = document.getElementById('reviewscroll');
  var l1 = document.getElementById('l1');
  var l2 = document.getElementById('l2');
  var l3 = document.getElementById('l3');
  var l4 = document.getElementById('l4');
  var l5 = document.getElementById('l5');
  var l6 = document.getElementById('l6');
  var l7 = document.getElementById('l7');
  var l8 = document.getElementById('l8');
  var l9 = document.getElementById('l9');
  var l10 = document.getElementById('l10');
  var l11 = document.getElementById('l11');
  var l12 = document.getElementById('l12');
  var l13 = document.getElementById('l13');
  var l14 = document.getElementById('l14');
  var l15 = document.getElementById('l15');
  var placed = document.getElementById('place');
  var hiddenword = document.getElementById('hiddenword');
  var lev3 = document.getElementById('lev3');
  var word = '';
  if (Number(place.value) < 10) {

   lev3.innerText = placed.value+"/10";
   reviewscroll.innerHTML = '';
   word =stage3_object[Number(level3Number.value)].word.toUpperCase();
   hiddenword.value = word;
   var newword  = word.split("").sort();
   for (let index = 0; index < newword.length; index++) {
    switch (index) {
      case 0:
      l1.innerText=newword[index];
      if (l1.innerText.length < 1) {
        l1.style.display="none";
      }
        break;
        case 1:
        l2.innerText=newword[index];
        if (l2.innerText.length < 1) {
        l2.style.display="none";
      }
        break;
        case 2:
        l3.innerText=newword[index];  
        if (l3.innerText.length < 1) {
        l3.style.display="none";
      }
        break;
        case 3:
        l4.innerText=newword[index];
        if (l4.innerText.length < 1) {
        l4.style.display="none";
      }
        break;
        case 4:
        l5.innerText=newword[index];
        if (l5.innerText.length < 1) {
        l5.style.display="none";
      }
        break;
        case 5:
        l6.innerText=newword[index];
        if (l6.innerText.length < 1) {
        l6.style.display="none";
      }
        break;
        case 6:
        l7.innerText=newword[index];
        if (newword[index].length < 1) {
        l7.style.display="none";
      }
        break;
        case 7:
        l8.innerText=newword[index];
        if (newword[index].length < 1) {
        l8.style.display="none";
      }
        break;
        case 8:
        l9.innerText=newword[index];
        if (newword[index].length < 1) {
        l9.style.display="none";
      }
        break
        case 9:
        l10.innerText=newword[index];
        if (newword[index].length < 1) {
        l10.style.display="none";
      }
        break
        case 10:
        l11.innerText=newword[index];
        break
        case 11:
        l12.innerText=newword[index];
        break
        case 12:
        l13.innerText=newword[index];
        break
        case 13:
        l14.innerText=newword[index];
        break
        case 14:
        l15.innerText=newword[index];
        break
        case 15:
        l16.innerText=newword[index];
        break

      
    }
   }
  
  }else{

   lev3.innerText = 0;
   var changeReview = document.getElementById('change-review');
   changeReview.play();
   placed.value = '0';
stage3.style.display = 'none';
review.style.display = 'block';
var intex = '';
scoresstate3 = scoresstate2;
var statelevel = Number(level3Number.value)-10;
for (let index = 0; index < selectedStage3.length; index++) {

//correct or wrong

if ( selectedStage3[index].trim().toUpperCase() != stage3_object[index+statelevel].word.trim().toUpperCase()) {
var textselecetedStatus =  selectedStage3[index].trim().strike();

}else{
var textselecetedStatus =  selectedStage3[index].trim();
scoresstate3+=10;

};

//score warning
if (scoresstate3 < 150 ) {

var woo = document.getElementById('woo');
woo.play();
document.getElementById('scoreb').style.color='#c82c2c';
}else{
document.getElementById('scoreb').style.color='green';
document.getElementById('clap').play();
}

//analyse
if (scoresstate3  < 200) {
  document.getElementById('policy').value="0";
}else{
  document.getElementById('policy').value="1";
}

// score
sorebord.innerText =scoresstate3;
document.getElementById('over').innerText="300";
//score animation



if (Number(sorebord.innerText) == 300) {
noti.innerText ="FLAWLESS VICTORY ♥️. ";
notificationshow();
document.getElementById('stage3noti').play();
}

//adding
intex = intex+"<div class='container' id='reviewContainer'><div class='correctword'>"+stage3_object[index+statelevel].word+"<img onclick=\"playsound('"+stage3_object[index+statelevel].word+"')\" class='sound' src='/spellingBee/word.png' alt='Sound'></div><div  class='deffinition'>"+stage3_object[index+statelevel].definition+"</div><div class='selected'>"+textselecetedStatus+"</div></div><hr>";
}


reviewscroll.innerHTML = intex;
selectedStage3 = [];
scoresstate3=0;
scoresstate1=0;
scoresstate2=0;

  }
  
  }
  stage1_Questions();
  stage2_Questions();
  stage3_Questions();


//stage 1

  function ansewerStage1(div) {
   var answer = document.getElementById('answer');
   var selected = document.getElementById(div);
   if (selected.innerText.length > 3) {
     answer.play();
   var place = document.getElementById('place');
var int = Number(place.value);
   if (selectedStage1.length > 1 && int < 1 ) {
     selectedStage1 = [];
   }else{
     selectedStage1.push(selected.innerText);
   }
var int = Number(place.value);
if (int < 10) {
 place.value=int+1;
stage1_Questions();
}
   }
  }

  // stage 2


  function ansewerStage2(div) {
    
   var answer = document.getElementById('answer');
   var selected = document.getElementById(div);
   if (selected.innerText.length > 3) {
     answer.play();
   var place = document.getElementById('place');
var int = Number(place.value);
   if (selectedStage2.length > 1 && int < 1 ) {
     selectedStage2 = [];
   }else{
     selectedStage2.push(selected.innerText);
   }
if (int < 10) {
 place.value=int+1;
stage2_Questions();
}
   }

  }

  function ansewerStage3(div) {
   var selection = document.getElementById('selection');
   selection.play();
   var selected = document.getElementById(div);
   if (selected.innerText != '_') {
   var place = document.getElementById('place');
var int = Number(place.value);
     var hiddenword = document.getElementById('hiddenword');
     var definitiona = document.getElementById('definitiona');
     definitiona.innerText = definitiona.innerText+selected.innerText;
     selected.innerText = "_";
    
if (hiddenword.value.length == definitiona.innerText.length) {
 var answer = document.getElementById('answer');
  answer.play();
 selectedStage3.push(definitiona.innerText);
 definitiona.innerText="";
 level3Number.value = Number(level3Number.value)+1;
 if (int < 10) {
 place.value=int+1;
stage3_Questions();
}

}
   }
  
  };


window.onload = function() {
var playsound = document.getElementById('beeBee');
playsound.play();
}


</script>

  </body>
  <script src="/js/SBee.js"></script>
  <script src="/js/levebee.js"></script>
  
</html>
