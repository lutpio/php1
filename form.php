<?php 
$title = 'Form';

session_start();

include 'partials/head.php';
include 'partials/navbar.php';


if (isset($_POST['submit'])){
    $_SESSION['username'] = $_POST['nama']; 
    $_SESSION['email'] = $_POST['email'];     
    $_SESSION['password'] = $_POST['password'];

    echo 
    "
    <script>
        alert('silahkan login');
        document.location.href = 'login.php';
    </script>
    ";
}

?>
    <div class="container form my-5">
        <div class="card">
            <h5 class="card-header">Formulir Pendaftaran Marching Band Gema Oasis Mansa</h5>
            <form method="post">
            <div class="card-body">            
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name ="nama" id="nama" autocomplete="off" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelamin" class="col-sm-2 col-form-label">Kelamin<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <select name="kelamin" class="form-select">                        
                        <option value="Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" placeholder="11 AGAMA 1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penyakit" class="col-sm-2 col-form-label">Penyakit yang pernah diderita<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="penyakit" required>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Pernah Mengikuti Marching<span id="wajib">*</span></legend>
                    <div class="col-sm-10 mb-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pernahIkutTidak" id="PernahIkut" value="Pernah" checked>
                        <label class="form-check-label" for="PernahIkut">
                        Pernah
                        </label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="pernahIkutTidak" id="tidakIkut" value="Tidak">
                        <label class="form-check-label" for="tidakIkut">
                        Tidak
                        </label>
                    </div>                   
                    </div>
                    <legend class="col-form-label col-sm-2 pt-0">Tertarik Masuk Divisi</legend>
                    <div class="col-sm-10">                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="divisi" id="pit" value="PIT">
                        <label class="form-check-label" for="pit">
                        PIT
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="divisi" id="brass" value="Brass">
                        <label class="form-check-label" for="brass">
                        Brass
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="divisi" id="perkusi" value="Percussion">
                        <label class="form-check-label" for="perkusi">
                        Percussion
                        </label>
                    </div>   
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="divisi" id="cg" value="Color Guard">
                        <label class="form-check-label" for="cg">
                        Color Guard
                        </label>
                    </div>                      
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="alat" class="col-sm-2 col-form-label">Pernah Memakai Alat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="alat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alasan" class="col-sm-2 col-form-label">Alasan Ingin Bergabung<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 80px" id="alasan" required></textarea>                    
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formFile" class="col-sm-2 col-form-label">Foto Profil<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" accept=".jpg,.gif,.png,.jpeg" required>
                    </div>
                </div>
                <hr class="border opacity-50">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Isi untuk keperluan Login" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">password<span id="wajib">*</span></label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Isi untuk keperluan Login" required>
                    </div>
                </div>
                <hr class="border opacity-50">
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                        <label class="form-check-label" for="gridCheck1">
                        Dengan ini siap bergabung dengan Marching Band Gema Oasis Samarinda<span id="wajib">*</span>
                        </label>
                    </div>
                    </div>
                </div>                
            </div>
            <div class="card-footer bg-transparent d-grid gap-2 d-md-flex justify-content-md-end">   
                <button  type="submit" name="submit" class="btn btn-primary">Daftar</button>             
            </div>
            </form>
        </div>
    </div>
<?php 
include 'partials/footer.php';
?>
