// 예제 5-31 엘로퀀트 인스턴스를 조회하고 update 메서드에 배열을 전달해 수정하기

Contact::where('created_at', '<', now()->subYear())
    ->update(['longevity' => 'ancient']);

// 또는

$contact = Contact::find(1);
$contact->update(['longevity' => 'ancient']);
