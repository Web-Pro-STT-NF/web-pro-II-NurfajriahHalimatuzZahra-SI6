<?php
require_once 'libfungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <div class="container card mt-3">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <h4>Form Nilai Siswa</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <form class="form-horizontal" method="POST" action="nilai_siswa.php" class="mt-5 pt-5">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-3 bg-light">
                <p>Develop By Mahasiswa STT NF</p>
            </div>
        </div>
    </div>
    <!-- PHP -->
    <?php
    if(isset($_POST['proses'])){
        $proses= $_POST['proses'];
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        
        $hasil_uts = (int)$nilai_uts * 0.3;
        $hasil_uas = (int)$nilai_uas * 0.35;
        $hasil_tugas = (int)$nilai_tugas * 0.35;
        $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
        echo "<br> $nilai_akhir";
        
        $hasil_ujian = kelulusan($nilai_akhir);
        echo "<br>DINYATAKAN $hasil_ujian <br>";
        
        $hasil_grade = grade($nilai_akhir);
        echo "Grade : $hasil_grade";

        $hasil_predikat = predikat($nilai_akhir);
        echo "<br>Predikat : $hasil_predikat";
    }
    
?>
</body>
</html>