// 예제 3-26 컨트롤러 메서드에서 사용자의 입력 값을 획득하는 경우

// TaskController.php
...
public function store()
{
    Task::create(request()->only(['title', 'description']));

    return redirect('tasks');
}
