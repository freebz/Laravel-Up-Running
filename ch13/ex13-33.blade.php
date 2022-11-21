<!-- 예제 13-33 모든 Ajax 요청에 라라벨 CSRF 토큰과 X-Requested-With 헤더를 전달하도록 제이쿼리 설정하기 -->

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': "{{ csrf_token() }}",
    'X-Requested-With': 'XMLHttpRequest'
  }
});
