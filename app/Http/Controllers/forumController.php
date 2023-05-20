<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\User;
use App\uploadfile;
use App\Notification;
include_once 'include/SimpleImage.php';
class forumController extends Controller
{
    //
    public function addQuestion(Request $request){
   $title = $request->title;
    $questioned = $request->question;
    $tag = $request->tag;
    $id = $request->id;
    $username = $request->name;
    $category = $request->category;
    $policy = $request->policy;
    $user_id = $request->User;
    $email = $request->email;
    $attachment = $_FILES['attachment']['name'];
    $attachmented = "";
    $type = $request->type;
    $question = forum::where('title',$title)->get();
    $watermarker = 'https://tekporacademy.tk/watermark.png';

 
if ( isset($policy)) {
	if (strlen($title)  > 10) {
		# code...
		if (strlen($questioned)  > 15) {
			# code...
			if (!empty($category)) {
				# code...
				if (!empty($user_id)) {
					# code...
					if (strlen($tag) > 5) {
						
   if (isset($attachment) && isset($type)) {
    	if ($type == 'picture') {
    		$proSize = $_FILES['attachment']["size"];
          @$tmp_name = $_FILES['attachment']["tmp_name"];
        
          @$filetypeim = explode(".", $attachment);
          @$filetype = $filetypeim[1];
        
          $filetype = strtolower($filetype);
 if ($filetype =="png" || $filetype == "jpg"  || $filetype == "jpeg"  || $filetype == "gif") {
            @$fileEx  = $filetype[1];
            if ($proSize > 3047888) {
                return \redirect('/addQuestion/back?erro=file too big#erro');
            }else{
              @$lname = 'attachment';
          $fileEx = strtolower($fileEx);
          @$filelocation = "attachment/";
          $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$attachment;
          @$desti = $filelocation.$profilename; 
          if (move_uploaded_file($tmp_name, $desti)) {
            try {
                // Create a new SimpleImage object
                $image = new \claviska\SimpleImage();
                 // Magic! ✨
                 $image
                 ->fromFile($desti)                     // load image.jpg
                 ->autoOrient()                              // adjust orientation based on exif data
                 ->resize(717, 500)
                 ->overlay($watermarker, 'bottom right')  // add a watermark image                                     // resize large to 320x200 pixel
                 ->toFile($desti);      // convert to PNG and save a copy to new-image.png
                // And much more! 💪
              } catch(Exception $err) {
                // Handle errors
                echo $err->getMessage();
              }
              $attachmented ='<img id="image" src="../../'.$desti.'" width="100%" height="500px">';
        }else {
            return \redirect('/addQuestion/back?erro=Something went wrong#erro');
        };
        };
          }else {
            return \redirect('/addQuestion/back?erro=image is not valid#erro');
          };

    	}elseif ($type == 'video') {
    				$proSize = $_FILES['attachment']["size"];
          @$tmp_name = $_FILES['attachment']["tmp_name"];
        
          @$filetypeim = explode(".", $attachment);
          @$filetype = $filetypeim[1];
        
          $filetype = strtolower($filetype);
 if ($filetype =="mp4" || $filetype == "webm"  || $filetype == "avi"  || $filetype == "mkv") {
        
            @$fileEx  = $filetype[1];
        
            if ($proSize > 63047888) {
                return \redirect('addQuestion/back?erro=file too big#erro');
            }else{
@$lname = "attachment";
          $fileEx = strtolower($fileEx);
          @$filelocation = "attachment/";
          $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$attachment;
          @$desti = $filelocation.$profilename;
   if (move_uploaded_file($tmp_name, $desti)) {
           
              $attachmented = '<video id="video" src="../../'.$desti.'" width="100%" height="500px" controls="yes"></video>';
        }else {
            return \redirect('/addQuestion/back?erro=Something went wrong#erro');
        };

            }

          }else {
            return \redirect('/addQuestion/back?erro=video is not supported#erro');
          };

    	}elseif ($type == 'URL') {
          $attachmented == '<div style="width="100%" height="500px"">'.$_REQUEST['URL'].'</div>';
    	};
    };
    
$titled =str_replace(" ", "_", $title);
$titleded =  forum::where('title',$titled)->get();
if (sizeOf($titleded) <= 0) {
						$forum = new forum; 
            $forum->user_id  = $user_id;
            $forum->title  = $titled;
            $forum->category = $category;
            $forum->question = $questioned;
            $forum->checked = $attachmented;
             if ($request->anonymous == "on") {
              $forum->Annonomous = 1;
            }
            $forum->tag = $tag;
             $forum->save();
             $User =  User::where('Course',$category)->get();



             foreach ($User as $key => $value) {
               
              if ($value->email == $email) {
                # code...
             }else{
              $to = $value->email;
               error_reporting(-1);
               ini_set('display_errors', 'off');
               set_error_handler("var_dump");
               ini_set("mail.log", "/tmp/mail.log");
               ini_set("mail.add_x_header", TRUE);
               $subject = 'Question Notification';
               $message = "<html>
               <body style='text-align: left'>
                   <h2 style='color:lightskyblue'>TEKPOR ACADEMY =>  ".$value->name."</h2>
                   <p style='font-family:monospace'>
                       ".$username." asked a question we recommend for you. 
                       <br/>
                     <u>".$titled." </u>
                   <br/>
                   <b>".$questioned." </b>
                   <br/>
                   <hr/>
                   <br/>
                   <button class='btn'>
                   <a href='https://tekporacademy.tk/forum/questions/".$titled."'>
                   ANSWER QUESTION
                </a> <span class='badge badge-primary'></span>
           </button>
                    </p>
                    <pre> If you have not create account with tekporacademy,contact our system support for help on how to stop getting this message.</pre>
                    <a href='https://www.tekporacademy.tk/contact'>
                    https://www.tekporacademy.tk/contact
                </a>
                    </body>
                    </html>";
               
               $headers = implode("\r\n", [
               'From: Tekporacademy.tekporaca@gmail.com>',
               'Reply-To: No_Reply@tekporacademy.tk',
               'MIME-Version: 1.0',
               'Content-Type: text/html; charset=ISO-8859-1',
               'X-Mailer: PHP/' . PHP_VERSION ]);
               $result = mail($to, $subject, $message, $headers);
             }
             }
         
         $linker =     str_replace("/", "⚡", $titled);

 $ViewedNotif =  Notification::where('notification',$title)->get();
if (sizeOf($ViewedNotif) <= 0) {
  $viewed = new Notification;
 $viewed->Notification = $title;
  $viewed->link = "forum/questions/".$title;
  $viewed->course = $tag;
  $viewed->Category = $category;
  $viewed->admin = $user_id;
$viewed->save();
}
return \redirect("/QuestionRevew/$linker");
}else {
  $erro = "Question Ready exist#erro";
};

            

					}else{ $erro = "Plase consider adding more tags to aid your solution finding";
}
				}else{ $erro = "policy not accepted";
}
			}else{ $erro = "Select category";
}
		}else{ $erro = "Question too short";
}
	}else{ $erro = "Title too short";
}
	
}else{
	$erro = "Policy not accepted";
}
return \redirect("/addQuestion/$id?erro=$erro&title=$title&question=$questioned&tags=$tag#erro");
}

public function EditaddQuestion(Request $request){
  $title = $request->title;
   $questioned = $request->question;
   $tag = $request->tag;
   $title_old =$request->title_old;
    $id = $request->id;
    $category = $request->category;
    $user_id = $request->User;
    $attachment = @$_FILES['attachment']['name'];
    $attachmented = "";
    $type = @$request->type;
    $remove = @$request->remove;
    $watermarker = 'https://tekporacademy.tk/watermark.png';
	if (strlen($title)  > 7) {
		# code...
		if (strlen($questioned)  > 10) {
			# code...
			if (!empty($category)) {
				# code...
				if (!empty($user_id)) {
					# code...
					if (strlen($tag) > 3) {
						

if (isset($attachment) && isset($type)) {
    	if ($type == 'picture') {
    		$proSize = $_FILES['attachment']["size"];
          @$tmp_name = $_FILES['attachment']["tmp_name"];
        
          @$filetypeim = explode(".", $attachment);
          @$filetype = $filetypeim[1];
        
          $filetype = strtolower($filetype);
 if ($filetype =="png" || $filetype == "jpg"  || $filetype == "jpeg"  || $filetype == "gif") {
            @$fileEx  = $filetype[1];
            if ($proSize > 3047888) {
                return \redirect('/QuestionEdit/'.$id.'?erro=file too big');
            }else{
              @$lname = 'attachment';
          $fileEx = strtolower($fileEx);
          @$filelocation = "attachment/";
          $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$attachment;
          @$desti = $filelocation.$profilename; 
          if (move_uploaded_file($tmp_name, $desti)) {
            try {
                // Create a new SimpleImage object
                $image = new \claviska\SimpleImage();
                 // Magic! ✨
                 $image
                 ->fromFile($desti)                     // load image.jpg
                 ->autoOrient()                              // adjust orientation based on exif data
                 ->resize(717, 500)
                 ->overlay($watermarker, 'bottom right')  // add a watermark image                                     // resize large to 320x200 pixel
                 ->toFile($desti);      // convert to PNG and save a copy to new-image.png
                // And much more! 💪
              } catch(Exception $err) {
                // Handle errors
                echo $err->getMessage();
              }
              $attachmented ='<img id="image" src="../../'.$desti.'" width="100%" height="500px">';
        }else {
            return \redirect('/QuestionEdit/'.$id.'?erro=Something went wrong');
        };
        };
          }else {
            return \redirect('/QuestionEdit/'.$id.'?erro=image is not valid');
          };

    	}elseif ($type == 'video') {
    				$proSize = $_FILES['attachment']["size"];
          @$tmp_name = $_FILES['attachment']["tmp_name"];
        
          @$filetypeim = explode(".", $attachment);
          @$filetype = $filetypeim[1];
        
          $filetype = strtolower($filetype);
 if ($filetype =="mp4" || $filetype == "webm"  || $filetype == "avi"  || $filetype == "mkv") {
        
            @$fileEx  = $filetype[1];
        
            if ($proSize > 63047888) {
                return \redirect('QuestionEdit/'.$id.'?erro=file too big');
            }else{
@$lname = "attachment";
          $fileEx = strtolower($fileEx);
          @$filelocation = "attachment/";
          $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$attachment;
          @$desti = $filelocation.$profilename;
   if (move_uploaded_file($tmp_name, $desti)) {
           
              $attachmented = '<video id="video" src="../../'.$desti.'" width="100%" height="500px" controls="yes"></video>';
        }else {
            return \redirect('/QuestionEdit/'.$id.'?erro=Something went wrong');
        };

            }

          }else {
            return \redirect('/QuestionEdit/'.$id.'?erro=video_is_not_supported');
          };

    	}elseif ($type == 'URL') {
        
          $attachmented == '<div style="width="100%" height="500px"">'.$_REQUEST['URL'].'</div>';
    
    	}
    };
    if ($remove == "remove") {
    		$attachmented = "";
    	};




      if ($request->anonymous == "on") {
        $Annonomous = 1;
      }else{
        $Annonomous = 0;
      }

						forum::where('id',$id)->where('user_id',$user_id)->update(['title'=>str_replace(" ", "_", $title),'checked'=>$attachmented,'category'=>$category,'question'=>$questioned,'tag'=>$tag,'Annonomous'=>$Annonomous]);


Notification::where('notification',$title_old)->where('admin',$user_id)->update(['Notification'=>$title,'link'=>"forum/questions/".$title]);
$title = str_replace(" ", "_", $title);
$linker =     str_replace("/", "⚡", $title);
    return \redirect("/QuestionRevew/$linker");

					}else{ $erro = "Plase_consider_adding_more_tags_to_aid_your_solution_finding";
}
				}else{ $erro = "policy_not_accepted";
}
			}else{ $erro = "Select_category";
}
		}else{ $erro = "Question_too_short";
}
	}else{ $erro = "Title_too_short";
}
 return \redirect("/QuestionEdit/$id?erro=$erro&title=$title&$questioned=$questioned&$tag=$tag");

}



public function uploadfile(Request $request){
   
  $attachment = $_FILES['file']['name'];
  $proSize = $_FILES['file']["size"];
  $tmp_name = $_FILES['file']["tmp_name"];
  $filetypeim = explode(".", $attachment);
  @$filetype = $filetypeim[1];

  $filetype = strtolower($filetype);
if ($filetype =="pdf") {
    @$fileEx  = $filetype[1];
    if ($proSize > 20047888) {
        return \redirect('uploadfile?erro=File size too big#erro');
    }else{
  $fileEx = strtolower($fileEx);
  @$filelocation = "newUpload/";
  $profilename =time()."-".rand(100, 999)."-". date("d-m-Y-H-i-s")."-".$attachment;
  @$desti = $filelocation.$profilename; 
  $uploadfiled = new uploadfile();
  $uploadfiled->name = $request['name'];
  $uploadfiled->email = $request['email'];
  $uploadfiled->description = $request['description'];
  $uploadfiled->filename = $desti;
  $uploadfiled->save();
  if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    if (move_uploaded_file($tmp_name, $desti)) {
      
      return \redirect('/uploadfile?success=file upload successful: Thank you for choosing to support TekporAcademy. We really appreciate.#erro');
    }else {
      return \redirect('/uploadfile?erro=Something went wrong#erro');
    };
  }
    
      }
    
    }else {
      return \redirect('/uploadfile?erro=file is not supported#erro');
    };


}

}
