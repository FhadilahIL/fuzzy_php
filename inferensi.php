<?php

function inferensi($lokasi, $luas_tanah, $tipe_rumah)
{

    $rules = get_rules();
    $temp_data = array();

    for ($i = 0; $i < count($lokasi); $i++) {
        for ($x = 0; $x < count($luas_tanah); $x++) {
            for ($y = 0; $y < count($tipe_rumah); $y++) {
                for ($z = 0; $z < count($rules); $z++) {
                    // print_r($luas_tanah[0]['kategori']);
                    // die;
                    if ($lokasi[$i]['kategori'] == $rules[$z]['lokasi'] &&  $luas_tanah[$x]['kategori'] == $rules[$z]['luas_tanah'] &&  $tipe_rumah[$y]['kategori'] == $rules[$z]['tipe_rumah']) {
                        tabel($z + 1, $lokasi[$i]['kategori'], $luas_tanah[$x]['kategori'], $tipe_rumah[$y]['kategori'], $rules[$z]['output']);
                        // var_dump($tabel_);
                        // var_dump($rules[$z]['output']);
                        $nilai_min = min($lokasi[$i]['nilai'], $luas_tanah[$x]['nilai'], $tipe_rumah[$y]['nilai']);

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


function tabel($no, $lokasi, $luas_tanah, $tipe_rumah, $output)
{
    $tabel = '';
    if ($tabel === null) {
    } else {
        $tabel .= '<tr><td>' . $no  . '</td><td class="text-uppercase">' . $lokasi  . '</td><td class="text-uppercase">' . $luas_tanah  . '</td><td class="text-uppercase">' . $tipe_rumah  . '</td><td class="font-weight-bold text-uppercase">' . $output  . ' </td></tr>';
    }
    // var_dump($mantap);
    echo $tabel;

    return $tabel;
}
