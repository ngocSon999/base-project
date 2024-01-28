<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ProductRepoInterface extends BaseRepoInterface
{
    public function getList(): Collection;

    public function getAll();

    public function getDataByCategory($categoryId);

    public function getDataBySlugCategory($slug);
}
