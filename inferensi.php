<?php

function inferensi($durasi, $gejala, $intensitas)
{

    $rules = get_rules();
    $temp_data = array();

    for ($i = 0; $i < count($durasi); $i++) {
        for ($x = 0; $x < count($gejala); $x++) {
            for ($y = 0; $y < count($intensitas); $y++) {
                for ($z = 0; $z < count($rules); $z++) {
                    if ($durasi[$i]['kategori'] == $rules[$z]['durasi'] &&  $gejala[$x]['kategori'] == $rules[$z]['gejala'] &&  $intensitas[$y]['kategori'] == $rules[$z]['intensitas']) {
                        tabel($z + 1, $durasi[$i]['kategori'], $gejala[$x]['kategori'], $intensitas[$y]['kategori'], $rules[$z]['output']);
                        // var_dump($tabel_);
                        // var_dump($rules[$z]['output']);
                        $nilai_min = min($durasi[$i]['nilai'], $gejala[$x]['nilai'], $intensitas[$y]['nilai']);
                      
                        array_push($temp_data, [
                            'nilai' => $nilai_min,
                            'kategori' => $rules[$z]['output']
                        ]);
                    }
                }
            }
        }
    }
    $grouping = group_array('kategori', $temp_data);

    // for($l = 0; $l < count($grouping); $l++) {
    //       var_dump($grouping);
    //     array_push($kirim,[
    //         'nilai' => $nilai_min,
    //         'kategori' => $grouping
    //        ]);
    // }



    return $grouping;
}

function group_array($key, $data)
{
    $result = array();

    foreach ($data as $val) {
        if (array_key_exists($key, $val)) {
            $result[$val[$key]][] = $val;
            $arrMax = array_map(function ($v) {
                $maximum = max($v);
               
                return  [array_keys($v, $maximum)[0] => $maximum];
            }, $result);
      
        } else {
            $result[""][] = $val;
        }
    }

    return $arrMax;
}


function tabel($no, $durasi, $gejala, $intensitas, $output)
{
    $tabel = '';
    if ($tabel === null) {
    } else {
        $tabel .= '<tr><td>' . $no  . '</td><td class="text-uppercase">' . $durasi  . '</td><td class="text-uppercase">' . $gejala  . '</td><td class="text-uppercase">' . $intensitas  . '</td><td class="font-weight-bold text-uppercase">' . $output  . ' </td></tr>';
    }
    // var_dump($mantap);
    echo $tabel;

    return $tabel;
}
