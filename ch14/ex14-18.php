// 예제 14-18 테스트용 가짜 UploadedFile 만들기

public function test_file_should_be_stored()
{
    Storage::fake('public');

    $file = UploadedFile::fake()->image('avatar.jpg');

    $response = $this->postJson('/avatar', [
        'avatar' => $file,
    ]);

    // 파일이 저장됐는지 확인
    Storage::disk('public')->assertExists("avatars/{$file->hashName()}");
    
    // 파일이 없는지 확인
    Storage::disk('public')->assertMissing('missing.jpg');
}
