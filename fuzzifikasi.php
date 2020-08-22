<?php


function lokasi($nilai)
{

    $fuzzyLokasi = array();

    $sangat_strategis = 0;
    $strategis = 0;
    $tidak_strategis = 0;
    if ($nilai <= 10) {
        $sangat_strategis = 1;
    } else {
        if ($nilai < 20) {
            $sangat_strategis = (20 - $nilai) / (20 - 10);
        } else {
            $sangat_strategis = 0;
        }
    }
    if ($nilai >= 20 && $nilai <= 30) {
        $strategis = 1;
    } else {
        if ($nilai > 10 && $nilai < 20) {
            $strategis = ($nilai - 10) / (20 - 10);
        } else {
            if ($nilai > 30 && $nilai < 40) {
                $strategis = (40 - $nilai) / (40 - 30);
            } else {
                $strategis = 0;
            }
        }
    }
    if ($nilai >= 40) {
        $tidak_strategis = 1;
    } else {
        if ($nilai > 30 && $nilai < 40) {
            $tidak_strategis = ($nilai - 30) / (40 - 30);
        } else {
            $tidak_strategis = 0;
        }
    }
    if ($sangat_strategis != 0) {
        array_push($fuzzyLokasi, [
            'nilai' => $sangat_strategis,
            'kategori' => 'Sangat Strategis'
        ]);
    }
    if ($strategis != 0) {
        array_push($fuzzyLokasi, [
            'nilai' => $strategis,
            'kategori' => 'Strategis'
        ]);
    }
    if ($tidak_strategis != 0) {
        array_push($fuzzyLokasi, [
            'nilai' => $tidak_strategis,
            'kategori' => 'Tidak Strategis'
        ]);
    }

    return $fuzzyLokasi;
}

function luas_tanah($nilai)
{
    $fuzzyLuasTanah = array();

    $kecil = 0;
    $sedang = 0;
    $luas = 0;
    if ($nilai <= 30) {
        $kecil = 1;
    } else {
        if ($nilai > 30 && $nilai < 40) {
            $kecil = (40 - $nilai) / (40 - 30);
        } else {
            $kecil = 0;
        }
    }
    if ($nilai >= 40 && $nilai <= 70) {
        $sedang = 1;
    } else {
        if ($nilai > 30 && $nilai < 40) {
            $sedang = ($nilai - 30) / (40 - 30);
        } else {
            if ($nilai > 70 && $nilai < 80) {
                $sedang = (80 - $nilai) / (80 - 70);
            } else {
                $sedang = 0;
            }
        }
    }
    if ($nilai >= 80) {
        $luas = 1;
    } else {
        if ($nilai > 70 && $nilai < 80) {
            $luas = ($nilai - 70) / (80 - 70);
        } else {
            $luas = 0;
        }
    }
    if ($kecil != 0) {
        array_push($fuzzyLuasTanah, [
            'nilai' => $kecil,
            'kategori' => 'Kecil'
        ]);
    }
    if ($sedang != 0) {
        array_push($fuzzyLuasTanah, [
            'nilai' => $sedang,
            'kategori' => 'Sedang'
        ]);
    }
    if ($luas != 0) {
        array_push($fuzzyLuasTanah, [
            'nilai' => $luas,
            'kategori' => 'Luas'
        ]);
    }

    return $fuzzyLuasTanah;
}

//  FUNGSI KEANGGOTAAN Tipe Rumah 
function tipe_rumah($nilai)
{
    $fuzzyTipeRumah = array();

    $kecil = 0;
    $sedang = 0;
    $luas = 0;
    if ($nilai <= 40) {
        $kecil = 1;
    } else {
        if ($nilai > 40 && $nilai < 50) {
            $kecil = (50 - $nilai) / (50 - 40);
        } else {
            $kecil = 0;
        }
    }
    if ($nilai >= 50 && $nilai <= 60) {
        $sedang = 1;
    } else {
        if ($nilai > 40 && $nilai < 50) {
            $sedang = ($nilai - 40) / (50 - 60);
        } else {
            if ($nilai > 60 && $nilai < 70) {
                $sedang = (70 - $nilai) / (70 - 60);
            } else {
                $sedang = 0;
            }
        }
    }
    if ($nilai >= 70) {
        $luas = 1;
    } else {
        if ($nilai > 60 && $nilai < 70) {
            $luas = ($nilai - 60) / (70 - 60);
        } else {
            $luas = 0;
        }
    }
    if ($kecil != 0) {
        array_push($fuzzyTipeRumah, [
            'nilai' => $kecil,
            'kategori' => 'Sempit'
        ]);
    }
    if ($sedang != 0) {
        array_push($fuzzyTipeRumah, [
            'nilai' => $sedang,
            'kategori' => 'Sedang'
        ]);
    }
    if ($luas != 0) {
        array_push($fuzzyTipeRumah, [
            'nilai' => $luas,
            'kategori' => 'Luas'
        ]);
    }

    return $fuzzyTipeRumah;
}
