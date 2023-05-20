<?php 
use App\User;
use App\invite;
$courese = $_GET['course'];
$post_id = $_GET['post_id'];
$id = $_GET['question'];
$User = User::where('Course',$courese)->get();
foreach ($User as $key => $Users) {
?> 
<div>
    <li class="list-group-item"> 
  <div class="row">
    <div class="col-sm-8 col-md-8">{{$Users->Username }} {{$Users->Lname }}<br/><span class="text-success">School</span>:{{$Users->School}}</div>
    <div class="col-sm-4 col-md-4"><span id="send{{$key}}">
      <?php
      $like = invite::where('post_id',$post_id)->where('user_id',$Users->id)->get();
      if (sizeof($like) <= 0) {
        ?>
       <button class="btn-primary btn-sm btn" 
onclick="sendInvit('{{$Users->id}}','{{$post_id}}','send{{$key}}','{{$id}}','{{$Users->email}}','{{$Users->name}}')">Invite</button>
      <?php
      }else { 
        ?>
      <button class='btn-sm btn' disabled>Invited</button>
        <?php
      }
            ?>
    </span></div>
  </div>
    </li>
</div>
    
<?php
}

?>