<?php

namespace App\Services;

use App\Repositories\IArticleRepository;
use App\Services\Base\BaseService;

class ArticleService extends BaseService
{
    public function __construct(protected IArticleRepository $articleRepository)
    {
        parent::__construct($articleRepository);
    }
}
