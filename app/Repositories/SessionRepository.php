<?php

namespace App\Repositories;

use App\Models\Session;
use App\Repositories\Base\BaseRepository;

class SessionRepository extends BaseRepository implements ISessionRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected Session $session)
    {
        parent::__construct($session);
    }
}
