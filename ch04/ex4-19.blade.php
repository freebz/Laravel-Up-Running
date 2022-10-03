<!-- 예제 4-19 컴포넌트의 별칭 붙이기 -->

// AppServiceProvider@boot
Blade::component('partials.modal', 'modal');

<!-- 템플릿 파일(라라벨6)에서의 사용 -->
@modal
    모달에서 노출할 콘텐츠
@endmodal

<!-- 템플릿 파일(라라벨7)에서의 사용 -->
<x-modal>
    모달에서 노출할 콘텐츠
</x-modal>
