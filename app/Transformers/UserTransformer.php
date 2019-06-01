<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'addresses'
    ];

    public function includeAddresses(User $user)
    {
        $addresses = $user->addresses;

        return $this->collection($addresses, new AddressTransformer($user));
    }

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            "id" => $user->uuid,
            "first_name" => $user->first_name,
            "last_name" => $user->last_name,
            "email" => $user->email,
            "phone" => $user->phone,
            "created" => $user->created_at->toISO8601String(),
            "updated" => $user->updated_at->toISO8601String(),
        ];
    }
}
