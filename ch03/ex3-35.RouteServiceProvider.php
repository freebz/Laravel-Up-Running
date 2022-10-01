// 예제 3-35 라우트 모델 바인딩 추가하기

public function boot()
{
    // 실행되기 전에 부모 객체의 boot 실행
    parent::boot();

    // 모델 바인딩 추가
    Route::model('event', Conference::class);
}
