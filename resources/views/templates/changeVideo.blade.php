<?php
$file = $_GET['video'];
?>
<video id="myVideo" class="thumbnail" buffered="yes" controls>
                    <source src="<?php echo $file ?>" id="link" class="embed-responsive-item" type="video/mp4">
            </video>
<?php
?>
