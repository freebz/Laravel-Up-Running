<?php

// 예제 3-1 라우트 정의하기

// routes/web.php
Route::get('/', function () {
    return 'Hello, World!';
});


// 예제 3-2 간단한 웹사이트용 라우트

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});


// 예제 3-3 여러 가지 라우트 동사

Route::get('/', function () {
    return 'Hello, World!';
});

Route::post('/', function () {
    // POST 요청에 대한 처리를 담당하는 라우트
});

Route::put('/', function () {
    // PUT 요청에 대한 처리를 담당하는 라우트
});

Route::delete('/', function () {
    // DELETE 요청에 대한 처리를 담당하는 라우트
});

Route::any('/', function () {
    // 요청 메서드에 관계없이 해당 요청을 처리하는 라우트
});

Route::match(['get', 'post'], '/', function () {
    // GET 또는 POST인 요청에 대해서만 처리하는 라우트
});


// 예제 3-4 컨트롤러 메서드를 호출하는 방식의 라우트

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);


// 예제 3-5 라우트 파라미터

Route::get('users/{id}/friends', function ($id) {
    //
});


// 예제 3-6 라우트 파라미터 옵션

Route::get('users/{id?}', function ($id = 'fallbackId') {
    //
});


// 예제 3-7 라우트 파라미터의 정규 표현식 조건 추가

Route::get('users/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {
    //
})->where('username', '[A-Za-z]+');

Route::get('posts/{id}/{slug}', function ($id, $slug) {
    //
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);


// 예제 3-9 라우트에 이름 지정하기

// routes/web.php 파일에서 name() 메서드를 호출해 이름 지정하기
Rooute::get('members/{id}', [MemberController::class, 'show'])->name('members.show');


// 예제 3-10 라우트 그룹 정의하기

Route::group(function () {
    Route::get('hello', function () {
        return 'Hello';
    });
    Route::get('world', function () {
        return 'World';
    });
});


// 예제 3-11 로그인한 사용자만 접근하게 지정한 라우트 그룹

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('account', function () {
        return view('account');
    });
});


// 예제 3-12 특정 라우트를 스로틀 미들웨어로 접속 제한하기

Route::middleware(['throttle:uploads'])->group(function () {
    Route::post('/photos', function () {
        //
    });
});


// 예제 3-13 라우트 그룹으로 URL에 접두사 붙이기

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        // URL '/dashboard'를 처리하는 로직
    });
    Route::get('users', function () {
        // URL '/dashboard/users'를 처리하는 로직
    });
});


// 예제 3-14 서브도메인 라우팅

Route::domain('api.myapp.com')->group(function () {
    Route::get('/', function () {
        //
    });
});


// 예제 3-15 서브도메인을 인자로 받을 수 있도록 정의된 라우트

Route::domain('{account}.myapp.com')->group(function () {
    Route::get('/', function ($account) {
        //
    });
    Route::get('users/{id}', function ($account, $id) {
        //
    });
});


// 예제 3-16 라우트 그룹의 네임스페이스 지정하기

use App\Http\Controllers\UserController;

// App\Http\Controllers\UserController
Route::get('/', [UserController::class, 'index']);

Route::namespace('App\Http\Controllers\Dashboard')->group(function () {
    // App\Http\Controllers\Dashboard\PurchaseController
    Route::get('dashboard/purchases', 'PurchaseController@index');
});


// 예제 3-17 라우트 그룹의 이름 접두사 지정하기

Route::name('users.')->prefix('users')->group(function () {
    Route::name('comments.')->prefix('comments')->group(function () {
        Route::get('{id}', function () {
            // 결과적으로 이 라우트는 /users/comments/{id}의 URL 링크를 갖는
            // 'users.comments.show'라는 이름의 라우트로 등록된다.
        })->name('show');
    });
});


// 라우트에 서명 추가하기

Route::get('invitations/{invitation}/{group}', InvitationController::class)
    ->name('invitations');

// 일반 URL 링크 생성하기
URL::route('invitations', ['invitation' => 5816, 'group' => 678]);

// 서명된 링크 생성하기
URL::signedRoute('invitations', ['invitation' => 5816, 'group' => 678]);

// 유효 기간이 있는 서명된 링크 생성하기
URL::temporarySignedRoute(
    'invitations',
    now()->addHours(4),
    ['invitation' => 5816, 'group' => 678]
);


// 서명이 확인된 경우에만 라우트에 접근하도록 수정하기

Route::get('invitations/{invitatioin}/{group}', InvitationController::class)
    ->name('invitations')
    ->middleware('signed');


// 예제 3-18 간단한 view() 사용법

Route::get('/', function () {
    return view('home');
});


// 예제 3-19 뷰에 변수 전달하기

Route::get('tasks', function () {
    return view('tasks.index')
        ->with('tasks', Task:all());
});


// 예제 3-20 Route::view() 메서드

// resources/views/welcome.blade.php 뷰 파일을 바로 렌더링하여 반환한다.
Route::view('/', 'welcome');

// 간단한 데이터를 바로 Route::view()에 전달한다.
Route::view('/', 'welcome', ['User' => 'Michael']);


// 뷰 컴포저를 사용하여 모든 뷰에서 변수 공유하기
 
view()->share('varialeName', 'variableValue');


// 예제 3-23 컨트롤러를 위한 라우트 예시

// routes/web.php
<?php

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);


// 예제 3-25 기보넞ㄱ인 컨트롤러 액션을 바인딩한 라우트

// routes/web.php

use App\Http\Controllers\TaskController;

Route::get('tasks/create', [TaskController::class, 'create']);
Route::post('tasks', [TaskController::class, 'store']);


// 예제 3-28 리소스 컨트롤러 연결하기

// routes/web.php

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);


// 예제 3-29 API 리소스 컨트롤러 바인딩

// routes/api.php

use App\Http\Controllers\TaskController;

Route::apiResource('tasks', TaskController::class);


// 예제 3-30 __invoke() 메서드를 사용하는 방법

// routes/web.php
use App\Http\Controllers\UpdateUserAvatar;

Route::post('users/{user}/update-avatar', UpdateUserAvatar::class);


// 예제 3-31 개별 라우트에서 리소스 획득하기

Route::get('conferences/{id}', function ($id) {
    $conference = Conference::findOrFail($id);
});


// 예제 3-32 묵시적 라우트 모델 바인딩 사용하기

Route::get('conferences/{conference}', function (Conference $conference) {
    return view('conferences.show')->with('conference', $conference);
});


// 예제 3-33 라우트 모델 바인딩에서 사용되는 엘로펀트 모델 키 지정

use App\Models\Post;

Route::get('posts/{post:slug}', function (Post $post) {
    return $post;
}


// 예제 3-34 엘로퀀트 모델을 여러 개 바인딩하면서 연관관계의 쿼리 범위를 지정하는 경우

use App\Models\Post;
use App\Models\User;

Route::get('users/{user}/posts/{post:slug}', function (User $user, Post $post) {

    // $user는 다음의 쿼리를 수행한 결과이다.
    // {user}는 URL 세그먼트 값이다.
    // User::find({user})->first();

    // $post는 다음의 쿼리를 수행한 결과이다.
    // {slug}는 URL 세그먼트 값이다.
    // User::find({user})->posts()->where('slug', {slug})->first();

    return $post;
}


// 예제 3-36 명시적 라우트 모델 바인딩 사용하기

Route::get('events/{event}', function (Conference $event) {
    return view('events.show')->with('event', $event);
});


// 예제 3-40 리다이렉트를 수행하는 여러 방법

// 글로벌 헬퍼 함수를 사용하여 리다이렉트 응답 객체를 생성하는 방법
Route::get('redirect-with-helper', function () {
    return redirect()->to('login');
});

// 글로벌 헬퍼 함수를 짧게 활용하는 방법
Route::get('redirect-with-helper-shortcut', function () {
    return redirect('login');
});

// 퍼사드를 사용하여 리다이렉트 응답 객체를 생성하는 방법
Route::get('redirect-with-facade', function () {
    return Redirect::to('login');
});

// Route::redirect() 메서드를 사용하는 방법
Route::redirect('redirect-by-route', 'login');


// 예제 3-41 redirect()->to()

Route::get('redirect', function () {
    return redirect()->to('home');

    // 또는 동일한 동작을 다음과 같이 사용할 수도 있다.

    return redirect('home');

    // URL /home으로 리다이렉트 하라는 의미가 된다.
});


// 예제 3-42 redirect()->route()

Route::get('redirect', function () {
    return redirect()->route('conferences.index');
});


// 예제 3-43 redirect()->route()에 파라미터 전달하기

Route::get('redirect', function () {
    return redirect()->route('conferences.show', ['conference' => 99]);
});


// 예제 3-44 데이터를 가지고 디라이렉트하기

Route::get('redirect-with-key-value', function () {
    return redirect('dashboard')
        ->with('error', true);
});

Route::get('redirect-with-array', function () {
    return redirect('dashboard')
        ->with(['error' => true, 'message' => 'Whoops!']);
});


// 예제 3-45 사용자 입력 값을 세션에 저장하고 디라이렉트하기

Route::get('form', function () {
    return view('form');
});

Route::post('form', function () {
    return redirect('form')
        ->withInput()
        ->with(['error' => true, 'message' => 'Whoops!']);
});


// 예제 3-46 에러를 포함한 리다이렉트

Route::post('form', function (Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), $this->validationRules);

    if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput();
    }
});


// 예제 3-47 403 Forbidden(권한 없음) 중단 처리

Route::post('something-you-cant-do', function (Illuminate\Http\Request $request) {
    abort(403, '접속 권한이 없습니다!');
    abort_unless($request->has('magicToken'), 403);
    abort_if($request->user()->isBanned, 403);
});
