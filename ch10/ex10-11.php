// 예제 10-11 redirect() 글로벌 헬퍼 사용하기 예제

return redirect('account/payment');
return redirect()->to('account/payment');
return redirect()->route('account.payment');
return redirect()->action('AccountController@showPayment');

// 외부 도메인으로 리다이렉트한다면
return redirect()->away('https://tighten.co');

// 이름이 있는 라우트나 컨트롤러가 라우트 파라미터를 필요로 한다면
return redirect()->route('contacts.edit', ['id' => 15]);
return redirect()->action('ContactController@edit', ['id' => 15]);
