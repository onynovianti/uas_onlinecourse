<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
            'pertemuan' => 'Pertemuan 1',
            'materi' => 'https://www.youtube.com/watch?v=hHizg9y2_vQ',
            'jenis' => 'Youtube Video',
            'course' => 1,
        ],
        [
            'pertemuan' => 'Pertemuan 1',
            'materi' => 'abcd1224.pdf',
            'jenis' => 'Document File',
            'course' => 1,
        ],
        [
            'pertemuan' => 'Pertemuan 2',
            'materi' => 'agsf1253.webp',
            'jenis' => 'Image',
            'course' => 1,
        ],
        [
            'pertemuan' => 'Pertemuan 1',
            'materi' => 'https://www.youtube.com/watch?v=668nUCeBHyY',
            'jenis' => 'Youtube Video',
            'course' => 2,
        ],
        [
            'pertemuan' => 'Pertemuan 2',
            'materi' => 'hsgd1627.mp4',
            'jenis' => 'Video File',
            'course' => 2,
        ],
        [
            'pertemuan' => 'Pertemuan 1',
            'materi' => 'ahdk8293.docx',
            'jenis' => 'Document File',
            'course' => 3,
        ],
        [
            'pertemuan' => 'Meeting 1',
            'materi' => 'https://www.youtube.com/watch?v=0iYsBnj2BUk',
            'jenis' => 'Youtube Video',
            'course' => 4,
        ],
        [
            'pertemuan' => 'Meeting 2',
            'materi' => 'dgskl172.webp',
            'jenis' => 'Image',
            'course' => 4,
        ],
    ];

    \DB::table('curricula')->insert($posts);
    }
}
