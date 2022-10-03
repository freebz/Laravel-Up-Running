<!-- 예제 4-20 명령어로 생성한 컴포넌트 뷰 템플릿 사용 -->

<!-- resources/views/components/alert.blade.php -->
<div class="alert alert-danger">
    {{ $slot }}
</div>

<!-- 다른 템플릿 파일에서의 사용 -->
<x-alert>
    주의 사항을 확인하십시오.
</x-alert>
