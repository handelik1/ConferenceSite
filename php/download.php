<?php
session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        die("Redirecting to login.php");
    }
?>
<?php
	 	 require("connect.php");
		 //zips queried files
		 if($_SESSION['username'] == 'reviewer1')
		 {
			$uploadQuery = mysqli_query($con, "SELECT name, data FROM upload WHERE majorarea = 'Programming Language' ") or die (mysql_error());
			foreach($uploadQuery as $b){
			$files = $b;
			$zipname = '1paper.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			$zip->addFromString($b['name'], $b['data']);			
			$zip->close();
			}

			header('Content-Type: application/zip');
			header('Content-disposition: attachment; filename='.$zipname);

			readfile($zipname);

		 }
		 if($_SESSION['username'] == 'reviewer2')
{
			$uploadQuery = mysqli_query($con, "SELECT name, data FROM upload WHERE majorarea = 'AI' ") or die (mysql_error());
			foreach($uploadQuery as $c){
			$files = $c;
			$zipname = '2paper.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			$zip->addFromString($c['name'], $c['data']);			
			$zip->close();
			}

			header('Content-Type: application/zip');
			header('Content-disposition: attachment; filename='.$zipname);

			readfile($zipname);

		 }
		 if($_SESSION['username'] == 'reviewer3')
{
			$uploadQuery = mysqli_query($con, "SELECT name, data FROM upload WHERE majorarea = 'Image Processing' ") or die (mysql_error());
			foreach($uploadQuery as $d){
			$files = $d;
			$zipname = '3paper.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			$zip->addFromString($d['name'], $d['data']);			
			$zip->close();
			}

			header('Content-Type: application/zip');
			header('Content-disposition: attachment; filename='.$zipname);

			readfile($zipname);

		 }
		 if($_SESSION['username'] == 'reviewer4')
{
			$uploadQuery = mysqli_query($con, "SELECT name, data FROM upload WHERE majorarea = 'Big Data' ") or die (mysql_error());
			foreach($uploadQuery as $e){
			$files = $e;
			$zipname = '4paper.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			$zip->addFromString($e['name'], $e['data']);			
			$zip->close();
			}

			header('Content-Type: application/zip');
			header('Content-disposition: attachment; filename='.$zipname);

			readfile($zipname);

		 }
		 
		 if($_SESSION['username'] == 'reviewer5')
{
			$uploadQuery = mysqli_query($con, "SELECT name, data FROM upload WHERE majorarea = 'Mobile Computing' ") or die (mysql_error());
			foreach($uploadQuery as $f){
			$files = $f;
			$zipname = '5paper.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			$zip->addFromString($f['name'], $f['data']);			
			$zip->close();
			}

			header('Content-Type: application/zip');
			header('Content-disposition: attachment; filename='.$zipname);

			readfile($zipname);

		 }
		 if($_SESSION['username'] == 'reviewer6')
{
			$uploadQuery = mysqli_query($con, "SELECT name, data FROM upload WHERE majorarea = 'HCI' ") or die (mysql_error());
			foreach($uploadQuery as $g){
			$files = $g;
			$zipname = '6paper.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			$zip->addFromString($g['name'], $g['data']);			
			$zip->close();
			}
			header('Content-Type: application/zip');
			header('Content-disposition: attachment; filename='.$zipname);

			readfile($zipname);

		 }

		 mysqli_close($con);

?>