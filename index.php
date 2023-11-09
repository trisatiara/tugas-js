<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>


</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM customer ORDER BY id ASC");
                ?>

                <h2 style="text-align:center; margin-top:20px"><b>DATA CUSTOMER</b></h2>

                <a class="btn btn-primary" style="margin-bottom:10px" href="tambah.php"> Tambah Data </a><br>

                <table id="data-customer" class="table table-striped table-bordered">
                    <thead>
                        <tr style="text-align:center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        
                        
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data["first_name"]." ".$data["last_name"] ?></td>
                            <td><?php echo $data["email"] ?></td>
                            <td><?php echo $data["phone"] ?></td>
                            <td><?php echo $data["address"] ?></td>
                            <td> <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning" style="padding:2px 12px;"> Edit </a>
                            <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" 
                            class="btn btn-danger" style="padding:2px"> Delete </a> </td>
                        </tr>

                        <?php  $no++; } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
       $(document).ready(function () {
            $('#data-customer').DataTable();
        });
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>