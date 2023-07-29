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
    <h2>Data Dosen</h2>
    <div class="card">
        <div class="card-body">
            <a href="?page=create-dosen" class="btn btn-primary mb-4">Tambah Data</a>
            <a href="./dosen/print.php" class="btn btn-success mb-4" target="_blank">Cetak</a>
            <div class="table-responsive p-2">

                <table class="table table-bordered table-hover" id="data-dosen">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connection.php';
                        $query = mysqli_query($con, "SELECT * FROM dosen");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['nidn']; ?></td>
                                <td><?php echo $data['Nama_Lengkap']; ?></td>
                                <td><?php echo $data['Semester']; ?></td>
                                <td><?php echo $data['Alamat']; ?></td>
                                <td><?php echo $data['Email']; ?></td>
                                <td><?php echo $data['Telepon']; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="?page=edit-dosen&nidn=<?php echo $data['nidn']; ?> ">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="?page=delete-dosen&nidn=<?php echo $data['nidn']; ?>" onclick="return confirm('Anda yakin mau menghapus data ini?')">Hapus</a>
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
                    $('#data-dosen').DataTable();
                });
            </script>
        </div>
    </div>
</body>

</html>