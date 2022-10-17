// 예제 5-34 마이그레이션에서 소프트 삭제 칼럼을 테이블에 추가하기

Schema::table('contacts', function (Blueprint $table) {
    $table->softDeletes();
});
