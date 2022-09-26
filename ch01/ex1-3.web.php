// 예제 1-3 데이터베이스에 저장하고 출력한 Hello, World 출력 코드

// routes/web.php 파일
<?php

use App\Models\Greeting;

Route::get('create-greeting', function () {
    $greeting = new Greeting();
    $greeting->body = 'Hello, World!';
    $greeting->save();
});

Route::get('first-greeting', function () {
    return Greeting::first()->body;
});


// app/Models/Greeting.php 파일
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    //
}


// database/migrations/2015_07_19_010000_create_greetings_table.php 파일
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGreetingsTable extends Migration
{
    public function up()
    {
        Schema::create('greetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('body');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('greetings');
    }
}
