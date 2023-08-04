<?php

namespace App\Policies;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApartmentPolicy
{
    use HandlesAuthorization;

    public function allowRestify(User $user = null): bool
    {
        return true;
    }

    public function show(User $user = null, Apartment $model): bool
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

    public function update(User $user, Apartment $model): bool
    {
        return false;
    }

    public function updateBulk(User $user, Apartment $model): bool
    {
        return false;
    }

    public function deleteBulk(User $user, Apartment $model): bool
    {
        return false;
    }

    public function delete(User $user, Apartment $model): bool
    {
        return false;
    }
}
