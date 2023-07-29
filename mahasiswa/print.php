<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Mahasiswa</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
            border-color: #000;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1 align="center">Laporan Data Mahasiswa</h1>
    <table border="1" cellpadding="4">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Program Studi</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connection.php';
            $query = mysqli_query($con, "SELECT * FROM mahasiswa");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td align="center" width="10%"><?php echo $data['NIM']; ?></td>
                    <td width="20%"><?php echo $data['Nama']; ?></td>
                    <td align="center" width="10%"><?php echo $data['Prodi']; ?></td>
                    <td width="30%"><?php echo $data['Alamat']; ?></td>
                    <td width="13%"><?php echo $data['Email']; ?></td>
                    <td align="center" width="12%"><?php echo $data['Telepon']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>