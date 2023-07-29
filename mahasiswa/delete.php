<?php
$NIM = $_GET['NIM'];
mysqli_query($con, "DELETE FROM mahasiswa WHERE NIM='$NIM'");

echo "<meta http-equiv='refresh' content='0; url=?page=show-mahasiswa'>";
