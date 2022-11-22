// 예제 14-5 간단한 파일 다운로드

public function downloadMyFile()
{
    return Storage::download('my-file.pdf');
}
