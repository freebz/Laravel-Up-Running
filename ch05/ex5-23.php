// 예제 5-23 간단한 트랜잭션

DB::transaction(function () use ($userId, $numVotes) {
    // 실패할 가능성이 있는 DB 쿼리
    DB::table('users')
        ->where('id', $userId)
        ->update(['votes' => $numVotes]);

    // 위의 쿼리가 실패하면 실행되지 않는 쿼리
    DB::table('votes')
        ->where('user_id', $userId)
        ->delete();
});
