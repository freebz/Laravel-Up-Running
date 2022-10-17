// 예제 5-10 모델 팩토리 사용하기

$post = (Post::factory())->create([
    'title' => 'My greatest post ever',
]);

// 조금 더 복잡한 형태의 팩토리 사용
User::factory()->count(20)->create()->each(function ($u) use ($post) {
    $post->comments()->save(Comment::factory()->make(
        [
            'user_id' => $u->id,
            ]
    ));
});
