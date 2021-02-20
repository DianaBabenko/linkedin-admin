<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class CampaignPolicy
{
    use HandlesAuthorization;

    /**
     * @return bool
     */
    public function viewAny(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function view(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function create(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function update(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function delete(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function restore(): bool
    {
        return true;
    }
}
