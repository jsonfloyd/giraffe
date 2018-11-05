<?php

namespace App\Policies;

use App\User;
use App\Advertisement;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class AdvertisementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the advertisement.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function view(User $user, Advertisement $advertisement)
    {
        //
    }

    /**
     * Determine whether the user can create advertisements.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
       return true;
    }

    /**
     * Determine whether the user can update the advertisement.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function update(User $user, Advertisement $advertisement)
    {
        return $user->username === $advertisement->author_name;
    }

    /**
     * Determine whether the user can delete the advertisement.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function delete(User $user, Advertisement $advertisement)
    {
        //
    }

    /**
     * Determine whether the user can restore the advertisement.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function restore(User $user, Advertisement $advertisement)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the advertisement.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function forceDelete(User $user, Advertisement $advertisement)
    {
        //
    }
}
