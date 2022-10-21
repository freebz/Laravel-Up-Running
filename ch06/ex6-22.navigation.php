// 예제 6-22 다국어 문자열에 파라미터 정의하기

// resources/lang/en/navigation.php
return [
    'back' => 'Back to :section dashboard',
];

// resources/views/contacts/show.blade.php
{{ __('navigation.back', ['section' => 'contacts']) }}
