<?php
        $ftp_server = "209.140.30.92";
        $ftp_user_name = "chiefmin";
        $ftp_user_pass = "Gnuplot222";
        $destination_file = "/public_library/";
        $source_file = $_FILES['file']['tmp_name'];
	    $temp_name=basename($_FILES['file']['tmp_name']);
        $img_name=$_POST['imname'];
        //echo $img_name;
        clearstatcache();

// set up basic connection
        $conn_id = ftp_connect($ftp_server);
        ftp_pasv($conn_id, true); 
		
// login with username and password
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// check connection
        if ((!$conn_id) || (!$login_result)) { 
            echo "FTP connection has failed!";
            echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
            exit; 
        } else {
            echo "<br>Connected to $ftp_server, for user $ftp_user_name";
        }

// upload the file
$message="Image exists. Existing image will be updated.";
$exist=file_exists("ftp://chiefmin:Gnuplot222@209.140.30.92/public_library/$img_name.jpeg");
echo "<br>blah$exist";

if($exist){
    echo "<script type='text/javascript'>alert('$message');</script>";
    $upload = ftp_put($conn_id, $destination_file."$img_name.jpeg", $source_file, FTP_BINARY);
}
else
    $upload = ftp_put($conn_id, $destination_file."$img_name.jpeg", $source_file, FTP_BINARY);
// check upload status
if (!$upload) { 
echo "FTP upload has failed!";
} else {
echo "<br>Uploaded $source_file to $ftp_server as $destination_file$img_name.jpeg";

}

// close the FTP stream 
ftp_close($conn_id);
?>