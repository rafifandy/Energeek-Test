<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class JobsSeeder extends Seeder
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
                'name'=>'Frontend Web Programmer',
                'created_at'=>NOW()
            ],
            
            [
                'name'=>'Fullstack Web Programmer',
                'created_at'=>NOW()
            ],

            [   
                'name'=>'Quality Control',
                'created_at'=>NOW()
            ]

        ];

        DB::table('jobs')->insert($data);
    }
}
