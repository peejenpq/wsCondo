<?
//path to directory to scan
$directory = "./../imgRequest/";
 
//get all image files with a .jpg extension.
$images = glob($directory . "*.*");

//print each file name
foreach($images as $image)
{
#echo $image;
echo "<img width='250px' height='250px' src='".$image."'>";
echo "<br />";
}

?>