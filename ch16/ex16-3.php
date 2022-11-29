// 예제 16-3 큐에 잡 추가하기

$user = auth()->user();
\App\Jobs\CrunchReports::dispatch($user);
