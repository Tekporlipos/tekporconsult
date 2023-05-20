
    <?php
    use App\spellingBeeUser;
    $id = Auth::user()->id;
  if (isset($id) && isset($_GET['set']) && isset($_GET['level'])) {
     $level =  $_GET['level']+1;
 $setoflevl =  $_GET['set'];

    if (sizeOf(spellingBeeUser::where('user_id',$id)->get()) > 0 ) {
        spellingBeeUser::where('user_id',$id)->update(['level'=>$level]);
}

  }
   
  
    ?>  
   