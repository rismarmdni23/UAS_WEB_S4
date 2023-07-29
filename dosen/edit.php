<?php
include 'connection.php';
$nidn = $_GET['nidn'];
$result = mysqli_query($con, "SELECT * FROM dosen WHERE nidn=$nidn");
while ($data = mysqli_fetch_array($result)) {
    $nidn = $data['nidn'];
    $nama = $data['Nama_Lengkap'];
    $semester = $data['Semester'];
    $alamat = $data['Alamat'];
    $telepon = $data['Telepon'];
    $email = $data['Email'];
}
if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['Nama_Lengkap'];
    $semester = $_POST['Semester'];
    $alamat = $_POST['Alamat'];
    $telepon = $_POST['Telepon'];
    $email = $_POST['Email'];

    $update = mysqli_query($con, "UPDATE dosen SET nidn='$nidn',Nama_Lengkap='$nama',Semester='$semester',Alamat='$alamat',Email='$email',Telepon='$telepon' WHERE nidn=$nidn");

    header("location:?page=show-dosen");
    echo "<script>window.location.href = '?page=show-dosen';</script>";
}
?>


<h2>Edit Data Dosen</h2>
<div class="card mt-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nidn" name="nidn" value="<?php echo $nidn; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama_Lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama_Lengkap" name="Nama_Lengkap" value="<?php echo $nama; ?>" required>
                </div>
            </div>
            <div class="mb-3 row"> 
                <label for="Semester" class="col-sm-2 col-form-label">Semester</label> 
                <div class="col-sm-10"> 
                    <select class="form-select" aria-label="Default select example" name="Semester"> 
                        <option value="-" disabled>- pilih ngajar disemester -</option> 
                        <option value="1" <?php if ($semester == "1") echo 'selected'; ?>>1</option> 
                        <option value="3" <?php if ($semester == "3") echo 'selected'; ?>>3</option> 
                        <option value="5" <?php if ($semester == "5") echo 'selected'; ?>>5</option> 
                        <option value="7" <?php if ($semester == "7") echo 'selected'; ?>>7</option> 
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
                    <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $email; ?>" required>
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