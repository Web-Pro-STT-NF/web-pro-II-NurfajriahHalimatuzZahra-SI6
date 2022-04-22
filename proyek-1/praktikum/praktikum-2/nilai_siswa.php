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
            <form action="nilai_siswa.php" class="form-horizontal" method = "POST">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <input id="matkul" name="matkul" placeholder="Masukkan Mata Kuliah" type="text" class="form-control">
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
                    
                    $hasil_uts = $nilai_uts * 0.3;
                    $hasil_uas = $nilai_uas * 0.35;
                    $hasil_tugas = $nilai_tugas * 0.35;
                    $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
                    echo "<br> $nilai_akhir";
                    if( $nilai_akhir > 55){
                        echo "<h3>LULUS</h3>";
                    }else{
                        echo "<h3>TIDAK LULUS</h3>";
                    }
                    $nilai_A = $nilai_akhir >= 85;
                    $nilai_B = $nilai_akhir >= 70;
                    $nilai_C = $nilai_akhir >= 56;
                    $nilai_D = $nilai_akhir >= 36;
                    $nilai_E = $nilai_akhir >= 0;
                    if($nilai_A){
                        echo "Grade : A";
                    }elseif($nilai_B){
                        echo "Grade : B";
                    }elseif($nilai_C){
                        echo "Grade : C";
                    }elseif($nilai_D){
                        echo "Grade : D";
                    }elseif($nilai_E){
                        echo "Grade : E";
                    }else{
                        echo "Grade : I";
                    }

                    switch(true){
                        case ($nilai_A):
                            echo "<br/>Predikat : Sangat Memuaskan";
                            break;
                        case ($nilai_B):
                            echo "<br/>Predikat : Memuaskan";
                            break;
                        case ($nilai_C):
                            echo "<br/>Predikat : Cukup";
                            break;
                        case ($nilai_D):
                            echo "<br/>Predikat : Kurang";
                            break;
                        case ($nilai_E):
                            echo "<br/>Predikat : Sangat Kurang";
                            break;
                        default:
                            echo "<br/>Tidak Ada";
                    }
                }
            ?>
</body>
</html>