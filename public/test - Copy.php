<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css">
<script language="JavaScript" type="text/javascript" >
function saveData( ) {
    var data = document.getElementById("imname").value;
    localStorage.setItem("filename", data); 
}
</script>
    

    <form action="upload.php" enctype="multipart/form-data" method="post">
        <input name="file" type="file" />
        <input onclick="saveData()" name="submit" type="submit"  value="Upload File" />
        <input type="text" name="imname" id="imname" />
        
        
</form>
