// 예제 11-9 클래스의 문자열에 별칭 붙이기

// Logger를 요청받으면 FirstLogger를 준다.
$this->app->bind(Logger::class, FirstLogger::class);

// log를 요청받으면 FirstLogger를 준다.
$this->app->bind('log', FirstLogger::class);

// log를 요청받으면 FirstLogger를 준다.
$this->app->alias(FirstLogger::class, 'log');
