<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
       
        <h3 class="text-center">Tentang Sekolah </h3>
        <img src="uploads/identitas/<?= $d->foto_sekolah ?>" width="100%" class="image" alt="">
        <div class="text-center">
            <?= $d->tentang_sekolah ?>  </div>
    </div>
</div>

<?php include 'footer.php'; ?>