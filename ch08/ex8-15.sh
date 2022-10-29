# 예제 8-15 팅커 사용하기

php artisan tinker

>>> $user = new App\Models\User;
=> App\Models\User: {}
>>> $user->email = 'matt@mattstaufer.com';
=> "matt@mattstaufer.com"
>>> $user->password = bcrypt('superSecret');
=> "$2y$10$TWPGBC7e8d1bvJ1q5kv.VDUGfYDnE9gANl4mleuB3htIY2dxcQfQ5"
>>> $user-save();
=> true
