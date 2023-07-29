<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/DataTables/datatables.min.css">
    <title></title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <div class="card">
        <div class="card-body">
            <a href="?page=create-mahasiswa" class="btn btn-primary mb-4">Tambah Data</a>
            <a href="./mahasiswa/print.php" class="btn btn-success mb-4" target="_blank">Cetak</a>
            <div class="table-responsive p-2">

                <table class="table table-bordered table-hover" id="data-mahasiswa">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connection.php';
                        $query = mysqli_query($con, "SELECT * FROM mahasiswa");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['NIM']; ?></td>
                                <td><?php echo $data['Nama']; ?></td>
                                <td><?php echo $data['Prodi']; ?></td>
                                <td><?php echo $data['Alamat']; ?></td>
                                <td><?php echo $data['Email']; ?></td>
                                <td><?php echo $data['Telepon']; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="?page=edit-mahasiswa&NIM=<?php echo $data['NIM']; ?> ">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="?page=delete-mahasiswa&NIM=<?php echo $data['NIM']; ?>" onclick="return confirm('Anda yakin mau menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="plugins/DataTables/datatables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#data-mahasiswa').DataTable();
                });
            </script>
        </div>
    </div>
</body>

</html>


