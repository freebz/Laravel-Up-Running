// 예제 7-6 $request->method(), $request->isMethod()

$method = $request->method();

if ($request->isMethod('post')) {
    // HTTP POST 요청이라면 로직 처리
}
