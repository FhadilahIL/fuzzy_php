<?php


function durasi($nilai) {

    $fuzzyDurasi = array();
    
        $baru = 0;
        $sedang = 0;
        $lama= 0;
        if ($nilai <= 2) {
            $baru = 1;
        } else {
            if ($nilai < 4) {
               $baru = (4 - $nilai) / (4 - 2);
            } else {
                $baru = 0;
            }
        }
        if ($nilai >= 4 && $nilai <= 6) {
            $sedang = 1;
        } else {
            if ($nilai > 2 && $nilai < 4) {
                $sedang = ($nilai - 2) / (4 - 2);
            } else {
                if ($nilai > 6 && $nilai < 9) {
                    $sedang = (9 - $nilai) / (9 - 6);
                } else {
                    $sedang = 0;
                }
            }
        }
        if ($nilai >= 9) {
            $lama = 1;
        } else {
            if ($nilai > 6 && $nilai < 9) {
                $lama = ($nilai - 6) / (9 - 6);
            } else {           
                $lama = 0;
            }
        }
        if($baru != 0){
            array_push($fuzzyDurasi,[
                'nilai' => $baru,
                'kategori' => 'baru'
               ]);
        }
        if($sedang != 0){
            array_push($fuzzyDurasi,[
                'nilai' => $sedang,
                'kategori' => 'sedang'
               ]);
        }
        if($lama != 0){
            array_push($fuzzyDurasi,[
                'nilai' => $lama,
                'kategori' => 'lama'
               ]);
        }
     
    return $fuzzyDurasi;
    }

    function intensitas($nilai) {
        $fuzzyIntensitas = array();
    
            $rendah = 0;
            $sedang = 0;
            $tinggi = 0;
            if ($nilai <= 2) {
                $rendah = 1;
            } else {
                if ($nilai > 2 && $nilai < 4) {
                    $rendah = (4 - $nilai) / (4 - 2);
                } else {
                    $rendah = 0;
                }
            }
            if ($nilai >= 4 && $nilai <= 6  ) {
                $sedang = 1;
            } else {
                if ($nilai > 2 && $nilai < 4) {
                    $sedang = ($nilai - 2) / (4 - 2);
                } else {
                    if ($nilai > 6 && $nilai < 8) {
                    $sedang = (8 - $nilai) / (8 - 6);
                    } else {
                    $sedang = 0;
                    }
                }
            }
            if ($nilai >= 8) {
                $tinggi = 1;
            } else {
                if ($nilai > 6 && $nilai < 8) {
                    $tinggi = ($nilai - 6) / (8 - 6);
                } else {
                    $tinggi = 0;
                }
            }
            if($rendah != 0){
                array_push($fuzzyIntensitas,[
                    'nilai' => $rendah,
                    'kategori' => 'rendah'
                   ]);
            }
            if($sedang != 0){
                array_push($fuzzyIntensitas,[
                    'nilai' => $sedang,
                    'kategori' => 'sedang'
                   ]);
            }
            if($tinggi != 0){
                array_push($fuzzyIntensitas,[
                    'nilai' => $tinggi,
                    'kategori' => 'tinggi'
                   ]);
            }
           
            return $fuzzyIntensitas;
        }
    //  FUNGSI KEANGGOTAAN GEJALA 
        function gejala($nilai) {
            $fuzzyGejala = array();
        
                $rendah = 0;
                $buruk = 0;
                $sangatburuk = 0;
                if ($nilai <= 100) {
                    $rendah = 1;
                } else {
                    if ($nilai > 100 && $nilai < 200) {
                        $rendah = (200 - $nilai) / (200 - 100);
                    } else {
                        $rendah = 0;
                    }
                }
                if ($nilai >= 200 && $nilai <= 250  ) {
                    $buruk = 1;
                } else {
                    if ($nilai > 100 && $nilai < 200) {
                        $buruk = ($nilai - 100) / (200 - 100);
                    } else {
                        if ($nilai > 250 && $nilai < 300) {
                        $buruk = (300 - $nilai) / (300 - 250);
                        } else {
                            $buruk = 0;
                        }
                    }
                }
                if ($nilai >= 300) {
                    $sangatburuk = 1;
                } else {
                    if ($nilai > 250 && $nilai < 300) {
                        $sangatburuk = ($nilai - 250) / (300 - 250);
                    } else {
                        $sangatburuk = 0;
                    }
                }
                if($rendah != 0){
                    array_push($fuzzyGejala,[
                        'nilai' => $rendah,
                        'kategori' => 'rendah'
                       ]);
                }
                if($buruk != 0){
                    array_push($fuzzyGejala,[
                        'nilai' => $buruk,
                        'kategori' => 'buruk'
                       ]);
                }
                if($sangatburuk != 0){
                    array_push($fuzzyGejala,[
                        'nilai' => $sangatburuk,
                        'kategori' => 'sangatburuk'
                       ]);
                }
           
                return $fuzzyGejala;
            }
