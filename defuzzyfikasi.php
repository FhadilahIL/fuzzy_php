<?php

function defuzzifikasi($data)
{
    $hasil = 0;
    $hasilAtas = 0;
    $hasilBawah = 0;
    $titikSampel = titik_sampel();
    $hasilCuy = 0;
    //  var_dump($data);
    foreach ($data as $covid) {
    
        foreach ($covid as $value) {
            echo '<div class="mynumber2">NK '. $value['kategori'] .' = '. $value['nilai'] .'<br></div>';
            for ($z = 0; $z < count($titikSampel); $z++) {
                if ($value['kategori'] == $titikSampel[$z]['kategori']) {
                    //   var_dump($value);
                    for ($y = 0; $y < count($titikSampel[$z]['sampel']); $y++) {
                        $nilaiSampel = $titikSampel[$z]['sampel'][$y]['nilai_sampel'];
                        // var_dump($titikSampel[$z]['sampel'][$y]);
                        $tambah = $nilaiSampel * $value['nilai'];
                        $hasilAtas = $hasilAtas + $tambah;
                       
                    }
                    $bawah = count($titikSampel[$z]['sampel']);
                    //var_dump($bawah);
                }
            }
            $hasilBawah = $hasilBawah + ($value['nilai'] * $bawah);
            // var_dump($value['nilai']);

        }
        $hasil = $hasilAtas / $hasilBawah;
    }
    hasilAtas($hasilAtas,$hasilBawah);
    //   var_dump($hasil);
    return $hasil;
}

function hasilAtas($pembilang,$penyebut)
{
    $atas = '';
    if ($atas === null) {
    } else {
        $atas .= '<tr class="mynumber"><td>'. $pembilang .'</td><td>'.$penyebut.'</td>';
    }
    // var_dump($mantap);
    echo $atas;
    return $atas;
}










    //    $grouping = group_array('kategori',$data);
    //$ambilODP = group_array('ODP',$grouping);
    //  var_dump($grouping);
    //var_dump($data);

    // for ($x = 0; $x < count($data); $x++) {
    //     var_dump($data);
    //     for ($z = 0; $z < count($titikSampel); $z++) {
    //         if ($data['ODP'][2]['kategori'] == $titikSampel[$z]['kategori']) {
    //             for ($y = 0; $y < count($titikSampel[$z]['sampel']); $y++) {
    //                 $nilaiSampel = $titikSampel[$z]['sampel'][$y]['nilai_sampel'];
    //                 //    var_dump($grouping['ODP']);
    //                 $tambah = $nilaiSampel * $data['ODP'][2]['nilai'];
    //                 $hasilAtas = $hasilAtas + $tambah;
    //             }
    //         }
    //         $bawah = count($titikSampel[$z]['sampel']);
    //     }
    //     $hasilBawah = $hasilBawah + ($data['ODP'][2]['nilai'] * $bawah);
    // }
    // $hasil = $hasilAtas / $hasilBawah;

    // var_dump($hasil);
