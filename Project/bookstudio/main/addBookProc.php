<?
	include '../connect.php';
	
	$isbn = $_POST['isbn'];
	$isbnmean = $_POST['isbnmean'];
 	$company = $_POST['company'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	
	$upload_dir = './upload/';
	$upload_file = $upload_dir.$_FILES['fileupload']['name'];
	echo $upload_file;
	
	if(move_uploaded_file($FILES['fileupload']['$tmp_name'], $upload_file)){
		echo "upload success";
	}
	else{
		echo"upload fail : ";
		
		switch($_FILES['fileupload']['error']){
			case UPLOAD_ERR_INI_SIZE:
				echo "ini size error";
				break;
			case UPLOAD_ERR_FORM_SIZE:
				echo "upload file size is big";
				break;
			case UPLOAD_ERR_PARTIAL:
				echo "upload partial";
				break;
			case UPLOAD_ERR_NO_FILE:
				echo "no file";
				break;
			case UPLOAD_ERR_NO_TMP_DIR:
				echo "no temp directory";
				break;
		}
		echo "<br>";
		print_r($_FILES);
	}
?>
