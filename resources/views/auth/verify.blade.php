@extends('layouts.app')

<?php
if (isset(Auth::user()->email)) {
?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifing Your Email Address') }}</div>
                <div class="card-body text-center">
                <img src="/loader.gif">
                <div class="text-center text-danger">
                   {{$id}} did not work, <a href="/emailverifyAgain?email={{Auth::user()->email}}"> Request Token Again.</a> 
                </div>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<?php
}else {
    ?>

<script type="text/javascript">
    window.location.href = '../../register';
</script>

<?php
}


?>

<?php
use App\User;
if(isset($id)){
$date = date("Y-m-d H:i:s");
$check = User::where('remember_token',$id)->get();
if (sizeof($check) > 0) {
User::where('remember_token',$id)->update(['email_verified_at'=>$date]);
?>
<script type="text/javascript">
     window.location.href = '../../register';
</script>
<?php
}
    }
?>

