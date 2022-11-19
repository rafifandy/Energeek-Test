<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [   
                'name'=>'PHP',
                'created_at'=>NOW()
            ],
            
            [
                'name'=>'PostgreSQL',
                'created_at'=>NOW()
            ],

            [   
                'name'=>'API (JSON, REST)',
                'created_at'=>NOW()
            ],

            [
                'name'=>'Version Control System (Gitlab, Github)',
                'created_at'=>NOW()
            ]

        ];

        DB::table('skills')->insert($data);
    }
}
