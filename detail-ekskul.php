<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
        <?php
            $ekskul   = mysqli_query($conn, "SELECT * FROM ekskul WHERE id = '".$_GET['id']."' ");

            if(mysqli_num_rows($ekskul) == 0){
                echo "<script>window.location = 'index.php'</script>";
            }

            $p          = mysqli_fetch_object($ekskul);
        ?>
        <h3 class="text-center"><?= $p->nama ?></h3>
        <img src="uploads/ekskul/<?= $p->gambar ?>" width="100%" class="image" alt="">
        <?= $p->keterangan ?>
    </div>
</div>

<?php include 'footer.php'; ?>