<?php

// function url(){
//     return sprintf(
//       "%s://%s",
//       isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
//       $_SERVER['SERVER_NAME']
//     );
//   }
  
//   echo url();exit;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_POST)) {
        if(isset($_POST["enrolment_id"]) && !empty($_POST["enrolment_id"]) && isset($_POST["dob"]) && !empty($_POST["dob"])) {
            if( $_POST["enrolment_id"] == "20200603" && $_POST["dob"] == "2003-03-17" ) {
                // Urvashi Bhola
                $file = "http://core2creations.com/certificates/".$_POST["enrolment_id"].".pdf";
                $newFile = time().".pdf";

                $quoted = sprintf('"%s"', addcslashes(basename($file), '"\\'));
                $size   = filesize($file);

                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . $quoted); 
                header('Content-Transfer-Encoding: binary');
                header('Connection: Keep-Alive');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Pragma: public');
                header('Content-Length: ' . $size);
                exit;
            }


        }else {
            $errorCode = 404;
        }

    }

}

header("Location:/result.php?errorcode=".$errorCode);
exit;



?>