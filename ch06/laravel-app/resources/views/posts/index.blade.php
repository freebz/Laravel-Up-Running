<!-- 예제 6-16 템플릿에서 페이지 링크 렌더링하기 -->

<table>
@foreach ($posts as $post)
    <tr><td>{{ $post->title }}</td></tr>
@endforeach
</table>

{{ $posts->links() }}
