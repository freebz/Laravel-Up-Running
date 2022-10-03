<!-- 예제 4-10 @include를 사용해 개별 템플릿을 포함하는 방법 -->

<!-- resources/views/home.blade.php -->
<div class="content" data-page-name="{{ $pageName }}">
    <p> 지금 바로 웹사이트에 가입하세요!</p>

    @include('sign-up-button', ['text' => '여기를 클릭하세요'])
</div>

<!-- resources/view/sign-up-button.blade.php -->
<a class="button button-callout" data-page-name="{{ $pageName }}">
    <i class="exclamation-icon"></i> {{ $text }}
</a>
