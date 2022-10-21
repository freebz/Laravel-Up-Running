// 예제 6-18 직접 MessageBag 클래스를 생성하고 사용하는 예제

$messages = [
    'errors' => [
        '수정하는 데 오류가 발생하였습니다.!',
    ],
    'messages' => [
        '수정 작업이 완료되었습니다.',
    ],
];
$messagebag = new \Illuminate\Support\MessageBag($message);

// 에러 메시지가 있는지 확인하여 조건을 만족하는 경우 메시지를 출력한다.
if ($messagebag->has('errors')) {
    echo '<ul id="errors">';
    foreach ($messagebag->get('errors', '<li><b>:message</b></li>') as $error) {
        echo $error;
    }
    echo '</ul>';
}
