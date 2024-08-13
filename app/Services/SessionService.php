<?php

namespace App\Services;

use App\Repositories\ISessionRepository;
use App\Services\Base\BaseService;

class SessionService extends BaseService
{
    public function __construct(protected ISessionRepository $sessionRepository)
    {
        parent::__construct($sessionRepository);
    }
}
