<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Specialist;
use Illuminate\Support\Facades\DB;


class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $specialist = [
           [
            'name' => 'Dermatologi',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Dentist',
            'price' => '450000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Endodontics',
            'price' => '150000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'General Dentistry',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Oral & Maxilofacial Surgery',
            'price' => '350000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Orthodontics',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Pediatric Dentistry',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Periodontics',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Radilogy',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Surgery',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
            'name' => 'Urology',
            'price' => '250000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
        ];

        // this array wiilbe insert to table 
        Specialist::insert($specialist);
    }
}
