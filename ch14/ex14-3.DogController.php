// 예제 14-3 일반적인 사용자 업로드 처리 작업

...
class DogController
{
    public function updatePicture(Request $request, Dog $dog)
    {
        Storage::put(
            "dogs/{$dog->id}",
            file_get_contents($request->file('picture')->getRealPath())
        );
    }
}
