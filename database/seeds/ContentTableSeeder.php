<?php
namespace App;
use Illuminate\Database\Seeder;
class ContentTabaleSeeder extends Seeder {

    public function run()
    {
        // $this->call('UserTableSeeder');

        // $this->command->info('User table seeded!');

        DB::table('content')->delete();
        Content::create([
        	'id' => '1',
        	'title'=>'test1',
        	'slug'=>'test2',
        	])
    }

}
