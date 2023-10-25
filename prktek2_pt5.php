<!DOCTYPE html>
<html>
<head>
    <title>Status Pemesanan Tiket</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
            background-color: #acedeb;
        }

        .container {
            background-color:#f496aa;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #acedeb;
        }

        form {
            margin: 20px 0;
        }

        label {
            font-weight: bold;
            color: #acedeb;
        }

        input[type="text"] {
            width: 50%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #acedeb;
            color: #f496aa;
            padding: 10px 20px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            margin: 46px;
        }

        input[type="submit"]:hover {
            background-color: #acedeb;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .result-container {
            background-color: #f496aa;
            border-radius: 5px;
            padding: 10px;
            width: 24%;
            margin-top: 20px;
            color: #acedeb;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Pemesanan Tiket Beautiful Swimming Pool🏊‍♀️𓍢ִ໋🌷͙֒</h2>
    <form method="post">
        <label for="usia">Masukkan Usia Anda:</label>
        <input type="text" style="margin-top: 20px;" name="usia" id="usia">
        <input type="submit" value="Tentukan Status Pemesanan">
    </form>
    </div>

    <center>
    <div class="result-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Terima usia dari formulir
        $usia = isset($_POST['usia']) ? $_POST['usia'] : 0;

        if (is_numeric($usia) && $usia >= 0) {
            // Tentukan harga tiket dan status pemesanan berdasarkan usia
            if ($usia < 1) {
                $harga = 0;
                $status = "Bayi (Gratis)";
            } elseif ($usia <= 12) {
                $harga = 35000;
                $status = "Anak-anak";
            } elseif ($usia <= 55) {
                $harga = 45000;
                $status = "Dewasa";
            } else {
                $harga = 50000;
                $status = "Lansia";
            }

            // Tampilkan hasil harga tiket dan status pemesanan
            echo "<p>Usia Anda: $usia tahun</p>";
            echo "<p>Harga Tiket: $harga</p>";
            echo "<p>Status Pemesanan: $status</p>";
        } else {
            echo "<p>Masukkan usia yang valid.</p>";
        }
    }
    ?>
    </div>
    </center>
</body>
</html>


