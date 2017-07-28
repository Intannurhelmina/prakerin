<?php

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a =[
        		['title'=>'Intan','content'=>'nur'],
        		['title'=>'sekolah','content'=>'assalaam'],
        ];
        //memasukan data ke table 'post' di database
        DB::table('posts')->insert($a);
    }
}
