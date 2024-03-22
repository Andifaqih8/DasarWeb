<?php
 function tampilkanHaloDunia(){
     echo "Halo dunia! <br>";

     tampilkanHaloDunia();
 }

 tampilkanHaloDunia();

/** Soal 6
 * -	Terjadi rekursi tak terbatas dengan dampak terjadinya stack overflow.
 */

 for ($i=1; $i <=25; $i++){
     echo "Perulangan ke-{$i} <br>";
 }

 function tampilkanAngka (int $jumlah, int $indeks = 1){
     echo "Perulangan ke-{$indeks} <br>";

     if ($indeks < $jumlah) {
         tampilkanAngka($jumlah, $indeks + 1);
     }
 }
 tampilkanAngka(20);

/** Soal 6.2
 * -	Kode tersebut akan mencetak pesan "Perulangan ke-" sebanyak 20 kali, dengan nomor indeks mulai dari 1 hingga 20.
 */
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama"  => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if(isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>