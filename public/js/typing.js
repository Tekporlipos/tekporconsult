function onloaded() {
    var intext = document.getElementById('intext2');
var textarea2 = document.getElementById('inputtext2');
var size = intext.innerText;
if (size.length == 0){
textarea2.style.display = "none";
intext2.style.display = "none";
}
  }

$(document).on("click", function() {
  
    // cache textarea as we need it more than once
    var textarea = $("textarea"),
        
        // save old value as we need to clear it
        val = textarea.val();
    
    // focus textarea, clear value, re-apply
    textarea
      .focus()
      .val("")
      .val(val);
  });

function textfucus() {
    var intext1 = document.getElementById('intext1');
    var intext2 = document.getElementById('intext2');
    var textarea1 = document.getElementById('inputtext1');
    var textarea2 = document.getElementById('inputtext2');
    if (intext2.innerText == 0){
textarea2.style.display = "none";
    }
}
$(document).ready(function() {
    onloaded();
});
//keylog

function keylog(texted) {
    switch (texted) {
        case 'a':
            var key = document.getElementById('key1');
            key.style.display = "block";
            for (let index = 0; index < 28; index++) {
                if (index != 1) {
                    var intt = "key"+index;
                    var key = document.getElementById(intt);
                    key.style.display = "none";
                }
               
            }       
            break;
        case 'b':
            var key = document.getElementById('key2');
            key.style.display = "block";
            for (let index = 0; index < 28; index++) {
                if (index != 2) {
                    var intt = "key"+index;
                    var key = document.getElementById(intt);
                    key.style.display = "none";
                }
               
            }  
          break;
    
          case 'c':
            var key = document.getElementById('key3');
            key.style.display = "block";
            for (let index = 0; index < 28; index++) {
                if (index != 3) {
                    var intt = "key"+index;
                    var key = document.getElementById(intt);
                    key.style.display = "none";
                }
               
            }  
            break;
              
            case 'd':
                var key = document.getElementById('key4');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 4) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
    
            case 'e':
                var key = document.getElementById('key5');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 5) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
    
            case 'f':
                var key = document.getElementById('key6');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 6) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'g':
                var key = document.getElementById('key7');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 7) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'h':
                var key = document.getElementById('key8');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 8) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'i':
                var key = document.getElementById('key9');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 9) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'j':
                var key = document.getElementById('key10');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 10) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'k':
                var key = document.getElementById('key11');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 11) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'l':
                var key = document.getElementById('key12');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 12) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'm':
                var key = document.getElementById('key13');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 13) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'n':
                var key = document.getElementById('key14');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 14) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'o':
                var key = document.getElementById('key15');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 15) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'p':
                var key = document.getElementById('key16');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 16) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'q':
                var key = document.getElementById('key17');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 17) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'r':
                var key = document.getElementById('key18');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 18) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 's':
                var key = document.getElementById('key19');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 19) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 't':
                var key = document.getElementById('key20');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 20) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'u':
                var key = document.getElementById('key21');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 21) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'v':
                var key = document.getElementById('key22');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 22) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
    
            case 'w':
                var key = document.getElementById('key23');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 23) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'x':
                var key = document.getElementById('key24');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 24) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'y':
                var key = document.getElementById('key25');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 25) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case 'z':
                var key = document.getElementById('key26');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 26) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
            case ';':
                var key = document.getElementById('key28');
                key.style.display = "block";
                for (let index = 0; index < 28; index++) {
                    if (index != 28) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
    
    
            case ' ':
                var key = document.getElementById('key27');
                key.style.display = "block";
                for (let index = 0; index < 27; index++) {
                    if (index != 27) {
                        var intt = "key"+index;
                        var key = document.getElementById(intt);
                        key.style.display = "none";
                    }
                   
                }  
            break;
    
        default:
            break;
    }
    
}



//start
function start() {
    timmer();
   
    var intext1 = document.getElementById('intext1');
    var textarea1 = document.getElementById('inputtext1');
    textarea1.value = "";
var finish = document.getElementById('finish');
var print = document.getElementById('print');
var message = document.getElementById('message');
var next = document.getElementById('next');
var pause = document.getElementById('pause');
var start = document.getElementById('start');
var text = document.getElementById('text');
var ready = document.getElementById('ready');
var wait = document.getElementById('wait');
var breaked = document.getElementById('break');
breaked.style.display = "block";
finish.style.display = "none";
print.style.display = "none";
next.style.display = "none";
ready.style.display = "none";
start.style.display = "none";
wait.style.display = "none";
text.style.display = "block";
pause.style.display = "block";
message.style.display = "none";
var pauseTime = document.getElementById('pauseTime');
    pauseTime.value = "start";
textarea1.disabled=false;
var paragraph = intext1.innerText;
var sicet = textarea1.value.length;
var texted = paragraph.substr(sicet,1);
keylog(texted);
 
}
//keyboard
function keyboard() {
    var intext1 = document.getElementById('intext1');
    var intext2 = document.getElementById('intext2');
    var textarea1 = document.getElementById('inputtext1');
    var textarea2 = document.getElementById('inputtext2');
    var size = intext1.innerText.length;
    textarea1.value = textarea1.value.substr(0,size);
  var paragraph = intext1.innerText;
var sicet = textarea1.value.length;
var text = paragraph.substr(sicet+1,1);
if (size == sicet ) {
    finish();
var key = document.getElementById('key0');
key.style.display = "block";
};
keylog(text);
errornoteau();
}

function next() {
    var finish = document.getElementById('finish');
    var welcome = document.getElementById('welcome');
    welcome.play()
    var print = document.getElementById('print');
    var message = document.getElementById('message');
    var next = document.getElementById('next');
    var pause = document.getElementById('pause');
    var start = document.getElementById('start');
    var text = document.getElementById('text');
    var wait = document.getElementById('wait');
    var ready = document.getElementById('ready');
    var breaked = document.getElementById('break');
    var aerror = document.getElementById('errorno');
    var errorno = document.getElementById('errorcal');
    aerror.innerText = "00";
    errorno.innerText = "00";
    breaked.style.display = "none";
    finish.style.display = "none";
    print.style.display = "none";
    next.style.display = "none";
    start.style.display = "none";
    text.style.display = "none";
    pause.style.display = "none";
    message.style.display = "block";
    wait.style.display = "block";
    ready.style.display = "block";
    var timed = document.getElementById('time');
    timed.value = 00;
   

}

//print function
function print() {
   
}

function Bready() {
    var finish = document.getElementById('finish');
    var print = document.getElementById('print');
    var message = document.getElementById('message');
    var next = document.getElementById('next');
    var pause = document.getElementById('pause');
    var start = document.getElementById('start');
    var text = document.getElementById('text');
    var ready = document.getElementById('Bready');
    var wait = document.getElementById('wait');
    var keued = document.getElementById('inputtext1');
    keued.value = "";
    finish.style.display = "none";
    print.style.display = "none";
    next.style.display = "none";
    ready.style.display = "none";
    start.style.display = "block";
    text.style.display = "block";
    pause.style.display = "none";
    message.style.display = "none";
    wait.style.display = "block";
    keued.disabled = true;
    var welcome = document.getElementById('welcome');
    welcome.pause();
}

function ready() {
    var finish = document.getElementById('finish');
    var print = document.getElementById('print');
    var message = document.getElementById('message');
    var next = document.getElementById('next');
    var pause = document.getElementById('pause');
    var startde = document.getElementById('nextStart')
    var text = document.getElementById('text');
    var ready = document.getElementById('ready');
    var wait = document.getElementById('wait');
    var keued = document.getElementById('inputtext1');
    keued.value = "";
    finish.style.display = "none";
    print.style.display = "none";
    next.style.display = "none";
    ready.style.display = "none";
    startde.style.display = "block";
    text.style.display = "block";
    pause.style.display = "none";
    message.style.display = "none";
    wait.style.display = "block";
    keued.disabled = true;
    var welcome = document.getElementById('welcome');
    welcome.pause();
}
function finish() {
    var finish = document.getElementById('finish');
    var print = document.getElementById('print');
    var message = document.getElementById('message');
    var next = document.getElementById('next');
    var pause = document.getElementById('pause');
    var start = document.getElementById('start');
    var text = document.getElementById('text');
    var ready = document.getElementById('Bready');
    var wait = document.getElementById('wait');
    var keued = document.getElementById('inputtext1');
    var H = document.getElementById('H');
    var M = document.getElementById('M');
    var S = document.getElementById('S');
    var error = document.getElementById('error');
    error.innerText = " ";
    var pauseTime = document.getElementById('pauseTime');
    keued.value = "";
    var breaked = document.getElementById('break');
    breaked.style.display = "none";
    H.innerText = "00";
    S.innerText = "00";
    M.innerText = "00";
    pauseTime.value = "stop";
    finish.style.display = "block";
    print.style.display = "block";
    next.style.display = "block";
    ready.style.display = "none";
    start.style.display = "none";
    wait.style.display = "none";
    text.style.display = "none";
    pause.style.display = "none";
    message.style.display = "none";
    calculation();
    practicing();
}
function calculation() {
    //values 
    var timed = document.getElementById('time');
    var errors = document.getElementById('errorno');
    var aerror = document.getElementById('aerror');
    var intext1 = document.getElementById('intext1');
    

    //output
    var typingspeed = document.getElementById('typingspeed');
    var accuracy = document.getElementById('accuracy');
    var passcentage = document.getElementById('passcentage');

    //speed
    var calpm = document.getElementById('calpm');
    var alpm = document.getElementById('alpm');
    var speedmeter = document.getElementById('speedmeter');
    var calalpm = document.getElementById('calalpm');

    var typingid = document.getElementById('typingid');
    var level = document.getElementById('level');

//calculation

var timeing = timed.value;
var error = errors.innerText;
var lenght = intext1.innerText.length;
aerror.innerTex = error;
var speed = lenght/timeing;
var percentage = ((lenght-error)/lenght)*100;
var adjusted = speed *(percentage/100);

if (percentage < 30 && speed > 3 ) {
    adjusted = 0;
};

//set output
speedmeter.innerText = (adjusted).toString().substr(0,4);
calalpm.innerText = (adjusted).toString().substr(0,4);
alpm.innerText = (adjusted).toString().substr(0,4);
calpm.innerText = (speed).toString().substr(0,4);
typingspeed.innerText = (speed).toString().substr(0,4);
accuracy.innerText = (percentage).toString().substr(0,4);
passcentage.innerText = (percentage).toString().substr(0,4);

var speedsend = Number(speedmeter.innerText);
var accuratesend = Number(accuracy.innerText);
var typingsend = Number(typingid.value);
var levelsend =level.innerText;
statistics(speedsend,accuratesend,typingsend,levelsend);
}

function timmer() {
    setInterval(() => {
        var pauseTime = document.getElementById('pauseTime');
        var timePaused = pauseTime.value;
        if (timePaused != 'stop') {
            var H = document.getElementById('H');
            var M = document.getElementById('M');
            var S = document.getElementById('S');
            var time = document.getElementById('time');
            var caltime = time.value;
            time.value = Number(caltime)+1;
            var current = S.innerText;
            S.innerText = Number(current)+1;
            if (Number(S.innerText) == 60) {
                var currentM = M.innerText;
            M.innerText = Number(currentM)+1;
            S.innerText=00;
            };
            if (Number(M.innerText) == 60) {
                var currentH = H.innerText;
                H.innerText = Number(currentH)+1;
                M.innerText=00;
            } 
        }
   
    }, 1000);
};

function pause() {  
    var pauseTime = document.getElementById('pauseTime');
    pauseTime.value = "stop";
    var pause = document.getElementById('pause');
    pause.innerText = "PAUSED";
    var keued = document.getElementById('inputtext1');
    keued.disabled = true;
    var session = document.getElementById('session');
    session.play()
}

function resume() {
    var pauseTime = document.getElementById('pauseTime');
    pauseTime.value = "start";
    var pause = document.getElementById('pause');
    pause.innerText = "PAUSE";
    var keued = document.getElementById('inputtext1');
    keued.disabled = false;
    var session = document.getElementById('session');
    session.pause();
    
}
function startOver() {
    var finish = document.getElementById('finish');
    var print = document.getElementById('print');
    var message = document.getElementById('message');
    var next = document.getElementById('next');
    var pause = document.getElementById('pause');
    var start = document.getElementById('nextStart');
    var text = document.getElementById('text');
    var ready = document.getElementById('ready');
    var wait = document.getElementById('wait');
    var breaked = document.getElementById('break');
    var errorno = document.getElementById('errorno');
    var aerror = document.getElementById('aerror');
    var timeed = document.getElementById('time');
    var session = document.getElementById('session');
    session.pause()
    timeed.value = "00";
    errorno.innerText = "00";
    aerror.innerText = "00";
    breaked.style.display = "none";
    finish.style.display = "none";
    print.style.display = "none";
    next.style.display = "none";
    ready.style.display = "none";
    start.style.display = "block";
    text.style.display = "block";
    pause.style.display = "none";
    message.style.display ="none";
    wait.style.display = "block";
    var H = document.getElementById('H');
    var M = document.getElementById('M');
    var S = document.getElementById('S');
    var time = document.getElementById('time');
    time.value = 00;
    S.innerText = 00;
    M.innerText = 00;
    H.innerText = 00;
    var timed = document.getElementById('time');
    timed.value = 00;
}
//close
function closed() {
    window.location.href = "Games/typingClass";
}
//wait
function wait() {
    alert('WAITING!!!!!');
    var session = document.getElementById('session');
    session.pause()
}
//breakt
function breakt() {
    alert('BREAK TIME!!!!!');
}
function error() {
    var text = document.getElementById('intext1');
    var textarea1 = document.getElementById('inputtext1');
    var error = document.getElementById('error');
    var errorno = document.getElementById('errorno');
    var aerror = document.getElementById('aerror');
    var errorcal = document.getElementById('errorcal');
    var em = document.getElementById('em');
    error.display = "block";
    var texted = text.innerText;
    var intext = textarea1.value;
    var insize = intext.length;
    if (insize > 1) {

        var textted = texted.substr(insize-1,1);
        var intexted = intext.substr(insize-1,1);
        if (intexted.length != 0) {
            if (textted != intexted) {
                errorno.innerText = Number(errorno.innerText)+1;
            aerror.innerText = Number(aerror.innerText)+1;
            errorcal.innerText = Number(errorcal.innerText)+1;
                if (intexted == " ") {
                    error.innerText = "' '"
                }else{
                    error.innerText =intexted;
                    em.play();
                }
            }else{
                error.innerText =" ";
            }
            
        }
     
    }else{
 if (intext.length != 0) {
    var textted = texted.substr(0,1);
    if (textted != intext) {
        errorno.innerText = Number(errorno.innerText)+1;
            aerror.innerText = Number(aerror.innerText)+1;
            errorcal.innerText = Number(errorcal.innerText)+1;
        if (intext == " ") {
            error.innerText = "' '"
        }else{
            error.innerText =intext;
            em.play();
        }
    }else{
        error.innerText =" ";
    }
}

       
    }
};

function nextSart() {
var intext1 = document.getElementById('intext1');
var textarea1 = document.getElementById('inputtext1');
var pauseTime = document.getElementById('pauseTime');
var finish = document.getElementById('finish');
var print = document.getElementById('print');
var message = document.getElementById('message');
var next = document.getElementById('next');
var pause = document.getElementById('pause');
var start = document.getElementById('start');
var text = document.getElementById('text');
var ready = document.getElementById('ready');
var wait = document.getElementById('wait');
var breaked = document.getElementById('break');
var aerror = document.getElementById('errorno');
var timed = document.getElementById('time');
timed.value = 00;
aerror.innerText = "00";
pauseTime.value = "start";
breaked.style.display = "block";
finish.style.display = "none";
print.style.display = "none";
next.style.display = "none";
ready.style.display = "none";
start.style.display = "none";
wait.style.display = "none";
text.style.display = "block";
pause.style.display = "block";
message.style.display = "none";
textarea1.disabled=false;
var paragraph = intext1.innerText;
var sicet = textarea1.value.length;
var texted = paragraph.substr(sicet,1);
textarea1.value = "";
keylog(texted);
var welcome = document.getElementById('practi');
    welcome.pause();
}

function statistics(speed,accurate,typing,level) {
if (speed >= 3 && accurate >= 80){
    if (level == "BEGINNER") {
        level = "INTERMEDIATE";
        typing = 131;
    } else if (level == "INTERMEDIATE"){
        level = "ADVANCE";
        typing = 251;
    } 
} else if (speed >= 3 && accurate >= 60){
        typing = typing+5;
}else if(speed >= 3 && accurate >= 40){
    typing = typing+3;
}else if(speed >= 2 && accurate >= 90){
    typing = typing+4;
}else if(speed >= 2 && accurate >= 60){
    typing = typing+3;
}else if(speed >= 2 && accurate >= 40){
    typing = typing+2;
}else if(speed >= 1 && accurate >= 80){
    typing = typing+3;
}else if(speed >= 1 && accurate >= 40){
    typing = typing+2;
}else if(speed >= 1 && accurate >= 40){
    typing = typing+1;
}else if(speed >= 0.2 && accurate >= 50){
    typing = typing+1;
}else if(speed >= 0 && accurate >= 0){
    if (typing > 1) {
        typing = typing-1;
    }else{
        typing = typing;
    }
    
}else{
    typing = typing;
}


    if (window.XMLHttpRequest) {
        var coun = new XMLHttpRequest;
        }else{
        var coun = new ActiveXObject('Microsoft XMLHTTP');
        }
        coun.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
            document.getElementById('text').innerHTML = this.responseText;
            }
            }
            var requst = `speed=${speed}&accurate=${accurate}&typing=${typing}&level=${level}`;
            var urled = "typingStatistics?"+requst;
            coun.open('Get',urled );
            coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
            coun.send();
}

function clickready() {
    var clickready = document.getElementById('clickreadyau');
    clickready.play();
}
function onbreak() {
    var breaked = document.getElementById('breakau');
    breaked.play();
}
function onpaused() {
    var paused = document.getElementById('pausedau');
    paused.play();
}
function onresume() {
    var resume = document.getElementById('resumeau');
    resume.play();
}
function onstartover() {
    var startover = document.getElementById('startoverau');
    startover.play();
}
function onend() {
    var end = document.getElementById('endau');
    end.play();
}
function onwait() {
    var waited = document.getElementById('waitau');
    waited.play();
}
function onbegin() {
    var begin = document.getElementById('beginau');
    begin.play();
}
function onstarted() {
    var started = document.getElementById('startau');
    started.play();
}
function onprint() {
    var print = document.getElementById('printau');
    print.play();
}
function onnext() {
    var next = document.getElementById('nextau');
    next.play();
}
function practicing() {
    var practi = document.getElementById('practi');
    practi.play();
}

function errornoteau() {
    var errorno = document.getElementById('errorno');

    if (Number(errorno.innerText) == 10 || Number(errorno.innerText) == 20 || Number(errorno.innerText) == 30 || Number(errorno.innerText) == 40 || Number(errorno.innerText) == 50 || Number(errorno.innerText) == 60 || Number(errorno.innerText) == 70) {
        var errorau = document.getElementById('errorau');
        errorau.play();
    }
   
}