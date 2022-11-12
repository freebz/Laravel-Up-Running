// 예제 12-33 더스크로 아이템 선택하기

<-- 템플릿 -->
<div class="search"><input><button id="search-button"></button></div>
<button dusk="expand-nav"></button>

// 더스크 테스트
// 옵션 1: 제이쿼리 스타일 문법
$browser->click('.search button');
$browser->click('#search-button');

// 옵션 2: dusk="selector-here" 문법: 권장함
$browser->click('@expand-nav');
