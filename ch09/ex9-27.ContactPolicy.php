// 예제 9-27 update() 메서드 정의

<?php

namespace App\Policies;

class ContactPolicy
{
    public function update($user, $contact)
    {
        return $user->id == $contact->user_id;
    }
}
