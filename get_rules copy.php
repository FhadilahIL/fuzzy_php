<?php

//rules
function get_rules(){
    $rules = array(
        [
            "durasi" => 'baru',
            "gejala" => 'rendah',
            "intensitas" => 'rendah',
            "output"=> 'negatif'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'rendah',
            "intensitas" => 'sedang',
            "output"=> 'negatif'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'rendah',
            "intensitas" => 'tinggi',
            "output"=> 'negatif'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'buruk',
            "intensitas" => 'rendah',
            "output"=> 'negatif'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'buruk',
            "intensitas" => 'sedang',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'buruk',
            "intensitas" => 'tinggi',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'sangatburuk',
            "intensitas" => 'rendah',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'sangatburuk',
            "intensitas" => 'sedang',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'baru',
            "gejala" => 'sangatburuk',
            "intensitas" => 'tinggi',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'rendah',
            "intensitas" => 'rendah',
            "output"=> 'negatif'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'rendah',
            "intensitas" => 'sedang',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'rendah',
            "intensitas" => 'tinggi',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'buruk',
            "intensitas" => 'rendah',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'buruk',
            "intensitas" => 'sedang',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'buruk',
            "intensitas" => 'tinggi',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'sangatburuk',
            "intensitas" => 'rendah',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'sangatburuk',
            "intensitas" => 'sedang',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'sedang',
            "gejala" => 'sangatburuk',
            "intensitas" => 'tinggi',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'rendah',
            "intensitas" => 'rendah',
            "output"=> 'negatif'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'rendah',
            "intensitas" => 'sedang',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'rendah',
            "intensitas" => 'tinggi',
            "output"=> 'ODP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'buruk',
            "intensitas" => 'rendah',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'buruk',
            "intensitas" => 'sedang',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'buruk',
            "intensitas" => 'tinggi',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'sangatburuk',
            "intensitas" => 'rendah',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'sangatburuk',
            "intensitas" => 'sedang',
            "output"=> 'PDP'
        ],
        [
            "durasi" => 'lama',
            "gejala" => 'sangatburuk',
            "intensitas" => 'tinggi',
            "output"=> 'PDP'
        ],
    );
   
    
    return $rules;
    }

function titik_sampel(){
    
$titikSampel = array(
    [
        'kategori' => 'negatif',
        'sampel' => [
            [
                'nilai_sampel' => 1
             ],
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
                'nilai_sampel' => 8
             ]
           
        ]

    ],
    [
        'kategori' => 'ODP',
        'sampel' => [
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
                'nilai_sampel' => 8
             ],
             [
                'nilai_sampel' => 9
             ],
             [
                'nilai_sampel' => 10
             ],
             [
                'nilai_sampel' => 11
             ],
             [
                'nilai_sampel' => 12
             ]
           
          
        ]
    ],
    [
        'kategori' => 'PDP',
        'sampel' => [
            [
                'nilai_sampel' => 8
             ],
             [
                'nilai_sampel' => 9
             ],
             [
                'nilai_sampel' => 10
             ],
             [
                'nilai_sampel' => 11
             ],
             [
                'nilai_sampel' => 12
             ],
             [
                'nilai_sampel' => 13
             ],
             [
                'nilai_sampel' => 14
             ]
          
        ]

    ],
);
   return $titikSampel;
}
