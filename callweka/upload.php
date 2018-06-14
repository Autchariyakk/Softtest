<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select CSV file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<br>
<?php
if(isset($_POST["submit"])) {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "csv" && $imageFileType != "arff") {
    echo "Sorry, only csv or arff files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
 
    $filename = "uploads/".basename( $_FILES["fileToUpload"]["name"]);  
   
	echo $filename;
	// input code data mining model cmd
    $cmd = 'java -cp weka.jar weka.clusterers.SimpleKMeans -N 3 -t '.$filename.' -p 0';
  //$cmd = 'java -cp weka.jar weka.classifiers.trees.J48 -t '.$filename.' -p 0';
	// print output
	exec($cmd, $output1);

	 for ($i = 0; $i< sizeof($output1); $i++)
    {
        trim($output1[$i]);
       echo $output1[$i]."<br>";    
    }

	// end of print
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
?>
</body>
</html>