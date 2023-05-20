<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://tekporacademy.tk/../images/jungle.png" />
    <title>Into To The Jungle</title>
</head>
<body style="margin: 0px;">


    <div style="position: absolute; top:5%;text-align: center;left:5%; " onclick="pauseing()"  >
        <button id="end" autofocus style="border-radius: 5px; background-color: rgb(248, 2, 2);"> <a  id="link" tabindex="0" style="text-decoration:  none;"> <b id="pause">▶️</b> </a> </button>
            </div>
<audio id="audio" hidden src="/jangle/gameplay.mp3"  autoplay
 loop></audio>
 <audio id="kicked" hidden src="/jangle/kick.mp3"></audio>
    <div style="position: absolute; top:80%;text-align: center;left:42%; display: none;" id="replay" >
<button id="end" autofocus style="border-radius: 5px; color: black; background-color: yellow;"> <a  href="/Games/puzzle" id="link" tabindex="0" style="text-decoration:  none;"> <b>END</b> </a> </button>

<button onclick="replay()" autofocus style="border-radius: 5px;color: black; background-color: yellow;"> <a href="" id="link" tabindex="0" style="text-decoration:  none;"> <b>REPLAY</b> </a> </button>
    </div>
<!-- left-->
    <div id="left" style="position: absolute;top:80%;right: 70%; display: none;">
      
        <img src="jangle/arrowleft.png"  onclick="moveleft()" width="100" height="50" >
        
            </div>

            <div id="up" style="position: absolute;bottom:30%;right: 70%; display: none;">
                <img src="jangle/arrowup.png" width="100" height="50" onclick="moveup()">
                
                    </div>

<!-- right-->

     <div id="down" style="position: absolute;top:80%;left: 70%; display: none;">
                        <img  src="jangle/arrowdown.png" width="100" height="50" onclick="movedown()">
                        
                            </div>
      <div id="right" style="position: absolute;bottom:30%;left: 70%; display: none;">
        <img width="100" height="50" src="jangle/arrowright.png"  onclick="moveright()">
                                
                                    </div>
            
        
        
          






    <canvas id="canvas" >
    </canvas>
   

</body>
<script src="jangle/main.js"></script>
</html>