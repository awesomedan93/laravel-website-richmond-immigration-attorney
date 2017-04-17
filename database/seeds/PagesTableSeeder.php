<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            ['key'=>'home'],
            ['key'=>'about'],
            ['key'=>'cases'],
            ['key'=>'cases-criminal-defense'],
            ['key'=>'cases-immigration-law'],
            ['key'=>'cases-traffic-law'],
            ['key'=>'cases-dui-law'],
            ['key'=>'attorneys'],
            ['key'=>'attorneys-raul-novo'],
            ['key'=>'attorneys-soulmaz-taghavi'],
            ['key'=>'testimonials'],
            ['key'=>'blog'],
            ['key'=>'contact']
        ];

        foreach ($pages as $key=>$value){
            App\Models\Page::create($value);
        }
    }
}
