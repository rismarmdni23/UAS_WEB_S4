<?php


if (isset($_POST['submit'])) {

    $nidn     = $_POST['nidn'];
    $nama    = $_POST['nama'];
    $semester   = $_POST['semester'];
    $alamat  = $_POST['alamat'];
    $email   = $_POST['email'];
    $telepon = $_POST['telepon'];

    $result = mysqli_query($con, "INSERT INTO dosen(nidn,Nama_Lengkap,Semester,Alamat,Email,telepon)VALUES('$nidn','$nama','$semester','$alamat','$email','$telepon')");

    echo $nidn . '<br>';
    echo $nama . '<br>';
    echo $semester . '<br>';
    echo $alamat . '<br>';
    echo $email . '<br>';
    echo $telepon . '<br>';
    header("location:?page=show-dosen");
}
?>

<h2>Tambah Data Dosen</h2>
<div class="card mt-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nidn" name="nidn" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prodi" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="semester">
                        <option value="">- pilih ngajar disemester -</option>
                        <option value="1">1</option>
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="telepon" name="telepon" required>
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