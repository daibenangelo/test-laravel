<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'subject_id' => 1,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            1 => 
            array (
                'subject_id' => 2,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
        ));
        
        
    }
}