<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Minggu 7 - Muhammad Veldyen</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="landing.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Daftar</a>
          </li>
        </ul>
      </nav>


    <div class="container">
        <form class="form-horizontal" action="add.php" method="post" name="form1">
       <div class="form-group">
           <label for="nama">Nama:</label>
           <input type="nama" class="form-control" name="nama" id="nama">
       </div>
       <div class="form-group">
           <label for="nim">NIM:</label>
           <input type="nim" class="form-control" name="nama" id="nim">
       </div>
        <div class="form-group">
           <label for="prodi">Prodi:</label>
           <input type="prodi" class="form-control" name="prodi" id="prodi">
       </div>
        <div class="form-group">
           <label for="email">Email:</label>
           <input type="email" class="form-control" name="email" id="email">
       </div>
       <button type="submit" class="btn btn-default" name="submit" value="add">Submit</button>

   
   </form>
   
   </div>

  
   <?php

   // Check If form submitted, insert form data into users table.
   if(isset($_POST['Submit'])) {
       $nama = $_POST['nama'];
       $nim = $_POST['nim'];
       $prodi = $_POST['prodi'];
       $email = $_POST['email'];
       
       // include database connection file
       include_once("config.php");
               
       // Insert user data into table
       $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(name,nim,prodi,email) VALUES('$nama','$nim','$prodi','$email')");
       
       // Show message when user added
       echo "User added successfully. <a href='index.php'>View Users</a>";
   }
   ?>

</body>
</html>