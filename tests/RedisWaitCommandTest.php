<?php

use Lolibrary\Health\Commands\WaitCommand;
use Lolibrary\Health\Commands\RedisWaitCommand as Command;

class RedisWaitCommandTest extends PHPUnit\Framework\TestCase
{
    public function testInstantiatesCorrectly()
    {
        $command = new Command;

        $this->assertInstanceOf(WaitCommand::class, $command);
    }

    public function testHasTheCorrectDescription()
    {
        $command = new Command;

        $description = $command->getDescription();

        $this->assertFalse(str_contains($description, '#TYPE#'));
        $this->assertTrue(str_contains($description, 'redis'));
    }

    public function testSignatureIsCorrect()
    {
        $command = new Command;

        $name = $command->getName();

        $this->assertEquals('wait:redis', $name);
    }
}
