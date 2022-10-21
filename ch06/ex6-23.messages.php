// 예제 6-23 복수 표기를 위한 간단한 다국어 번역 문자열 정의

// resources/lang/en/messages.php
return [
    'task-deletion' => 'You have deleted a task|You have successfully deleted tasks',
];

// resources/views/dashboard.blade.php
@if ($numTasksDeleted > 0)
    {{ trans_choice('messages.task-deletion', $numTasksDeleted) }}
@endif
