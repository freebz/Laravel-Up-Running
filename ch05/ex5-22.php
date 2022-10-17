// 예제 5-22 원시 쿼리와 쿼리 빌더의 메서드 체이닝 호출 방법

// 쿼리를 직접 전달하는 방식
DB::statement('drop table users');

// SELECT 쿼리를 직접 전달하고 파라미터를 바인딩하는 호출 방식
DB::select('select * from contacts where validated = ?', [true]);

// 체이닝 방법을 사용해 데이터를 조회하는 방법
$users = DB::table('users')->get();

// 다른 테이블과의 JOIN 구문을 체이닝으로 호출하는 방법
DB::table('users')
    ->join('contacts', function ($join) {
        $join->on('users.id', '=', 'contacts.user_id')
             ->where('contacts.type', 'donor');
    })
    ->get();
