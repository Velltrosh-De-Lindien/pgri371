<?php
include 'header.php'
?>

<?php
    $informasi   = mysqli_query($conn, "SELECT * FROM informasi WHERE id = '".$_GET['id']."' ");

    if(mysqli_num_rows($informasi) == 0){
        echo "<script>window.location = 'informasi.php'</script>";
    }

    $p          = mysqli_fetch_object($informasi);
?>

     <!-- Bagian Content -->
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                   Edit Informasi
                </div>
                <div class="box-body">
                <form action=""  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" placeholder="Judul Informasi" value="<?= $p->judul ?>" class="input-control" required>
                    </div>
                    <div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" id="keterangan" class="input-control" placeholder="Keterangan" ><?= $p->keterangan ?></textarea>
					</div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <img src="../uploads/informasi/<?= $p->gambar ?>" width="200px" class="image">
                        <input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
                        <input type="file" name="gambar" class="input-control" >
                    </div>

                    <a href="informasi.php" class="text-red"><i class="fa fa-left-long"></i> Kembali</a>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-simpan">
                    

                   </form>


                   <?php 
                        if(isset($_POST['submit'])){

                            $judul = addslashes(ucwords($_POST['judul']));
                            $ket 	= addslashes($_POST['keterangan']);
                            $currdate = date('Y-m-d H:i:s');

                            if($_FILES['gambar']['name'] != ''){

                                // echo 'user ganti gambar';

                                $filename   =$_FILES['gambar']['name'];
                                $tmpname    =$_FILES['gambar']['tmp_name'];
                                $filesize   =$_FILES['gambar']['size'];

                                $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                $rename = 'informasi'.time().'.'.$formatfile;

                                $allowtype = array('png', 'jpg', 'jpeg', 'gif');

                                if(!in_array($formatfile, $allowtype)){
                                    echo '<div class="alert alert-error">Format file tidak diizinkan</div>';

                                    return false;
    
                                }elseif($filesize > 5000000){
                                    echo '<div class="alert alert-error">Format file tidak boleh lebih dari 5MB</div>';

                                    return false;
    
                                }else{

                                if(file_exists("../uploads/informasi/".$_POST['gambar2'])){
                                    unlink("../uploads/informasi/".$_POST['gambar2']);
                                }

                                move_uploaded_file($tmpname, "../uploads/informasi/".$rename);

                            }
                            
                            }else{
                                // echo 'user tidak ganti gambar';

                                $rename = $_POST['gambar2'];
                            }

                            $update = mysqli_query($conn, "UPDATE informasi SET
                            judul = '".$judul."',
                            keterangan = '".$ket."',
                            gambar = '".$rename."',
                            updated_at = '".$currdate."'
                            WHERE id = '".$_GET['id']."'
                        ");

        
                        if($update){
                            echo "<script>window.location='informasi.php?success=Edit Data Berhasil'</script>";
                        }else{
                            echo 'gagal edit '.mysqli_error($conn);
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