// 예제 5-6 시더에서 데이터베이스에 레코드를 추가하기

<?php

use Illuminate\Database\Seeder;
// 라라벨 8 이전에는 네임스페이스가 필요하지 않다.

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Lupita Smith',
            'email' => 'lupita@gmail.com',
        ]);
    }
}
