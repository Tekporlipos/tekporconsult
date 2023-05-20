
  <!-- Humberger Begin -->
 <div class="humberger__menu__overlay"></div>
 <div class="humberger__menu__wrapper">
     <div class="humberger__menu__logo">
         <a href="../../../../../"><img src="../../../../../img/logo.png" alt="WBHouse"></a>
     </div>
  
     <div class="humberger__menu__widget">
    
         <div class="header__top__right__auth">


          <ul class="navbar-nav ml-auto" >
            <!-- Authentication Links -->
            @guest
                @if (Route::has('register'))
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('register') }}"><u><b> {{ __('SIGN IN') }} <i class="ion-md-log-in"></i></b></u></a>

                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                  <span class="text-success text-center" id="verifyemail"></span>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     <span id="anouncem"> {{ Auth::user()->name }}</span>
                     <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" id="anouncem1" onclick="shownotifi('Notification')" >
                         {{ __('Notification') }}  <i class="ion-md-notifications"></i>
                     </a><a class="dropdown-item" >
                         <?php
if (!isset(Auth::user()->email_verified_at)) {
?>
<span class="text-danger" title="You have not verify you email." onclick="emailverify()">Verify Email <i class="ion-ios-stopwatch"></i></span>
<script type="text/javascript">
var top = document.getElementById('anouncem1');
top.style.color='red';
function emailverify(){
if (window.XMLHttpRequest) {
var coun = new XMLHttpRequest;
}else{
var coun = new ActiveXObject('Microsoft XMLHTTP');
}
coun.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
document.getElementById('verifyemail').innerHTML = this.responseText;
}
}
var urled = "{{ URL::to('emailverify')}}?email={{Auth::user()->email}}";
coun.open('Get',urled );
coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
coun.send();
message.value = "";
};
</script>
<?php
}
?>
                     </a>
                     <a class="dropdown-item" href="/accounts">
                      {{ __('Account') }} <i class="ion-md-wallet"></i>
                  </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();signOut();">
                            {{ __('Logout') }} <i class="ion-md-log-out"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
            @endguest
        </ul>
             
          

         </div>
     </div>
     <nav class="humberger__menu__nav mobile-menu">
         <ul>
            <li><a href="../../../storeCategory">Store</a></li>
            <li><a href="./../../courseCategory">Tutorials</a></li>
            <li><a href="../../../forum">Forum</a></li>
            <li><a href="../../../blog">Blog</a></li>
            <li><a href="../../../Games">Games</a></li>
         </ul>
     </nav>

     <div id="mobile-menu-wrap"></div>
     <div class="header__top__right__social">
        <a href="../../../../uploadfile" title="upload"><span class="icon-upload"></span></a>
      <a href="https://twitter.com/johntekpordzik1" title="twitter"><span class="ion-logo-twitter"></span></a>
      <a href="https://www.facebook.com/Tekpor_Acadamey" title="facebook"><span class="ion-logo-facebook"></span></a>
      <a href="https://www.instagram.com/tekpor_academy/" title="instagram"><span class="ion-logo-instagram"></span></a>
      <a href="https://wa.me/233501654023" title="whatsapp"><span class="ion-logo-whatsapp"></span></a>
     </div>
     <div class="humberger__menu__contact">
         <ul>
             <li ><i class="ion-md-mail"></i>info@tekporacademy.tk</li>
             <li onclick="whatsapp()">Call: +233 270 475 728</li>
         </ul>
     </div>
 </div>
 <!-- Humberger End -->

 <!-- Header Section Begin -->
 <header class="header" style="z-index: 500">
     <div class="header__top">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="header__top__left">
                         <ul>
                          <li ><i class="ion-md-mail"></i>info@tekporacademy.tk</li>
                          <li onclick="whatsapp()">Call: +233 270 475 728</li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <div class="header__top__right">
                         <div class="header__top__right__social">
                            <a href="../../../../uploadfile" title="upload"><span class="icon-upload"></span></a>
                          <a href="https://twitter.com/johntekpordzik1" title="twitter"><span class="ion-logo-twitter"></span></a>
                          <a href="https://www.facebook.com/Tekpor_Acadamey" title="facebook"><span class="ion-logo-facebook"></span></a>
                          <a href="https://www.instagram.com/tekpor_academy/" title="instagram"><span class="ion-logo-instagram"></span></a>
                          <a href="https://wa.me/233501654023" title="whatsapp"><span class="ion-logo-whatsapp"></span></a>
                         </div>
                      
                         <div class="header__top__right__auth">


                          <ul class="navbar-nav ml-auto" >
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('register'))
                                    <li class="nav-item">
     
                                        <a class="nav-link" href="{{ route('register') }}"><u><b> {{ __('SIGN IN') }} <i class="ion-md-log-in"></i></b></u></a>
     
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                  <span class="text-success text-center" id="verifyemail"></span>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <span id="anounce"> {{ Auth::user()->name }}</span>
                                     <span class="caret"></span>
                                    </a>
     
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" id="anounce1" onclick="shownotifi('Notification')" >
                                         {{ __('Notification') }}  <i class="ion-md-notifications"></i>
                                     </a><a class="dropdown-item" >
                                         <?php
     if (!isset(Auth::user()->email_verified_at)) {
      ?>
     <span class="text-danger" title="You have not verify you email." onclick="emailverify()">Verify Email <i class="ion-ios-stopwatch"></i></span>
     <script type="text/javascript">
      var top = document.getElementById('anounce1');
      top.style.color='red';
       function emailverify(){
     if (window.XMLHttpRequest) {
     var coun = new XMLHttpRequest;
     }else{
     var coun = new ActiveXObject('Microsoft XMLHTTP');
     }
     coun.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
     document.getElementById('verifyemail').innerHTML = this.responseText;
     }
     }
     var urled = "{{ URL::to('emailverify')}}?email={{Auth::user()->email}}";
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send();
     message.value = "";
     };
     </script>
      <?php
     }
     ?>
                                     </a>
                                     <a class="dropdown-item" href="/accounts">
                                      {{ __('Account') }} <i class="ion-md-wallet"></i>
                                  </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();signOut();">
                                            {{ __('Logout') }} <i class="ion-md-log-out"></i>
                                        </a>
     
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
     
                                    </div>
                                </li>
                            @endguest
                        </ul>
                             
                          

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script>
      function whatsapp() {
       
        window.location = "https://wa.me/233501654023";
      }
    </script>
    
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-2">
                 <div class="header__logo" align="center">
                     <a href="../../../../../"><img src="../../../../img/logo1.png" width="100%"  alt="WBHouse"></a>
                 </div>
             </div>
             <div class="col-lg-7">
                 <nav class="header__menu">
                     <ul>
                      <li><a href="../../../storeCategory">Store</a></li>
                      <li><a href="./../../courseCategory">Tutorials</a></li>
                      <li><a href="../../../forum">Forum</a></li>
                      <li><a href="../../../blog">Blog</a></li>
                      <li><a href="../../../Games">Games</a></li>
                     </ul>
                 </nav>
             </div>
            <div class="col-lg-3">
              <div  class="searchform order-lg-last">
                <div class="form-group d-flex">
          
                <input type="text" id="search" onfocus="focus();" onkeyup="seacher('onlines')" name="searches" class="form-control pl-3" placeholder="Search">
          
                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
                </div>
                
                
              </div>
            </div>
         </div>
         <div class="humberger__open">
             <i class="oi oi-menu"></i>
         </div>
     </div>
 </header>
 <!-- Header Section End -->

   <div class="container"id="onlines">
   </div>

 
 <!-- Hero Section End -->
 <div class="container" id="Notification" style="display: none;">
  <div class="text-right"  style="border-right: 6px solid red" >

<?php
use App\Notification;
use App\ViewedNotification;
use App\ViewedReplyNotification;
use App\replyNotification;
use Carbon\Carbon;
use App\followNotification;
use App\viewFollowNotification;
use App\invite;
use App\ViewedinviteNotification;
if (isset(Auth::user()->id)) {


?>
   <span id="checkNoti" >
     <?php
     if (isset($_GET['count']) && ($_GET['token']) == "oirksdolike09p4i0i9oiklrio4wja3fkoiw" && isset($_GET['notification'])) {
$notifived_id = $_GET['count'];
$id = Auth::user()->id;
$ViewedNotif =  viewFollowNotification::where('user_id',$id)->where('notifi_id',$notifived_id)->get();
if (sizeOf($ViewedNotif) <= 0) {
$viewed = new viewFollowNotification;
$viewed->notifi_id = $notifived_id;
$viewed->user_id = $id;
$viewed->save();
}}

if (isset($_GET['count']) && ($_GET['token']) == "ew4334xdffg6586ygrvctr5665fgr5r5f656yfr5756gr6" && isset($_GET['notification'])) {
$notifived_id = $_GET['count'];
$id = Auth::user()->id;
$ViewedinviteNotification =  ViewedinviteNotification::where('user_id',$id)->where('notifi_id',$notifived_id)->get();
if (sizeOf($ViewedinviteNotification) <= 0) {
$viewed = new ViewedinviteNotification;
$viewed->notifi_id = $notifived_id;
$viewed->user_id = $id;
$viewed->save();
}}


if (isset($_GET['count']) && ($_GET['token']) == "2032jkfnmuihjkdWD3e312da" && isset($_GET['notification'])) {
$notifived_id = $_GET['count'];
$id = Auth::user()->id;
$ViewedNotif =  ViewedNotification::where('user_id',$id)->where('notifi_id',$notifived_id)->get();
if (sizeOf($ViewedNotif) <= 0) {
$viewed = new ViewedNotification;
$viewed->notifi_id = $notifived_id;
$viewed->user_id = $id;
$viewed->save();
}}
//coment
if (isset($_GET['count']) && ($_GET['token']) == "iujudhskghwtwioepuyblsjhqyendj89e8mksckj" && isset($_GET['notification'])) {
$repleyed_id = $_GET['count'];
$id = Auth::user()->id;
$VieRepNotific =  ViewedReplyNotification::where('user_id',$id)->where('repleyed_id',$repleyed_id)->get();
if (sizeOf($VieRepNotific) <= 0) {

$viewedre = new ViewedReplyNotification;
$viewedre->repleyed_id = $repleyed_id;
$viewedre->user_id = $id;
$viewedre->save();
}}
//coment


if (isset(Auth::user()->id)) {
$id = Auth::user()->id;
$user_name = Auth::user()->name;
$course = Auth::user()->Course;
};
$Notif =  Notification::where('Category','LIKE', "%$course%")->where('admin','!=', $id)->orderBy('id','desc')->get();
$repNoti =  replyNotification::where('repleyed',$user_name)->where('user_id','!=', $id)->orderBy('id','desc')->get();
$repNoti =  replyNotification::where('repleyed',$user_name)->where('user_id','!=', $id)->orderBy('id','desc')->get();
$followNotification =  followNotification::where('user_id',$id)->orderBy('id','desc')->get();
$invite =  invite::where('user_id',$id)->orderBy('id','desc')->get();
     ?>
     <!--follow-->
@foreach($followNotification as $item)
<?php $not_id =  $item->id;
$viewFollowNotification =  viewFollowNotification::where('user_id',$id)->where('notifi_id',$not_id)->get();
if (sizeOf($viewFollowNotification) > 0 ) {
}else{
?>
<a  class="nav-link dropdown-toggle ftco-animate" href="/{{$item->link}}?token=oirksdolike09p4i0i9oiklrio4wja3fkoiw&notification=seen&count={{$item->id}}" role="button" >{{$item->message}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a>
<?php
}?>
     @endforeach
     <!--follow-->
           <!--invite-->
@foreach($invite as $item)
<?php $not_id =  $item->id;
$ViewedinviteNotification =  ViewedinviteNotification::where('user_id',$id)->where('notifi_id',$not_id)->get();
if (sizeOf($ViewedinviteNotification) > 0 ) {
}else{
?>
<a  class="nav-link dropdown-toggle ftco-animate" href="/{{$item->link}}?token=ew4334xdffg6586ygrvctr5665fgr5r5f656yfr5756gr6&notification=seen&count={{$item->id}}" role="button" >{{$item->message}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a>
<?php
}?>
       @endforeach
       <!--invite-->
     @foreach($Notif as $item)
<?php $not_id =  $item->id;
$ViewedNotif =  ViewedNotification::where('user_id',$id)->where('notifi_id',$not_id)->get();
if (sizeOf($ViewedNotif) > 0 ) {
}else{
?>
<a  class="nav-link dropdown-toggle ftco-animate" href="/{{$item->link}}?token=2032jkfnmuihjkdWD3e312da&notification=seen&count={{$item->id}}" role="button" >{{$item->notification}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a>
<?php
}?>
     @endforeach


     @foreach($repNoti as $item1)
<?php $not_id =  $item1->id;
$ViRepNoti =ViewedReplyNotification::where('user_id',$id)->where('repleyed_id',$not_id)->get();
if (sizeOf($ViRepNoti) > 0 ) {
}else{
?>
<a  class="nav-link dropdown-toggle ftco-animate" href="/{{$item1->link}}?token=iujudhskghwtwioepuyblsjhqyendj89e8mksckj&notification=seen&count={{$item1->id}}" role="button" >{{$item1->repleyed}} {{$item1->message}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item1->created_at))->diffForHumans()}}</a>
<?php
}
?>
     @endforeach

                         <div class="btn-gruop">
                           <button class="btn btn-default btn-sm" onclick="redirict('/accounts_discustion')">More</button>
                            <button class="btn btn-default btn-sm" onclick="hidnotifi('Notification')">Hide</button>
                         </div>

   </span>

<?php
}


?>


  </div>
</div>
<script type="text/javascript">
  function hidnotifi(div) {
var divver = document.getElementById(div);
divver.style.display="none";
            }
             function shownotifi(div) {
var divver = document.getElementById(div);
divver.style.display="block";
var chckNot = document.getElementById("checkNoti");
var ne = chckNot.innerHTML;
if (ne.length > 2500) {
 window.location.href = '/accounts_discustion';
}

            }
             function redirict(para){
 window.location.href = para;
};

function checkNoti() {
var chckNot = document.getElementById("checkNoti");
var ne = chckNot.innerHTML;
if (ne.length > 470) {
var anonm = document.getElementById("anouncem");
var anon = document.getElementById("anounce");
var anon1m = document.getElementById("anouncem1");
var anon1 = document.getElementById("anounce1");
anon.title="You have notifications";
anon.style.color="red";
anon1.title="You have notifications";
anon1.style.color="red";
anonm.title="You have notifications";
anonm.style.color="red";
anon1m.title="You have notifications";
anon1m.style.color="red";
}else{
 var anon = document.getElementById("anounce");
 var anonm = document.getElementById("anouncem");
var anon1m = document.getElementById("anouncem1");
var anon1 = document.getElementById("anounce1");
anon.style.color="#16181b";
anonm.style.color="#16181b";
anon1.title="You have no notifications";
anon1m.title="You have no notifications";
anon1.style.color="#16181b";
anon1m.style.color="#16181b";
};
}
checkNoti();

function signOut() {
var auth2 = gapi.auth2.getAuthInstance();
auth2.signOut().then(function () {
console.log('User signed out.');
});
};
</script>

 