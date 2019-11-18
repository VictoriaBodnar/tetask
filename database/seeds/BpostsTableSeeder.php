<?php

use Illuminate\Database\Seeder;

class BpostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RasArr = array (array('1This is a wider card with supporting text . ',  'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'),
							array('2 This is a wider card with supporting text . ',  'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'),
							array('3 This is a wider card with supporting text . ',  'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'),
							array('4 This is a wider card with supporting text . ',  'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'),
							array('5 This is a wider card with supporting text . ',  'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'),
							array('6 This is a wider card with supporting text . ',  'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'));


    	foreach($RasArr as $key => $v) {
			        
			        DB::table('bposts')->insert([
			            'text' => $v[0],
			            'img_url' => $v[1],
			            'created_at' => date("Y-m-d H:i:s"),
			            'updated_at' => date("Y-m-d H:i:s")			            
			        ]);
       	}	
    }
}
