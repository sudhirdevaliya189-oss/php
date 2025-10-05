<?php
 // Check if file was uploaded without errors
 if(isset($_POST["submit"]))
 {
    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".basename($_FILES["photo"]["name"])))
    {
        echo "Your file was uploaded successfully.";
    }
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File Upload Form</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <!--multipart/form-data ensures that form data is going to be encoded as MIME data-->
            <h2>Upload File</h2>
            <label for="fileSelect">Select Image:</label>
            <input type="file" name="photo" >
            <input type="submit" name="submit" value="Upload">
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
        ?>
        <img src="<?php echo "upload/".basename($_FILES["photo"]["name"]); ?>" height="500px" width="500px" />
        <?php
            }
        ?>
    </body>
</html