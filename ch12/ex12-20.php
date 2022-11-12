// 예제 12-20 스토리지 페이크를 사용하여 스토리지와 파일 업로드 테스트하기

public function test_package_screenshot_upload()
{
    Storage::fake('screenshots');

    // 가짜 이미지 업로드
    $response = $this->postJson('screenshots', [
        'screenshot' => UploadedFile::fake()->image('screenshot.jpg'),
    ]);

    // 파일이 저장됐는지 확인
    Storage::disk('screenshots')->assertExists('screenshot.jpg');

    // 혹은 파일이 존재하지 않는지 확인
    Storage::disk('screenshots')->assertMissing('missing.jpg');
}
