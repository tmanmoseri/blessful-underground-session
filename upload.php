<?php
		require_once("db.php");

		if(isset($_POST['submitform']))
		{
			$dir="upload/";

			$image=$_FILES['uploadfile']['name'];
			$music=$_FILES['uploadmusic']['name'];

			$temp_name=$_FILES['uploadfile']['tmp_name'];
			$tmp_name=$_FILES['uploadmusic']['tmp_name'];

			$date = $_POST['pdate'];
			$fname = $_POST['fname'];
			$content = $_POST['content'];
			$tablename = $_POST['tablename'];

			if($image!="")
			{
				if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

				$fdir= $dir.$image;
				move_uploaded_file($temp_name, $fdir);
			}

			if($music!="")
			{
				if(file_exists($dir.$music))
				{
					$music= time().'_'.$music;
				}

				$sdir= $dir.$music;
				move_uploaded_file($tmp_name, $sdir);
			}

				$query="insert IGNORE into `tablename` (`id`,`file`,`fname`,`content`,`music`,`date`) values 
				     ('','$image','$fname','$content','$music' ,'$date')";
				$mysqli->query($query) or die($mysqli->error());

				echo "File Uploaded Sucessfully ";

				header('location: podcast.php');

		}

?>
