<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' => 'Java'],
            ['name' => 'PHP'],
            ['name' => 'Javascript'],
            ['name' => 'Ruby'],
            ['name' => 'Linux'],
            ['name' => 'Docker'],
        ];
        
        DB::table('tags')->insert($tags);
    }
}
