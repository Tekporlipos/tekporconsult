<i id="asymmetrik">
  
    <?php
    use App\spellingBeeS1;
    use App\spellingBeeS2;
    use App\spellingBeeS3;
  
  
  
   $stage1=  spellingBeeS1::all();
   echo json_encode($stage1);
   echo("<br/>");
   echo  $stage2 = spellingBeeS2::all();
   echo("<br/>");
   echo $stage3 = spellingBeeS3::all();
  
    ?>  
    <script>
 var stage1 = '<?php echo json_encode($stage1); ?>';
       var stage1_object = JSON.parse(stage1);
       console.log("stage1_object");
       console.log(stage1_object);

         var stage2 = '<?php echo json_encode($stage2); ?>';
       var stage2_object = JSON.parse(stage2);
       console.log("stage2_object");
       console.log(stage2_object);

       var stage3 = '<?php echo json_encode($stage3); ?>';
       var stage3_object = JSON.parse(stage3);
       console.log("stage3_object");
       console.log(stage3_object);
       
    </script>
    