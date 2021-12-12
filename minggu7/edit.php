<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$nama',nim='$nim',prodi='$prodi',email='$email' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $nim = $user_data['nim'];
    $prodi = $user_data['prodi'];
    $email = $user_data['email'];
}
?>


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

    <div class="container">
        <form class="form-horizontal" action="add.php" method="post" name="update_user">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="nama" class="form-control" name="nama" id="nama" value=<?php echo $nama;?>>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="nim" class="form-control" name="nama" id="nim" value=<?php echo $nim;?>>
        </div>
         <div class="form-group">
            <label for="prodi">Prodi:</label>
            <input type="prodi" class="form-control" name="prodi" id="prodi" value=<?php echo $prodi;?>>
        </div>
         <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value=<?php echo $email;?>>
        </div>
        <div class="form-group">
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        </div>
        <button type="submit" class="btn btn-default" name="submit" value="update" >Edit</button>
        
    </div>
    
</body>
</html>