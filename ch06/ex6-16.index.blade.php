<!-- 예제 6-16 템플릿에서 페이지 링크 렌더링하기 -->

// posts/index.blade.php
<table>
@foreach ($posts as $post)
    <tr><td>{{ $post->title }}</td></tr>
@endforeach
</table>

{{ $posts->links() }}

// 기본적으로 $posts->links() 메서드를 호출하면 내용이 출력된다. 결과는 생략.
