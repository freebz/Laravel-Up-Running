// 예제 7-12 일반적인 파일 업로드 처리 로직

if ($request->hasFile('profile_picture')) {
    $path = $request->profile_picture->store('profiles', 's3');
    auth()->user()->profile_picture = $path;
    auth()->user()->save();
}
