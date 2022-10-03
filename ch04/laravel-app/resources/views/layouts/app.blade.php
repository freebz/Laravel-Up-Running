<!-- 예제 4-13 블레이드의 스택 기능 사용하기 -->

<!-- resources/views/layouts/app.blade.php -->
<html>
<head><!-- 헤더 부분 --></head>
<body>
    <!-- 페이지의 다른 부분  -->
    <script src="/css/global.css"></script>
    <!-- 필요한 스크립트가 추가되어 출력됨 -->
    @stack('scripts')
</body>
</html>
`