<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Sanbercode!"
*/

// Code function di sini


// Hapus komentar untuk menjalankan code!
// greetings("Bagas");
// greetings("Wahyu");
// greetings("nama peserta");

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($name){
    echo "Halo $name, Selamat Datang di Sanbercode! <br>";
}
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Abduh");
    greetings("Hilzahra");


/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 


// Hapus komentar di bawah ini untuk jalankan Code
// reverseString("nama peserta");
// reverseString("Sanbercode");
// reverseString("We Are Sanbers Developers");

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($word){
    $wordlength = strlen($word);
    $output_reserve = "";
    for($w = $wordlength - 1; $w >=0; $w--){
        $output_reserve .= $word[$w];
    }
    return $output_reserve;
}

echo reverseString("Hilzahra Putrie Dienya");
echo "<br>";
echo reverseString("Sanbercode");
echo "<br>";
echo reverseString("We Are Sanbers Developers");
echo "<br>";


/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/

// Code function di sini

// Hapus komentar di bawah ini untuk jalankan code
// palindrome("civic") ; // true
// palindrome("nababan") ; // true
// palindrome("jambaban"); // false
// palindrome("racecar"); // true

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($palinword){
    $reversepali = reverseString($palinword);
    if($palinword == $reversepali){
        echo $palinword ." => true <br>"; 
    }
    else{
        echo $palinword ." => false <br>";
    }
}

palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini

// Hapus komentar di bawah ini untuk jalankan code
// echo tentukan_nilai(98); //Sangat Baik
// echo tentukan_nilai(76); //Baik
// echo tentukan_nilai(67); //Cukup
// echo tentukan_nilai(43); //Kurang

echo "<h3>Soal No 4 Tentukan Nilai </h3>";
function determine_score($score){
    if($score <= 100 && $score >= 85){
        return $score ." => Sangat Baik <br>";
    }
    if($score <= 85 && $score >= 70){
        return $score ." => Baik <br>";
    }
    if($score <= 70 && $score >= 60){
        return $score ." => Cukup <br>";
    }
    else{
        return $score ." => Kurang <br>";
    }
}
echo determine_score(98); //Sangat Baik
echo determine_score(76); //Baik
echo determine_score(67); //Cukup
echo determine_score(43); //Kurang
?>

</body>

</html>