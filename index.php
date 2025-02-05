<?php include 'header.php'; ?>

     <!-- Bagian Banner -->

     <div class="banner" style="background-image: url(uploads/identitas/<?= $d->foto_sekolah ?>)">
        <div class="banner-text">
            <div class="container">
            <h3>Selamat Datang di <?= $d->nama ?></h3>
            <p>Mari bergabung dan jadilah bagian dari komunitas pendidikan yang inspiratif di SMP PGRI 371 Pondok Aren!</p>
            </div>
        </div>
     </div>

     <!-- Bagian Sambutan -->

     <div class="section">
        <div class="container text-center">
            <h3>Sambutan Kepala Sekolah</h3>
            <img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="100px" alt="">
            <h4><?= $d->nama_kepsek ?></h4>
            <p><?= $d->sambutan_kepsek ?></p>
        </div>
     </div>

     <!-- Bagian Ekskul -->

     <div class="section" id="ekskul">
        <div class="container text-center">
            <h3>Ekskul</h3>

            <?php
                $ekskul = mysqli_query($conn, "SELECT * FROM ekskul ORDER BY id DESC");
                if(mysqli_num_rows($ekskul) > 0){
                    while($j = mysqli_fetch_array($ekskul)){
            ?>

            <div class="col-4">
                <a href="detail-ekskul.php?id=<?= $j['id'] ?>" class="thumbnail-link">
                <div class="thumbnail-box">
                    <div class="thumbnail-img" style="background-image: url(uploads/ekskul/<?= $j['gambar'] ?>);">
                        
                    </div>

                    <div class="thumbnail-text">
                    <?= $j['nama'] ?>
                    </div>
                </div>
                </a>
            </div>

            <?php }}else{ ?>

                Tidak ada data

            <?php }?>
          
        </div>
     </div>

     <!-- Bagian Informasi -->

     <div class="section">
        <div class="container text-center">
            <h3>Informasi Terbaru</h3>

            <?php
                $informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
                if(mysqli_num_rows($informasi) > 0){
                    while($p = mysqli_fetch_array($informasi)){
            ?>

            <div class="col-4">
                <a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
                <div class="thumbnail-box">
                    <div class="thumbnail-img" style="background-image: url(uploads/informasi/<?= $p['gambar'] ?>);">
                        
                    </div>

                    <div class="thumbnail-text">
                    <?= substr($p['judul'], 0, 50) ?>
                    </div>
                </div>
                </a>
            </div>

            <?php }}else{ ?>

                Tidak ada data

            <?php }?>
        </div>
     </div>

     <?php include 'footer.php'; ?>