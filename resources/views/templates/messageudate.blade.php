<?php
use App\ChatRoom;
use Carbon\Carbon;

$ChatRoom = ChatRoom::where('token',$_GET['token'])->get();

?>

@foreach ($ChatRoom as $item)
<?php
if ($item->sender == Auth::user()->id ) {
  ?>
        <div class="text-right" style="border-radius: 25px; width=80%; background-color:rgb(227, 231, 218);margin-left: 35%;">
          <p class="comment-body"  style="margin: 15px;">
            {{$item->message}}
              <br>
              <span class="text-succuss" style="color: rgba(129, 121, 111, 0.575)">@if ($item->user_seen == 1)
                seen {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
                @else
                Delivered {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
            @endif</span>
          </p>
  </div>
  <?php
}else {
    ChatRoom::where('token',$_GET['token'])->where('sender','!=',Auth::user()->id)->update(['user_seen'=>1]);
  ?>
     <div class="text-left" style="border-radius: 25px;background-color:rgb(227, 231, 218);margin-right: 35%;"">
      
          <p class="comment-body" style="margin: 15px;">
            {{$item->message}}
              <br>
              <span class="text-succuss" style="color: rgba(122, 115, 107, 0.726)">seen {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>
          </p>
  </div>
  <?php
}
?>
@endforeach