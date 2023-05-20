function mediaQuery() {
    var frame = document.getElementById('frame');
    if (innerWidth < 660) {
        frame.style.left ="0px";
        frame.style.right ="0px";
        frame.style.width ="88%"
        }else{
            frame.style.left ="20%";
            frame.style.right ="20%";
            frame.style.width ="60%"
        }
}
mediaQuery();
window.addEventListener('resize',function () {
    mediaQuery();
})

function next() {
var memu = document.getElementById('menu');
var start = document.getElementById('start');
var beecheck = document.getElementById("beecheck");
beecheck.value = "false";
var playsound = document.getElementById('beeBee');
 playsound.pause();
start.play();
memu.style.display='none';
var level = document.getElementById('level');
level.style.display='block';
}
function home() {
    window.location.replace('/Games/puzzle');
}
function cup() {
    document.getElementById('info').style.display='block';
}
function times() {
    document.getElementById('info').style.display='none';
}
function playsound(sound) {
    var soundplay = document.getElementById("soundplay");
    soundplay.src= sound;
    soundplay.play;
}

function playsound(sound){
    var clicked = document.getElementById("click");
    clicked.play();
if (window.XMLHttpRequest) {
var coun = new XMLHttpRequest;
}else{
var coun = new ActiveXObject('Microsoft XMLHTTP');
} 
coun.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
document.getElementById('soundplaybox').innerHTML = this.responseText;
document.getElementById('playme').play();
}
}
var requst = 'sound='+sound.toLowerCase();
var urled = "playsound?"+requst;
coun.open('Get',urled );
coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
coun.send(); 

};

function newlevel(){
   
    if (window.XMLHttpRequest) {
    var coun = new XMLHttpRequest;
    }else{
    var coun = new ActiveXObject('Microsoft XMLHTTP');
    }
    coun.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
    }
    }
   var level =  document.getElementById('changelevel');
   var levelset =  document.getElementById('changelevelset');
    var requst = 'level='+level.value+'&set='+levelset.value;
    var urled = "changelevel?"+requst;
    coun.open('Get',urled );
    coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
    coun.send(); 
    
    };