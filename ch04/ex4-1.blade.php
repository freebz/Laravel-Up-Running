<!-- 예제 4-1 블레이드 예제 -->

<h1>{{ $group->title }}</h1>
{!! $group->hereImageHtml() !!}

@forelse ($users as $user)
    · {{ $user->first_name }} {{ $user->last_name }}<br>
@empty
    이 그룹에 사용자가 없습니다.
@endforelse
