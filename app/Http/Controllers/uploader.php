<?php

namespace App\Http\Controllers;
require 'include/SimpleImage.php';
use Illuminate\Http\Request;
use App\admin;
class uploader extends Controller
{

    public function uploaded($id){
    
        $blognames =  admin::where('user_id',$id)->get();
        foreach($blognames as $value){
             $lname = $value->name;
        }
    
        $profile = $_FILES['uploadFile']['name'];
    
        if (isset($profile) && !empty($profile)) {
        
          
          $proSize = $_FILES['uploadFile']["size"];
          @$tmp_name = $_FILES['uploadFile']["tmp_name"];
        
          @$filetypeim = explode(".", $profile);
          @$filetype = $filetypeim[1];
        
          $filetype = strtolower($filetype);
        if ($filetype =="png" || $filetype == "jpg"  || $filetype == "jpeg"  || $filetype == "gif") {
        
            @$fileEx  = $filetype[1];
        
            if ($proSize > 2815888) {
                return \redirect('/accounts_about?erro=file too big');
            }else{
              @$lname = strtolower($lname);
          $fileEx = strtolower($fileEx);
          @$filelocation = "profile/";
          $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$profile;
          @$desti = $filelocation.$profilename; 
          if (move_uploaded_file($tmp_name, $desti)) {
        
            admin::where('user_id',$id)->update(['profile'=>$desti]);
            try {
                // Create a new SimpleImage object
                $image = new \claviska\SimpleImage();
          
                 // Magic! ✨
                 $image
                 ->fromFile($desti)                     // load image.jpg
                 ->autoOrient()                              // adjust orientation based on exif data
                 ->resize(717, 800)                          // resize large to 320x200 pixel
                 ->toFile($desti);      // convert to PNG and save a copy to new-image.png
                // And much more! 💪
              } catch(Exception $err) {
                // Handle errors
                echo $err->getMessage();
              }
            return \redirect('/accounts_about#showw');
        }else {
            return \redirect('/accounts_about?erro=Something went wrong');
        };
        };
          }else {
            return \redirect('/accounts_about?erro=image is not valid');
          };
        }
        return \redirect('/accounts_about#showw');       
    }




  
    //
}
