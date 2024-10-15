<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
     <!-- Edit CSS -->
    <link href="style.css" rel="stylesheet">

    <title>Form Bootstrap</title>
  </head>
  <body>
<div class="global-container"> 
    <div class="form-login">
        </div class="card-body">
            <h1 class="card-title text-center">LOGIN</h1>
        <div class="card-text">
            <form action="action.php" method="POST"> 
                <div class="mb-3">
                  <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputNama" name="nama_lengkap" id ="nama_lengkap">
                <div class="mb-3">
                    <label for="exampleTempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleTempatLahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" id = "tempat_lahir">
                </div>
                <div class="mb-3">
                    <label for="exampleTanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleTanggalLahir" name="tanggal_lahir" id ="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                <div>
                    <input type="radio" id="lakiLaki" name="jenisKelamin" value="Laki-laki">
                    <label for="lakiLaki">Laki-laki</label>
                </div>
                <div>
                    <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
                <div class="mb-3">
                    <label for="exampleAlamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleAlamat" rows="3" placeholder="Masukkan Alamat" name="alamat" id ="alamat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNoHP" class="form-label">No HP</label>
                    <input type="number" class="form-control" id="exampleInputNoHP" name="no_hp" id="no_hp">     
                <div class="mb-3">
                    <label for="exampleInputProdi" class="form-label">Prodi</label>
                    <input type="text" class="form-control" id="exampleInputProdi" name="prodi" id="prodi">
                    </div>                       
                <div class="mb-3">
                    <label for="exampleInputFakultas" class="form-label">Fakultas</label>
                    <input type="text" class="form-control" id="exampleInputFakultas" name="fakultas" id="fakultas">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPesanKesan" class="form-label">Pesan & Kesan</label>
                    <input type="text" class="form-control" id="exampleInputPesanKesan" name="pesan_kesan" id="pesan_kesan">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div> 
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>