<!-- 예제 9-24 블레이드의 @cannot 지시어 사용하기 -->

<h1>{{ $contact->name }}</h1>
@cannot('edit-contact', $contact)
    LOCKED
@endcannot
