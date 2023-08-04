<?php

namespace App\Policies;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhonePolicy
{
    use HandlesAuthorization;

    public function allowRestify(User $user = null): bool
    {
        return true;
    }

    public function show(User $user = null, Phone $model): bool
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

    public function update(User $user, Phone $model): bool
    {
        return false;
    }

    public function updateBulk(User $user, Phone $model): bool
    {
        return false;
    }

    public function deleteBulk(User $user, Phone $model): bool
    {
        return false;
    }

    public function delete(User $user, Phone $model): bool
    {
        return false;
    }
}
