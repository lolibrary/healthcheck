<?php

namespace Lolibrary\Health\Commands;

use Illuminate\Database\DatabaseManager;

class DatabaseWaitCommand extends WaitCommand
{
    /**
     * The name for this command.
     *
     * @var string
     */
    protected const TYPE = 'db';

    /**
     * A manager instance for the database.
     *
     * @var \Illuminate\Database\DatabaseManager
     */
    protected $db;

    /**
     * {@inheritdoc}
     */
    public function handle(DatabaseManager $db)
    {
        $this->db = $db;

        return parent::handle();
    }

    /**
     * Try to connect to the database.
     *
     * @param string|null $connection
     * @return bool
     */
    protected function connect(?string $connection): bool
    {
        try {
            $pdo = $this->db->connection($connection)->getPdo();

            return $pdo !== null;
        } catch (\Throwable $e) {
            return false;
        }
    }
}
