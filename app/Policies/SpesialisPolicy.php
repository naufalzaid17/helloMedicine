<?php

namespace App\Policies;

use App\Models\customer;
use App\Models\spesialis;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpesialisPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\customer  $customer
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(customer $customer, spesialis $spesialis)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\customer  $customer
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(customer $customer, spesialis $spesialis)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\customer  $customer
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(customer $customer, spesialis $spesialis)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\customer  $customer
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(customer $customer, spesialis $spesialis)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\customer  $customer
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(customer $customer, spesialis $spesialis)
    {
        //
    }
}
