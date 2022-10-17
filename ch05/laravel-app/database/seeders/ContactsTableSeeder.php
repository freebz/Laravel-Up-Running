<?php

namespace Database\Seeders;
// 라라벨 8 이전에는 네임스페이스가 필요하지 않다.

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            'name' => 'Lupita Smith',
            'email' => 'lupita@gmail.com',
            'active' => true,
            'vip' => true,
            // 'name' => $this->faker->name,
            // 'email' => $this->faker->email,
        ]);
    }
}
