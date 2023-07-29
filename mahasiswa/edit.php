<?php
include 'connection.php';
$NIM = $_GET['NIM'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
while ($data = mysqli_fetch_array($result)) {
    $nim = $data['NIM'];
    $nama = $data['Nama'];
    $prodi = $data['Prodi'];
    $alamat = $data['Alamat'];
    $telepon = $data['Telepon'];
    $email = $data['Email'];
}
if (isset($_POST['submit'])) {
    $nim = $_POST['NIM'];
    $nama = $_POST['Nama'];
    $prodi = $_POST['Prodi'];
    $alamat = $_POST['Alamat'];
    $telepon = $_POST['Telepon'];
    $email = $_POST['Email'];

    $update = mysqli_query($con, "UPDATE mahasiswa SET NIM='$nim',Nama='$nama',Prodi='$prodi',Alamat='$alamat',Email='$email',Telepon='$telepon' WHERE NIM=$NIM");

    header("location:?page=show-mahasiswa");
    echo "<script>window.location.href = '?page=show-mahasiswa';</script>";
}
?>


<h2>Edit Data Mahasiswa</h2>
<div class="card mt-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3 row">
                <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIM" name="NIM" value="<?php echo $nim; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $nama; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Prodi" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="Prodi">
                        <option value="-" disabled>- pilih jurusan -</option>
                        <option value="TI" <?php if ($prodi == "TI") echo 'selected'; ?>>TI</option>
                        <option value="SI" <?php if ($prodi == "SI") echo 'selected'; ?>>SI</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?php echo $alamat; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="Email" class="form-control" id="Email" name="Email" value="<?php echo $email; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="Telepon" name="Telepon" value="<?php echo $telepon; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-2">
                    <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </div>
            </div>
        </form>
    </div>
</div>