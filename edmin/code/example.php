<html>
<body>
<form method="post" enctype="multipart/form-data">
Choose file to upload: <input type="file" name="up">
<input type="submit" name="sb" value="Upload">
</form>
<?php
$c=mysql_connect('localhost','root','');
if($c)
{
mysql_select_db("lensart",$c);
if(isset($_POST["sb"]))
{
$ext = array("txt", "doc", "docx", "pdf","xlsx","png","jpeg","jpg");
$temp = explode(".", $_FILES["up"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up"]["name"]))
{
echo "File already exists!!! ";
}
else
{
echo "<b>Uploaded File Information</b><br>";
echo "Uploade File is: " . $_FILES["up"]["name"] . "<br>";
echo "file Type is: " . $_FILES["up"]["type"] . "<br>";
echo "file Size is: " . ($_FILES["up"]["size"] / 1024) . " kB<br>";
move_uploaded_file($_FILES["up"]["tmp_name"], "upload/" . $_FILES["up"]["name"]);
echo "Stored in: " . "upload/" . $_FILES["up"]["name"];
$a=$_FILES["up"]["name"];
$ins="update wedding SET pname=('$a') where id=1";
if(mysql_query($ins,$c))
{
echo "<br><br><b>File is uploaded successfully</b> ";
}
else
{
echo mysql_error();
}
}
}
else
{
echo "Invalid file!!! Please Select Valid File";
}
}
mysql_close($c);
}
?>
</body>
</html>