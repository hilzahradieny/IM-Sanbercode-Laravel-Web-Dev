<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Looping</title>

</head>

<body>

    <h1>Berlatih Looping</h1>    
     <?php 

        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        
        echo "<h5>Looping Ascending</h5>";
        $n = 2;
        while($n <= 20){
            echo "$n - I Love PHP <br>";
            $n+=2;
        }

        echo "<h5>Looping Descending</h5>"; //number bisa menggunakan variabel yg sama dg variabel ascending
        for($b = 20; $b >=2; $b-=2){
            echo "$b - I Love PHP <br>";
        }

        /* 

            Soal No 1 

            Looping I Love PHP

            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 

            dan Looping yang ke dua menurun (Descending).             


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";

        /* 

            Soal No 2

            Looping Array Module

            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.

            Tampung ke dalam array baru bernama $rest 

        */  
        
        echo "<h3>Soal No 2 Looping Array Module</h3>";

        $numbers = [18, 45, 29, 61, 47, 34];
        
        echo "Array Numbers: ";
        print_r($numbers);       
        echo "<br>";

        echo "Array sisa bagi 5 nya adalah:  "; 
        foreach($numbers as $mod){
            $modresult[] = $mod %= 5;
        }
        print_r($modresult);
        echo "<br>";       


        /* 

            Soal No 3

            Loop Associative Array

            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 

            Setiap item memiliki key yaitu : id, name, price, description, source. 

            

            Output: 

            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 

            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 

            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 

            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )             
        Jangan ubah variabel $items        */

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";

        $items = [

            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 

            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],

            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],

            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

        ];
        
        foreach($items as $tech_item){
            $output_tech = [
                "id" => $tech_item[0],
                "name" => $tech_item[1],
                "price" => $tech_item[2],
                "description" => $tech_item[3],
                "source" => $tech_item[4]
            ];
            print_r($output_tech);
            echo "<br>";
        }
        
        /* 
            Soal No 4

            Asterix 5x5

            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 

            Output: 

            * 

            * * 

            * * * 

            * * * * 

            * * * * *
        */

        echo "<h3>Soal No 4 Asterix </h3>";

        echo "Asterix: ";
        echo "<br><br>";

        for ($x = 1; $x <= 5; $x++) {
            for($y=1; $y<=$x; $y++){
                echo "*";
            }
            echo "<br>";
        }       
        
    ?></body>

</html>