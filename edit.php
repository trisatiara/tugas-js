<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
    <h3 style="padding-left:30px;  padding-top:30px; padding-bottom:15px">Edit Data Customer</h3>

    <?php
        include 'koneksi.php';

        $customer = mysqli_query($conn,"SELECT * from customer where id='$_GET[id]'");

        while($c = mysqli_fetch_array($customer)){
            $id = $c["id"];
            $first_name = $c["first_name"];
            $last_name = $c["last_name"];
            $email = $c["email"];
            $phone = $c["phone"];
            $address = $c["address"];
        }
    ?>

    <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" style="padding-left:30px">
        
        <label class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" value="<?php echo $first_name ?>" style="width:98%">
            
        <label class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="<?php echo $last_name ?>" style="width:98%">
            
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $email ?>" style="width:98%">
            
        <label class="form-label">Telepon</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>" style="width:98%">
            
        <label class="form-label">Alamat</label>
        <input type="text" name="address" class="form-control" value="<?php echo $address ?>" style="width:98%">
            
        <input class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px" onclick="alert('Data berhasil diubah!')">
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>