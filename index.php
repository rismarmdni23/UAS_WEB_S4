<?php include 'template/header.php' ?>

<div class="container mt-4">
    <?php
    include 'connection.php';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'delete-mahasiswa':
                include "mahasiswa/delete.php";
                break;
            case 'edit-mahasiswa':
                include "mahasiswa/edit.php";
                break;
            case 'show-mahasiswa':
                include "mahasiswa/show.php";
                break;
            case 'create-mahasiswa':
                include "mahasiswa/create.php";
                break;
        }
    }
    else {
        include "home.php";
    }
    ?>
    <?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'delete-dosen':
                include "dosen/delete.php";
                break;
            case 'edit-dosen':
                include "dosen/edit.php";
                break;
            case 'show-dosen':
                include "dosen/show.php";
                break;
            case 'create-dosen':
                include "dosen/create.php";
                break;
            case 'profile':
                include "profile.php";
                break;
        }
    }
    ?>
</div>
<?php include 'template/footer.php' ?>
