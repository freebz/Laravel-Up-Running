<!-- 예제 7-7 사용자의 배열 입력 값에 접근하기 위한 점 표기법 활용 방법 -->

<!-- GET /employees/create 라우트로 접근했을 때의 뷰 하면 -->
<form method="post" action="/employees/">
    @csrf
    <input type="text" name="employees[0][firstName]">
    <input type="text" name="employees[0][lastName]">
    <input type="text" name="employees[1][firstName]">
    <input type="text" name="employees[1][lastName]">
    <input type="submit">
</form>

// POST /employees로 요청을 보냈을 때 라우트
Route::post('employees', function (Request $request) {
    $employeeZeroFirstName = $request->input('employees.0.firstName');
    $allLastNames = $request->input('employees.*.lastName');
    $employeeOne = $request->input('employees.1');
    var_dump($employeeZeroFirstname, $allLastNames, $employeeOne);
});

// 만약 사용자의 입력 값이 Jim, Smith, Bob, Jones라면
// 결과는 다음과 같다.
// $employeeZeroFirstName = 'Jim';
// $allLastNames = ['Smith', 'Jones'];
// $employeeOne = ['firstName' => 'Bob', 'lastName' => 'Jones'];
