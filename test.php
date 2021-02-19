<!DOCTYPE html>
<html>
  <head>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <Title >Kinoticketing</Title>
  </head>

  <body>

  <?php 
    $msg = ""; 

    // If upload button is clicked ... 
    if (isset($_POST['upload'])) { 
        echo "button pressed".$_POST['upload'];
/*
      $filename = $_FILES["uploadfile"]["name"]; 
      $tempname = $_FILES["uploadfile"]["tmp_name"];     
      $folder = "img_web/".$filename; 
          
      $db = mysqli_connect($servername, $username, $password, $db_name); 

      // Get all the submitted data from the form 
      $sql = "INSERT INTO Image (filename) VALUES ('$filename')"; 
    
      // Execute query 
      mysqli_query($db, $sql); 
        
      // Now let's move the uploaded image into the folder: image 
      if (move_uploaded_file($tempname, $folder))  { 
          $msg = "Image uploaded successfully"; 
      }else{ 
          $msg = "Failed to upload image"; 
    } */
  } 
  
 //$result_img = mysqli_query($db, $sql_img); 
  ?> 
 <div class= "col-sm-12">

<form method="POST" action="" enctype="multipart/form-data"> 
  <input type="file" name="uploadfile" value=""/>           
  <div> 
    <button type="submit" name="upload">UPLOAD</button> 
  </div> 
</form> 

</div>


</body>
</html>