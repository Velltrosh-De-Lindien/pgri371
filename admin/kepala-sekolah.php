<?php
include 'header.php'
?>


     <!-- Bagian Content -->
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                   Kepala Sekolah
                </div>
                <div class="box-body">
                <?php
                        if(isset($_GET['success'])){
                            echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                        }
                    ?>
                <form action=""  method="POST" enctype="multipart/form-data">
                   
                    <div class="form-group">
						<label>Nama Kepala Sekolah</label>
						<input type="text" name="nama" class="input-control" placeholder="Nama Kepala Sekolah" value="<?= $d->nama_kepsek ?>" required></input>
					</div>               
                    <div class="form-group">
						<label>Sambutan Sekolah</label>
						<textarea name="sambutan" id="keterangan" class="input-control" placeholder="Sambutan Kepala Sekolah"><?= $d->sambutan_kepsek ?></textarea>
					</div>               

                    <div class="form-group">
                        <label for="">Foto Kepala Sekolah</label>
                        <img src="../uploads/identitas/<?= $d->foto_kepsek ?>" width="200px" class="image">
                        <input type="hidden" name="foto_lama" value="<?= $d->foto_kepsek ?>">
                        <input type="file" name="foto_baru" class="input-control" >
                    </div>
                  
                    <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-simpan">
                    

                   </form>


                   <?php 
                        if(isset($_POST['submit'])){

                            $nama = addslashes(ucwords($_POST['nama']));
                            $sambutan 	= addslashes($_POST['sambutan']);
                            $currdate = date('Y-m-d H:i:s');

                            // Menampung dan Validasi Data Foto Sekolah
                            if($_FILES['foto_baru']['name'] != ''){


                                $filename  =$_FILES['foto_baru']['name'];
                                $tmpname   =$_FILES['foto_baru']['tmp_name'];
                                $filesize  =$_FILES['foto_baru']['size'];

                                $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                $rename    = 'kepsek'.time().'.'.$formatfile;

                                $allowtype = array('png', 'jpg', 'jpeg', 'gif');

                                if(!in_array($formatfile, $allowtype)){
                                    echo '<div class="alert alert-error">Format file foto kepala sekolah tidak diizinkan</div>';

                                    return false;
    
                                }elseif($filesize > 5000000){
                                    echo '<div class="alert alert-error">Format file foto kepala sekolah tidak boleh lebih dari 1MB</div>';

                                    return false;
    
                                }else{

                                if(file_exists("../uploads/identitas".$_POST['foto_lama'])){
                                    unlink("../uploads/identitas".$_POST['foto_lama']);
                                }

                                move_uploaded_file($tmpname, "../uploads/identitas/".$rename );

                            }
                            
                            }else{
                                $rename = $_POST['foto_lama'];
                            }

                           
                            $update = mysqli_query($conn, "UPDATE pengaturan SET
                            nama_kepsek = '".$nama."',
                            sambutan_kepsek = '".$sambutan."',
                            foto_kepsek = '".$rename."',
                            updated_at = '".$currdate."'
                            WHERE id = '".$d->id."'
                        ");

        
                        if($update){
                            echo "<script>window.location='kepala-sekolah.php?success=Edit Data Berhasil'</script>";
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