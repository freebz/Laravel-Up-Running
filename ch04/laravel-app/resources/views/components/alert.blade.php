<!-- 예제 4-22 컴포넌트의 태그 $attributes 속성 -->

<!-- resources/views/components/alert.blade.php -->
<div class="alert alert-{{ $type }}" {{ $attributes }} >
    {{ $message }}
</div>
