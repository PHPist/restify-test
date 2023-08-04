<?php

namespace App\Policies;

use App\Models\House;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HousePolicy
{
    use HandlesAuthorization;

    public function allowRestify(User $user = null): bool
    {
        return true;
    }

    public function show(User $user = null, House $model): bool
    {
        return true;
    }

    public function store(User $user): bool
    {
        return false;
    }

    public function storeBulk(User $user): bool
    {
        return false;
    }

    public function update(User $user, House $model): bool
    {
        return false;
    }

    public function updateBulk(User $user, House $model): bool
    {
        return false;
    }

    public function deleteBulk(User $user, House $model): bool
    {
        return false;
    }

    public function delete(User $user, House $model): bool
    {
        return false;
    }
}
