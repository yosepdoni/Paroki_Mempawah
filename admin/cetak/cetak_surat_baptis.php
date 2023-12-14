<!DOCTYPE html>
<html>
<head>
    <style>
body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .frame {
            position: relative;
            width: 900px;
            height: 700px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .content {
            text-align: center;
            z-index: 1;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.5;
            z-index: 0;
        }

        .bird-image {
            width: 50px; 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-250%, -50%);
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
            color: #555;
        }

         @media print {

/* menghilangkan header dan footer cetakan */
@page {
    margin: 0;
    size: auto;
    -webkit-print-color-adjust: exact;
}

body {
    margin: 0.5cm;
}

/* menghilangkan teks file:///C:/Users/MSI PC1/Desktop/index.htm */
@page :left {
    content: "";
}

@page :right {
    content: "";
}

@page :first {
    content: "";
}
}
    </style>
    <title>Data untuk Cetak Surat Baptis</title>
</head>

<?php
$servername = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'db_baptis';

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    die('Connection failed: ' . mysqli_connect_error());
}

$id_user = isset($_GET['id_user']) ? $_GET['id_user'] : null;
$pembaptis = isset($_GET['pembaptis']) ? $_GET['pembaptis'] : null;
$nama_ayah = isset($_GET['nama_ayah']) ? $_GET['nama_ayah'] : null;
$nama_ibu = isset($_GET['nama_ibu']) ? $_GET['nama_ibu'] : null;
$wali_baptis = isset($_GET['wali_baptis']) ? $_GET['wali_baptis'] : null;

$query = "(SELECT id_user, nama, tempat_lahir, tgl_lahir, tgl_baptis, NULL as nama_ayah, NULL as nama_ibu FROM baptis_dewasa WHERE id_user = $id_user)
          UNION
          (SELECT id_user, nama, tempat_lahir, tgl_lahir, tgl_baptis, nama_ayah, nama_ibu FROM baptis_bayi WHERE id_user = $id_user)";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($koneksi));
}
?>

<body>  
<div class="frame">
        <img class="background-image" src="bingkai.png" alt="Bingkai">
        <div class="content">
            <?php
        while ($row = mysqli_fetch_assoc($result)) : ?>
            <h1>Surat Baptis Katolik</h1>

            <p>
                Yang bertanda tangan di bawah ini menyatakan bahwa:
            </p>

            <p>
                Nama: <span><?= $row['nama']; ?> <img class="bird-image" src="merpati.png" alt="Merpati"></span>
            </p>

            <p>
                Tempat dan Tanggal Lahir: <?= $row['tempat_lahir']; ?>, <?php echo date('d F Y', strtotime($row['tgl_lahir'])); ?>
            </p>

            <p>
                Orang Tua:<br>
                
                Ayah:  <?= $nama_ayah; ?> <?= $row['nama_ayah']; ?><br>
                Ibu:  <?= $nama_ibu; ?> <?= $row['nama_ibu']; ?><br>
                
            </p>            
            

            <p>
                Telah menerima Sakramen Baptis dalam Gereja Katolik <br>
                pada tanggal <?= $row['tgl_baptis'];?> <br>
                 di Gereja St Fransiskus Xaverius Mempawah.
            </p>

            <p>
                Disaksikan oleh: <br>
                Pastor: <?= $pembaptis; ?> <br>
                Wali Baptis:  <?= $wali_baptis; ?> <br>
                
            </p>

            <p>
                [Tanda Tangan Pastor dan Cap Gereja]
            </p>
            <p style="text-align: right;">
    Mempawah, <span id="tanggal"></span>
</p>
<?php endwhile; ?>

        </div>
    </div>
    <script>
               var dt = new Date();
var day = ('0' + dt.getDate()).slice(-2);
var month = ('0' + (dt.getMonth() + 1)).slice(-2);
var year = dt.getFullYear();
var formattedDate = day + '-' + month + '-' + year;
document.getElementById("tanggal").innerHTML = formattedDate;



        // window.print();
    </script>
</body>
</html>
