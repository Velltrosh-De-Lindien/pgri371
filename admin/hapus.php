<?php
include '../koneksi.php';

if(isset($_GET['idpengguna'])){
    $delete = mysqli_query($conn, "DELETE FROM pengguna WHERE id = '".$_GET['idpengguna']."' ");
    echo "<script>window.location = 'pengguna.php'</script>";
}

if(isset($_GET['idekskul'])){

    $ekskul = mysqli_query($conn, "SELECT gambar FROM ekskul WHERE id = '".$_GET['idekskul']."' ");

    if(mysqli_num_rows($ekskul) > 0){

        $p = mysqli_fetch_object($ekskul);

        if(file_exists("../uploads/ekskul/".$p->gambar)){

            unlink("../uploads/ekskul/".$p->gambar);

        }
    }

    $delete = mysqli_query($conn, "DELETE FROM ekskul WHERE id = '".$_GET['idekskul']."' ");
    echo "<script>window.location = 'ekskul.php'</script>";
}

if(isset($_GET['idgaleri'])){

    $galeri = mysqli_query($conn, "SELECT foto FROM galeri WHERE id = '".$_GET['idgaleri']."' ");

    if(mysqli_num_rows($galeri) > 0){

        $p = mysqli_fetch_object($galeri);

        if(file_exists("../uploads/galeri/".$p->foto)){

            unlink("../uploads/galeri/".$p->foto);

        }
    }

    $delete = mysqli_query($conn, "DELETE FROM galeri WHERE id = '".$_GET['idgaleri']."' ");
    echo "<script>window.location = 'galeri.php'</script>";
}

if(isset($_GET['idinformasi'])){

    $informasi = mysqli_query($conn, "SELECT gambar FROM informasi WHERE id = '".$_GET['idinformasi']."' ");

    if(mysqli_num_rows($informasi) > 0){

        $p = mysqli_fetch_object($informasi);

        if(file_exists("../uploads/informasi/".$p->gambar)){

            unlink("../uploads/informasi/".$p->gambar);

        }
    }

    $delete = mysqli_query($conn, "DELETE FROM informasi WHERE id = '".$_GET['idinformasi']."' ");
    echo "<script>window.location = 'informasi.php'</script>";
}

    
?>