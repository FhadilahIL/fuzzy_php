<?php

//rules
function get_rules()
{
    $rules = array(
        // 1 - 9
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Luas',
            "output"        => 'normal'
        ],

        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Luas',
            "output"        => 'normal'
        ],

        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'mahal'
        ],
        [
            "lokasi"        => 'Sangat Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Luas',
            "output"        => 'mahal'
        ],

        // 10 - 18
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Luas',
            "output"        => 'normal'
        ],

        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Luas',
            "output"        => 'mahal'
        ],

        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'mahal'
        ],
        [
            "lokasi"        => 'Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Luas',
            "output"        => 'mahal'
        ],

        // 19 - 27
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'kecil',
            "tipe_rumah"    => 'sempit',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Kecil',
            "tipe_rumah"    => 'Luas',
            "output"        => 'murah'
        ],

        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Sedang',
            "tipe_rumah"    => 'Luas',
            "output"        => 'normal'
        ],

        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Sempit',
            "output"        => 'murah'
        ],
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Sedang',
            "output"        => 'normal'
        ],
        [
            "lokasi"        => 'Tidak Strategis',
            "luas_tanah"    => 'Luas',
            "tipe_rumah"    => 'Luas',
            "output"        => 'normal'
        ],
    );


    return $rules;
}

function titik_sampel()
{

    $titikSampel = array(
        [
            'kategori' => 'murah',
            'sampel' => [
                [
                    'nilai_sampel' => 1
                ],
                [
                    'nilai_sampel' => 10
                ],
                [
                    'nilai_sampel' => 11
                ],
                [
                    'nilai_sampel' => 19
                ],
                [
                    'nilai_sampel' => 20
                ],
                [
                    'nilai_sampel' => 21
                ],
                [
                    'nilai_sampel' => 22
                ],
                [
                    'nilai_sampel' => 25
                ]

            ]

        ],
        [
            'kategori' => 'normal',
            'sampel' => [
                [
                    'nilai_sampel' => 2
                ],
                [
                    'nilai_sampel' => 3
                ],
                [
                    'nilai_sampel' => 4
                ],
                [
                    'nilai_sampel' => 5
                ],
                [
                    'nilai_sampel' => 6
                ],
                [
                    'nilai_sampel' => 7
                ],
                [
                    'nilai_sampel' => 12
                ],
                [
                    'nilai_sampel' => 13
                ],
                [
                    'nilai_sampel' => 14
                ],
                [
                    'nilai_sampel' => 16
                ],
                [
                    'nilai_sampel' => 23
                ],
                [
                    'nilai_sampel' => 24
                ],
                [
                    'nilai_sampel' => 26
                ],
                [
                    'nilai_sampel' => 27
                ]
            ]
        ],
        [
            'kategori' => 'mahal',
            'sampel' => [
                [
                    'nilai_sampel' => 8
                ],
                [
                    'nilai_sampel' => 9
                ],
                [
                    'nilai_sampel' => 15
                ],
                [
                    'nilai_sampel' => 17
                ],
                [
                    'nilai_sampel' => 18
                ]
            ]
        ],
    );
    return $titikSampel;
}
