<!-- 예제 4-22 컴포넌트의 태그 $attributes 속성 -->

<!-- resources/views/components/alert.blade.php -->
<div class="alert alert-{{ $type }}" {{ $attributes }} >
    {{ $message }}
</div>

<!-- 다른 템플릿 파일에서의 사용 -->
<x-alert type="error" :message="$message" id="alertId" name="alertName">
</x-alert>

<!-- 출력 결과 -->
<div class="alert alert-error" id="alertId" name="alertName" >
    주의 사항을 확인하십시오.
</div>
