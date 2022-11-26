<!-- 예제 15-8 이미지를 이메일에 표시하기 -->

<!-- emails/image.blade.php -->
이미지:

<img src="{{ $message->embed(storage_path('embed.jpg')) }}">

또는 데이터를 포함하는 같은 이미지:

<img src="{{ $message->embedData(
    file_get_contents(storage_path('embed.jpg')), 'embed.jpg'
) }}">
