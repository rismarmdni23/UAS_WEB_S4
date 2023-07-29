<?php
$nidn = $_GET['nidn'];
mysqli_query($con, "DELETE FROM dosen WHERE nidn='$nidn'");

echo "<meta http-equiv='refresh' content='0; url=?page=show-dosen'>";
