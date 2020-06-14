<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('owners')->insert([
            'dob' => Carbon::create('2000', '01', '01'),
            'driving_categories' => chr(rand(65,68)),
    }
}
