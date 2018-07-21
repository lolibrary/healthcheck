<?php

namespace Lolibrary\Health\Commands;

use Illuminate\Redis\RedisManager;

class RedisWaitCommand extends WaitCommand
{
    /**
     * The name for this command.
     *
     * @var string
     */
    protected const TYPE = 'redis';

    /**
     * A manager instance for redis.
     *
     * @var \Illuminate\Redis\RedisManager
     */
    protected $redis;

    /**
     * {@inheritdoc}
     */
    public function handle(RedisManager $redis)
    {
        $this->redis = $redis;

        return parent::handle();
    }

    /**
     * Try to connect to the redis database.
     *
     * @param string|null $connection
     * @return bool
     */
    protected function connect(?string $connection): bool
    {
        try {
            $this->redis->connection($connection)->ping();

            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }
}
