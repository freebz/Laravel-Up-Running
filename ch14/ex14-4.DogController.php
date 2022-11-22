// 예제 14-4 Interventation을 사용하는 조금 더 복잡한 파일 업로드

...
class DogController
{
    public function updatePicture(Request $request, Dog $dog)
    {
        $original = $request->file('picture');

        // 이미지의 최대 너비를 150으로 변경
        $image = Image::make($original)->resize(150, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 75);

        Storage::put(
            "dog/thumbs/{$dog->id}",
            $image->getEncoded()
        );
    }
}
