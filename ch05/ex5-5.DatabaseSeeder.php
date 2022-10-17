// 예제 5-5 DatabaseSeeder 클래스에서 ContactsTableSeeder 클래스 호출하기

// database/seeders/DatabaseSeeder.php
...
    public function run()
    {
        $this->call(ContactsTableSeeder::class);
    }
