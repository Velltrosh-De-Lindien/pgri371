<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
       
        <h3 class="text-center">Ekskul </h3>
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

                    <div class="thumbnail-text text-center">
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

<?php include 'footer.php'; ?>