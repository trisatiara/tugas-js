<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'koneksi.php';
    ?>
    
    <h3 style="padding-left:30px;  padding-top:30px; padding-bottom:15px">Tambah Data Customer</h3>

    <form action="proses_tambah.php" method="post" name="form" enctype="multipart/form-data" style="padding-left:30px">
        <label class="form-label">First Name</label>
        <input id="first_name" type="text" onkeyup="checkform()" name="first_name" class="form-control" style="width:98%">
        
        <label class="form-label">Last Name</label>
        <input id="last_name" type="text" onkeyup="checkform()" name="last_name" class="form-control" style="width:98%">
        
        <label class="form-label">Email</label>
        <input id="email" type="text" onkeyup="checkform()" name="email" class="form-control" style="width:98%">
        
        <label class="form-label">Telepon</label>
        <input id="phone" type="text" onkeyup="checkform()" name="phone" class="form-control" style="width:98%">
        
        <label class="form-label">Alamat</label>
        <input id="address" type="text" onkeyup="checkform()" name="address" class="form-control" style="width:98%">
        
        <input id="submit" class="btn btn-primary" disabled="disabled" type="submit" name="submit" value="Simpan" style="margin-top:15px" onclick="alert('Data berhasil ditambahkan!')">    
    </form>

    <script>
        function checkform() {
            var f = document.forms['form'].elements;
            var fieldsMustBeFilled = true;

            for (var i = 0; i < f.length; i++) {
                if (f[i].value.length == 0)
                    fieldsMustBeFilled = false;
            }

            if (fieldsMustBeFilled) {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;
            }
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>