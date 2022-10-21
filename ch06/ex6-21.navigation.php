// 예제 6-21 다국어 기능을 사용하는 방법

// resources/lang/es/navigation.php
return [
    'back' => 'Volver al panel',
];

// routes/web.php
Route::get('/es/contacts/show/{id}', function () {
    // 이 예제를 위해서 서비스 공급자 대신에 수동으로 로케일을 설정했다.
    App::setLocale('es');
    return view('contacts.show');
});

// resources/views/contacts/show.blade.php
<a href="/contacts">{{ __('navigation.back') }}</a>
