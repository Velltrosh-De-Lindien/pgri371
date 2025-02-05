<?php
include 'header.php'
?>

     <!-- Bagian Content -->
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                   Tambah Galeri
                </div>
                <div class="box-body">
                   <form action=""  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" placeholder="Keterangan" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="input-control" required>
                    </div>

                    <a href="galeri.php" class="text-red"><i class="fa fa-left-long"></i> Kembali</a>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-simpan">
                    

                   </form>

                   <?php 
                        if(isset($_POST['submit'])){

                            // print_r($_FILES['gambar']);

                            $ket = addslashes(ucwords($_POST['keterangan']));

                            $filename   =$_FILES['gambar']['name'];
                            $tmpname    =$_FILES['gambar']['tmp_name'];
                            $filesize   =$_FILES['gambar']['size'];

                            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                            $rename = 'galeri'.time().'.'.$formatfile;

                            $allowtype = array('png', 'jpg', 'jpeg', 'gif');

                            if(!in_array($formatfile, $allowtype)){
                                echo '<div class="alert alert-error">Format file tidak diizinkan</div>';

                            }elseif($filesize > 5000000){
                                echo '<div class="alert alert-error">Format file tidak boleh lebih dari 5MB</div>';

                            }else{
                                move_uploaded_file($tmpname, "../uploads/galeri/".$rename);

                                $simpan = mysqli_query($conn, "INSERT INTO galeri VALUES (
                                    null,
                                    '".$rename."',
                                    '".$ket."',
                                    null,
                                    null
                                )");
    
                                if($simpan){
                                    echo '<div class="alert alert-success">Berhasil Simpan</div>';
                                }else {
                                    echo 'Gagal Simpan'.mysqli_error($conn);
                                }
                            }
                            
                            }

                            
                   
                   ?>
                   
                </div>
            </div>
        </div>
    </div>

<?php 
include 'footer.php'
?>