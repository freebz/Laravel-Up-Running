// 예제 3-39 CSRF를 위해 헤더에 글로벌 바인딩하기

// jQuery:
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

// Axios: 자동으로 쿠키에서 값을 조회하므로 별도의 처리할 필요 없음
