// 예제 3-37 폼 메서드 스푸핑

<form action="/tasks/5" method="POST">
    // 직접 _method hidden 타입을 추가하거나
    <input type="hidden" name="_method" value="DELETE">
    // @method 지시어를 사용하여 정의할 수 있다.
    @method('DELETE')
</form>
