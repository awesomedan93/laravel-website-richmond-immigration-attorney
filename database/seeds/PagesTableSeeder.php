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
            ['key'=>'pages.home','menu_title'=>'Home'],
            ['key'=>'pages.about','menu_title'=>'About'],
            ['key'=>'pages.cases','menu_title'=>'Cases We Handle'],
            ['key'=>'pages.cases.criminal_defense','menu_title'=>'Criminal Defense'],
            ['key'=>'pages.cases.immigration_law','menu_title'=>'Immigration Law'],
            ['key'=>'pages.cases.traffic_law','menu_title'=>'Traffic Law'],
            ['key'=>'pages.cases.dui_law','menu_title'=>'Dui Law'],
            ['key'=>'pages.attorneys','menu_title'=>'Attorneys'],
            ['key'=>'pages.raul_novo','menu_title'=>'Raul Novo'],
            ['key'=>'pages.soulmaz_taghavi','menu_title'=>'Soulmaz Taghavi'],
            ['key'=>'pages.testimonials','menu_title'=>'Testimonials'],
            ['key'=>'pages.blog','menu_title'=>'Blog'],
            ['key'=>'pages.contact','menu_title'=>'Contact']
        ];

        foreach ($pages as $key=>$value){
            App\Models\Page::create($value);
        }
    }
}
