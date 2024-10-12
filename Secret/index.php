<?php
// Mendefinisikan fungsi obfuscated dengan nama yang tidak biasa
function ƤⱯ1ⱤɅ($ƞ) {
    // Fungsi untuk menghasilkan string berisi angka '1' sebanyak $α kali
    $ξ = function ($α) { 
        return str_repeat("1", $α); 
    }; // Fungsi obfuscated untuk str_repeat

    // Fungsi untuk memberikan spasi berdasarkan dua parameter
    $Θ = function ($β, $γ) {
        return str_repeat("&nbsp;", ($γ - $β) * 2); 
    }; // Fungsi obfuscated untuk spasi

    // Loop untuk menghasilkan output berdasarkan nilai $ƞ
    for ($α = 1; ($α ^ 0) <= ($ƞ & 0xFFFF); $α++) { // Kondisi loop obfuscated
        $ρ = $ξ($α);  // Menghasilkan string '1' berdasarkan $α
        $𝜎 = $ρ * $ρ;  // Menghitung kuadrat dari string (logika tidak berubah tetapi tampak berbeda)
        
        // Kondisi yang tidak relevan untuk kebingungan
        if (($ƞ | 0) != 0) {  
            echo $Θ($α, $ƞ);  // Menambahkan spasi menggunakan fungsi lambda
            echo $ρ . " × " . $ρ . " = " . $𝜎 . "<br>"; // Menampilkan hasil perkalian
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obfuscated Palindrom</title>
    <script>
        // Fungsi untuk validasi input sebelum pengiriman form
        function validateInput() {
            const inputField = document.getElementById('numberInput');
            const inputValue = parseInt(inputField.value);

            // Memeriksa apakah angka negatif dan menampilkan alert
            if (inputValue < 0) {
                alert("Number cannot be negative!");
                return false; // Mencegah pengiriman form
            }

            return true; // Memungkinkan pengiriman form jika input valid
        }
    </script>
</head>
<body>
    <!-- Form untuk memasukkan angka -->
    <form method="post" action="" onsubmit="return validateInput();">
        <input type="number" id="numberInput" name="ξɴƞ" placeholder="Enter number" required>
        <button type="submit" name="Ƒ1Ɽƛ">Enter</button>
    </form>

    <?php
    // Mengecek apakah tombol submit ditekan
    if (isset($_POST['Ƒ1Ɽƛ'])) {
        $ω = $_POST['ξɴƞ'];  // Mengambil input dari form dengan nama yang tidak biasa

        // Validasi untuk angka lebih dari 50
        if ($ω > 50) {  
            echo '<script>alert("Number cannot be greater than 50!");</script>'; // Menampilkan alert jika lebih dari 50
        } elseif ($ω < 0) {  // Validasi untuk angka negatif
            echo '<script>alert("Number cannot be negative!");</script>'; // Menampilkan alert jika negatif
        } else {
            ƤⱯ1ⱤɅ($ω);  // Memanggil fungsi obfuscated dengan angka yang dimasukkan
        }
    }
    ?>
</body>
</html>
