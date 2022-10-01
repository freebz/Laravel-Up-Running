// 예제 3-27 타입힌트를 통한 컨트롤러 메서드 주입

// TaskController.php
...
public function store(\Illuminate\Http\Request $request)
{
    Task::create($request->only(['title', 'description']));

    return redirect('tasks');
}
