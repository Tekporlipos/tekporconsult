window.onload = function(){
    let url = window.location.search;
    let query = new URLSearchParams(url);
    var pageNumber = document.getElementById('pagination');
    pageNumber.value = this.Number(query.get('page'));
    
    if (url != "") {

        if ( query.get('token') == "IHJUIA34sfafajklmka;555;stF66E3wggfgh%aaf*fafada335f*(sfsf(hhUIcwOIEfy3E") {
            alert("CONGRATULATION YOU MADE IT TO THE END.");
            clearInterval(timing);
            submit();
        }
    }
}


function customEvent(para, para1)
{ 
   var  changer = document.getElementById(para);
   var  valued = document.getElementById(para1); 
    var hidden = document.getElementById("usageHidden"); 
     texted = valued.innerText; 
     changer.innerHTML = texted;
     hidden.value = texted;

}

function usage(params) {
    if(params == "unfriendly"){
        var check = document.getElementById("puse"); 
        check.style.display = 'none';  
        

        var check = document.getElementById("scoreBoard"); 
        check.style.display = 'block';  

        for (let index = 1; index < 11; index++) {
            var id = "disableSide"+index;
            var check = document.getElementById(id); 
            check.style.display = 'none';        
        }
    
        
    } else if (params == "friendly") {
       
        var check = document.getElementById("puse"); 
        check.style.display = 'block';  


        var check = document.getElementById("scoreBoard"); 
        check.style.display = 'none'; 


            for (let index = 1; index < 11; index++) {
                var id = "disableSide"+index;
                var check = document.getElementById(id); 
                check.style.display = 'block';        
            }
        
            
    }
}




var secons = document.getElementById("S");
var mi = document.getElementById("M");
var hor = document.getElementById("H");




 var timing =    setInterval(() => {
  var timeinscons = secons.innerText;
  var timeinsconsValue = Number(timeinscons);
  timeinsconsValue = timeinsconsValue - 01;
  secons.innerHTML = timeinsconsValue;

  if (timeinsconsValue == 00) {
    secons.innerHTML = 60;
    var timeinmi = mi.innerText;
    var timeinmiValue = Number(timeinmi);
    timeinmiValue = timeinmiValue - 01;
    mi.innerHTML = timeinmiValue;

    var MINUTES = document.getElementById("M");
if(Number(MINUTES.innerText) < 0){
   let ran =  Math.ceil(Math.random()*5);

    switch (ran) {
        case 1:
            alert("TIME IS UP, : YOU SPENT TOO  MUCH TIME ON A SINGLE QUESTION")
            break;
            case 2:
             alert("TIME IS UP, : DON'T SOLVE QUIZ WHEN YOU ARE TRIED, IT SEEMS YOU ARE TIRED. YOU SPEND AVERAGELY 3 MINUTES ON A SINGLE QUESTION");
            break; 
            case 3:
             alert("TIME IS UP, : QUIZS IS NOT THE BEST WAY TO LEARN FOR YOU EXAMS, MAKE SURE YOU HAVE COVER MUST PART OF THE LECTURE NOTE.")
            break;
            case 4:
             alert("TIME IS UP, : IT SEEMS YOU DON'T FULLY UNDERSTND THE COURSE HAVE YOU CONSIDER GOING TROUGHT THE NOTE AGAIN?")
            break;
            case 5:
             alert("TIME IS UP, : QUIZZING IS JUST TO TEST HOW WELL YOU ARE TOWARDS YOUR EXAMS, DON'T USE IT AS YOUR WAY OF LEARNING")
            break;
    
        default:
         alert("TIME IS UP, : YOU SPENT TOO  MUCH TIME ON A SINGLE QUESTION")
            break;
    }
 
    var sub = document.getElementById("submited");
    sub.click();
} 


  };

    }, 1000);

    function stopTiming(){
        clearInterval(timing);
    }

    function solution(para1){
    
       var solutionshow = document.getElementById(para1);
        
       solutionshow.style.display = "block";
    }
    
function submit(){

    let url = window.location.search;
    let query = new URLSearchParams(url);
    var question1 = Number(query.get('question1'));
    if ( question1 == null) {
        question1 = 0;
    }
    var question2 = Number(query.get('question2'));
    
    if (question2 == null ) {
        question2 = 0;
       
    }
    var question3 = Number(query.get('question3'));
    if (question3 == null) {
        question3 = 0;
    }
    var question4 = Number(query.get('question4'));
    if (question4 == null) {
        question4 = 0;
    }
    var question5 = Number(query.get('question5'));
    if (question5 == null) {
        question5 = 0;
    }
    var question6 = Number(query.get('question6'));
    if (question6 == null) {
        question6 = 0;
    }
    var question7 = Number(query.get('question7'));
    if (question7 == null) {
        question7 = 0;
    }
    var question8 = Number(query.get('question8'));
    if (question8 == null) {
        question8 = 0;
    }
    var question9 = Number(query.get('question9'));
    if (question9 == null) {
        question9 = 0;
    }
    var question10 = Number(query.get('question10'));
    if (question10 == null) {
        question10 = 0;
    }

    var score = document.getElementById("scoreing");

    var total  = Number(question10+question9+
        question8+question7+question6+question5+
        question4+question3+question2+question1)*10;
    
    score.innerHTML = total;

    if (total > 50 & total < 70) {
        score.style.color = "blue";
    } else if(total >= 40 & total < 50) {
        score.style.color = "yellow";
    } else if(total < 40){
        score.style.color = "red";
    }

    for (let i = 1; i < 11; i++) {
  
        var solutionshow = document.getElementById("solution"+i);
        
       solutionshow.style.display = "block";
    }

    var scoreBoard = document.getElementById("scoreBoard");
var usagejude = query.get("usage");
    if ( usagejude == "Friendly") {
        scoreBoard.style.display = "none";
    }

}

function startnewtimee() {
    var secons = document.getElementById("S");
var mi = document.getElementById("M");
var hor = document.getElementById("H");
var scoreing = document.getElementById("scoreing");
secons.innerText = 60;
mi.innerText=14;
hor.innerText=00;
scoreing.innerText = "NA";
scoreing.style.color="blue";
}