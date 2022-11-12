<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class NotifierTest extends TestCase
{
    public function test_notifier_notifies_admins()
    {
        $slackMock = Mockery::mock(SlackClient::class)->shouldIgnoreMissing();

        $notifier = new Notifier($slackMock);
        $notifier->notifyAdmins('Test message');
    }
}
