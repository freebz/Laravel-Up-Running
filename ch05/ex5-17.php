// 예제 5-17 모델 팩토리 사용하기

$post = factory(Post::class)->create([
    'title' => 'My greatest post ever',
]);

// 조금 더 복잡한 형태의 팩토리 사용
factory(User::class, 20)->create()->each(function ($u) use ($post) {
    $post->comments()->save(factory(Comment::class)->make([
        'user_id' => $u->id,
    ]));
});
