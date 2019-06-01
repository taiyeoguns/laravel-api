<?php

namespace App\Transformers;

use App\Enums\AddressType;
use App\Models\Address;
use App\Models\User;
use League\Fractal\TransformerAbstract;

class AddressTransformer extends TransformerAbstract
{

    protected $user;

    public function __construct(User $user = null)
    {
        $this->user = $user;
    }

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Address $address)
    {
        $fields = [
            "id" => $address->uuid,
            "text" => $address->text
        ];

        if ($this->user) {
            $addr = $this->user->addresses()->where('address_id', $address->id)->first();
            $fields['type'] = AddressType::getDescription($addr->pivot->type);
        }

        $fields["created"] = $address->created_at->toISO8601String();
        $fields["updated"] = $address->updated_at->toISO8601String();

        return $fields;
    }
}
