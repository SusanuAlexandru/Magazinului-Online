<?php

namespace Illuminate\Database\Events;

use Illuminate\Contracts\Database\Events\MigrationEvent as MigrationEventContract;

class DatabaseRefreshed implements MigrationEventContract
{
    /**
     * Create a new event instance.
     *
     * @param  string|null  $database
     * @param  bool  $seeding
     * @return void
     */
    public function __construct(
        public ?string $database = null,
<<<<<<< HEAD
        public bool $seeding = false,
=======
        public bool $seeding = false
>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
    ) {
        //
    }
}
