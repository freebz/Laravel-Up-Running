// 예제 3-24 일반적인 컨트롤러 메서드

// TaskController.php
...
public function index()
{
    return view('tasks.index')
        ->with('tasks', Task:all());
}
