<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Gaya CSS untuk mengatur lebar dan perataan input */
        input {
            width: 50px; /* Lebar input ditentukan 50 piksel */
            margin-right: 5px; /* Memberikan jarak antara input */
            text-align: center; /* Pusatkan angka di dalam input */
        }
    </style>
</head>
<body>
    <!-- Judul atau instruksi untuk pengguna -->
    Masukkan Angka

    <!-- Form untuk memasukkan dua set angka -->
    <form method="post">
        <!-- Instruksi untuk input pertama -->
        Input Pertama Maksimal 5 Digit
        <div>
            <!-- Input untuk angka pertama, maksimum 5 digit -->
            <input type="text" name="array1[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array1[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array1[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array1[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array1[]" maxlength="1" placeholder="0" required>
        </div>

        <!-- Instruksi untuk input kedua -->
        Input Kedua Maksimal 5 Digit
        <div>
            <!-- Input untuk angka kedua, maksimum 5 digit -->
            <input type="text" name="array2[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array2[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array2[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array2[]" maxlength="1" placeholder="0" required>
            <input type="text" name="array2[]" maxlength="1" placeholder="0" required>
        </div>

        <!-- Tombol untuk mengirimkan form -->
        <button type="submit">Kirim</button>
    </form>

    <!-- Tempat untuk menampilkan hasil setelah form dikirim -->
    <div id="result">
        <?php
        // Mengecek apakah form telah dikirim menggunakan metode POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil input dari pengguna untuk array pertama
            $number = array_filter($_POST['array1'], function($value) {
                return $value !== '0'; // Menghapus nilai '0' dari array
            });
            // Mengambil input dari pengguna untuk array kedua
            $number1 = array_filter($_POST['array2'], function($value) {
                return $value !== '0'; // Menghapus nilai '0' dari array
            });

            // Menghitung jumlah elemen di setiap array
            $m = count($number); // Menghitung jumlah elemen di array pertama
            $n = count($number1); // Menghitung jumlah elemen di array kedua

            // Menggabungkan angka dari kedua array
            $hasil = implode('', $number) . implode('', $number1); // Menggabungkan elemen-elemen menjadi string

            // Mengubah string hasil menjadi array karakter, menyortir, dan menggabungkannya kembali
            $resultArray = str_split($hasil); // Memecah string menjadi array karakter
            sort($resultArray); // Mengurutkan array karakter
            $short = implode('', $resultArray); // Menggabungkan kembali array yang telah diurutkan menjadi string

            // Menampilkan hasil
            echo "<h3>Hasil:</h3>"; // Menampilkan judul untuk hasil
            echo "Hasil: " . htmlspecialchars($hasil) . "<br>"; // Menampilkan hasil gabungan yang aman dari XSS
            echo "Jumlah dari array pertama (m): " . $m . "<br>"; // Menampilkan jumlah elemen dari array pertama
            echo "Jumlah dari array kedua (n): " . $n . "<br>"; // Menampilkan jumlah elemen dari array kedua
            echo "Hasil Di urutkan : " . htmlspecialchars($short) . "<br>"; // Menampilkan hasil yang telah diurutkan dengan aman
        }
        ?>
    </div> 
</body>
</html>
