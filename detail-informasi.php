<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
        <?php
            $informasi   = mysqli_query($conn, "SELECT * FROM informasi WHERE id = '".$_GET['id']."' ");

            if(mysqli_num_rows($informasi) == 0){
                echo "<script>window.location = 'index.php'</script>";
            }
        
            $p          = mysqli_fetch_object($informasi);
        ?>
        <h3 class="text-center"><?= $p->judul ?></h3>
        <small>Dibuat pada <?= date('d/m/Y', strtotime($p->created_at)) ?></small>
        <img src="uploads/informasi/<?= $p->gambar ?>" width="100%" style="margin-top:5px" class="image" alt="">
        <?= $p->keterangan ?>
    </div>
</div>

<?php include 'footer.php'; ?>