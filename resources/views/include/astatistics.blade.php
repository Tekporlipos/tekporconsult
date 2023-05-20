
    <div class="text-justified alert alert-danger">
        <?php
          use App\Notification;
              use App\ViewedNotification;
              use App\ViewedReplyNotification;
              use App\viewFollowNotification;
              use App\followNotification;
              use App\replyNotification;
              use App\forum;
        use App\follow;
        use App\User;
        use Carbon\Carbon;
        use App\forumAnswer;
        use App\like;
        use App\viewedPost;
              $id = Auth::user()->id;
                $user_name = Auth::user()->name;
                $course = Auth::user()->Course;
              $Notif =  Notification::where('Category','LIKE', "%$course%")->where('admin','!=', $id)->orderBy('id','desc')->get();
        
              $ViewedNotif =  ViewedNotification::where('user_id',$id)->get();
              $repNoti =  replyNotification::where('repleyed',$user_name)->where('user_id','!=', $id)->orderBy('id','desc')->get();
              $ViRepNoti =ViewedReplyNotification::where('user_id',$id)->get();
              $forum =follow::where('user_id',$id)->get();
              $like =like::where('user_id',$id)->get();
              $follow =follow::where('user_id',$id)->get();
              $forumAnswer =forumAnswer::where('user_id',$id)->get();
        
                                $follo =  sizeOf($follow);
                                $forum =  sizeOf($forum) ;
                                $forumAnswer =  sizeOf($forumAnswer) ;
                                $like =  sizeOf($like) ;
                                $result = $follo*1.5+$forum*3+$like+$forumAnswer*3;
                              
        ?>
                        <span class="ion-md-information-circle" aria-hidden="true"></span>
                        <span class="sr-only">TAKE NOTE:</span>
                        <div class="container">
                          <div class="row text-left" >
                            <div class="col-md-4">
        <h5> <u>Activity</u> </h5>
        
        <div class="row text-left">
          <div class="col-md-5" style="font-size: 15px">
            <i>Notification: <?php echo sizeOf($Notif) ?> </i>
          </div>
          <div class="col-md-7" style="font-size: 15px">
           <i> Viewed Notification: <?php echo sizeOf($ViewedNotif) ?></i>
          </div>
        </div>
        
        <div class="row text-left">
          <div class="col-md-5" style="font-size: 15px">
            <i>Discussion:  <?php echo sizeOf($repNoti) ?> </i >
          </div>
          <div class="col-md-7" style="font-size: 15px">
            <i> Viewed Discussion: <?php echo sizeOf($ViRepNoti) ?></i>
          </div>
        </div>
        
                            </div>
                            <div class="col-md-4">
                              <h5> <u>Statistics</u> </h5>
                              <li><i>Active Level: <?php 
                                if ($result >= 400 && $resultresult <= 650){
                                  echo "Low";
                                  $active = 100;
                                }elseif ($result > 650 && $result <= 870){
                                  echo "Average";
                                  $active = 203;
                                }elseif ($result > 870 && $result <= 1070){
                                  echo "High";
                                  $active = 300;
                                }elseif ($result > 1070 && $result <= 1830) {
                                 echo "Very High";
                                 $active = 407;
                                }else {
                                  $active = 20;
                                  echo "Not Available";
                                } ?> (<?php echo $active ?>) </i></li>
                              <li><i>Questions: <?php echo $forum ?>
                              (<?php echo $forum*3 ?>)
                            </i></li>
                              <li><i>Answers: <?php echo $forumAnswer ?> (<?php echo $forumAnswer*3 ?>)</i></li>
                              <li><i>follow: <?php echo ($follo) ?> (<?php echo ($follo)*1.5 ?>)</i></li>
                              <li><i>Love:  <?php echo ($like) ?> (<?php echo ($like) ?>)</i></li>
                              
        
                            </div>
                            <div class="col-md-4">
                              <h5> <u>Point:  </u> <span class="text-success">{{$redeem = $result+$active}}
                                </span>  </h5>
                              
                              <div class="row">
                                <div class="col-4">
                                  <button class="btn btn-md btn-primary">Redeem</button>
                                </div>
        
        
                                <div class="col-8 bg-dark  text-primary">
                              <a href="/policy#point"><span class="ion-md-help-circle"  aria-hidden="true"></span></a>    
                                  <?php 
                              
                                if ($redeem >= 400 && $redeem <= 650){
                                  echo "Very Good Recommendation";
                                }elseif ($redeem > 650 && $redeem <= 870){
                                  echo "Business Email";
                                }elseif ($redeem > 870 && $redeem <= 1070){
                                  echo "Publication";
                                }elseif ($redeem > 1070 && $redeem <= 1830) {
                                 echo "Single Page Business Blog";
                                }elseif ($redeem > 1830) {
                                 echo "Business Blog";
                                }else{
                                  echo "Can Not Redeem Now";
                                } ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
      </div>