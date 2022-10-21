<!-- 예제 6-20 __() 헬퍼 함수의 사용 방법 -->

// 일반적인 PHP
<?php echo __('navigation.back'); ?>

// 블레이드 뷰 파일에서 사용
{{ __('navigation.back') }}

// 블레이드 지시어로 사용하기
@lang('navigation.back')
