<?php

namespace Database\Seeders;

use App\Livewire\Slideimages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliderimages')->delete();
        $images = array(
            array('name'=>'Mini Bank Inauguration','url'=>"http://sahungra.org/app/slider/1.jpeg"),
            array('name'=>'Books Distribution','url'=>"http://sahungra.org/app/slider/2.jpeg"),
            array('name'=>'Teej 2019','url'=>"http://sahungra.org/app/slider/3.jpeg"),
            array('name'=>'Rich Culture','url'=>"http://sahungra.org/app/slider/4.jpeg"),
            array('name'=>'Royal Virsa','url'=>"http://sahungra.org/app/slider/5.jpeg"),
            array('name'=>'Village Survey','url'=>"http://sahungra.org/app/slider/6.jpeg"),
            array('name'=>'550 plants plantation','url'=>"http://sahungra.org/app/slider/7.jpeg"),
            array('name'=>'Polio Abhiyan','url'=>"http://sahungra.org/app/slider/8.jpeg"),
                );
        DB::table('sliderimages')->insert($images);
    }
}
