<!-- 예제 4-13 블레이드의 스택 기능 사용하기 -->

<!-- resources/views/jobs/apply.blade.php -->
@extends('jobs')

@prepend('scripts')
    <!-- 스택 영역에 노출할 jobs--apply.css 파일을 추가함 (상단에 추가) -->
    <script src="/css/jobs--apply.css"></script>
@endprepend
