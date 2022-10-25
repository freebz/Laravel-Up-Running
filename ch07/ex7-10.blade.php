<!-- 예제 7-10 파일 업로드를 위한 입력 폼 -->

<form method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <input type="file" name="profile_picture">
    <input type="submit">
</form>
