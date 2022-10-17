// 예제 5-4 마이그레이션에서 컬럼의 인덱스 삭제하기

$table->dropPrimary('contacts_id_primary');
$table->dropUnique('contacts_email_unique');
$table->dropIndex('optional_custom_index_name');

// dropIndex 메서드에 칼럼명을 배열로 전달한다면
// 생성 규칙을 기준으로 인덱스 이름을 추정한다.
$table->dropIndex(['email', 'amount']);
