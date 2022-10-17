// 예제 5-3 마이그레이션에서 컬럼에 인덱스 추가하기

// 칼럼이 생성된 뒤에 수행한다.
$table->primary('primary_id'); // 기본 키, increments()를 사용한다면 불필요하다.
$table->primary(['first_name', 'last_name']); // 복합 키를 구성하는 경우
$table->unique('email'); // 유니크 인덱스 설정
$table->unique('email', 'optional_custom_index_name'); // 이름을 지정한 유니크 인덱스
$table->index('amount'); // 기본적인 인덱스
$table->index('amount', 'optional_custom_index_name'); // 이름을 지정한 기본적인 인덱스
