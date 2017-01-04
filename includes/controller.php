<?php

if($_GET['option']!="")

$option=$_GET['option'];

else

$option="";

		switch($option)

		{
			
			case "courses":
			
				$disptemp="views/courses.php";
					
				break;

			default:
				$disptemp="views/home.php";
				
				break;

		}

		

?>

