<!-- 예제 4-13 블레이드의 스택 기능 사용하기 -->

<!-- resources/views/jobs.blade.php -->
@extends('layouts.app')

@push('scripts')
    <!-- 스택 영역에 노출할 job.css 파일을 추가함 (하단에 추가) -->
    <script src="/css/jobs.css"></script>
@endpush
