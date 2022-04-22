<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>DATA MAHASISWA</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <table class="table text-center table-bordered table-light table-striped table-hover w-100 m-auto mt-4 mb-3">
                        <thead>
                            <tr>
                                <th scope="col">No</i></th>
                                <th scope="col">No Account</i></th>
                                <th scope="col">Pemilik</i></th>
                                <th scope="col">Saldo</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "class_BankAccount.php";
                            $pelanggan1 = new BankAccount('C001', 6000000, 'Ahmad');
                            $pelanggan2 = new BankAccount('C002', 5350000, 'Budi');
                            $pelanggan3 = new BankAccount('C003', 2500000, 'Kurniawan');
                            $arr1 = [$pelanggan1, $pelanggan2, $pelanggan3];

                            $nomor = 1;
                            foreach ($arr1 as $bank) {
                                echo '<tr><td>' . $nomor . '</td>';
                                echo '<td>' . $bank->nomor . '</td>';
                                echo '<td>' . $bank->costumer . '</td>';
                                echo '<td>' . number_format($bank->saldo, 0, ',', '.') . '</td></tr>';
                                $nomor++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <?php
                // require_once "class_AccountBank.php";
                $pelanggan1->transfer($pelanggan3, 1500000);
                $pelanggan1->transfer($pelanggan2, 500000);
                echo "<b>Sesudah Transfer</b>";
                $pelanggan1->cetak();
                echo "<br><br>";
                $pelanggan2->cetak();
                echo "<br><br>";
                $pelanggan3->cetak();
                echo "<br><br>";
                echo "<b>Sesudah Ditarik / withdraw</b>";
                $pelanggan2->withdraw(2500000);
                $pelanggan2->cetak();
                ?>
            </div>
        </div>
    </div>
</body>

</html>