<?php

namespace App\Models;

use App\Enums\AddressType;
use BenSampo\Enum\Traits\CastsEnums;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use CastsEnums;
    use GeneratesUuid;

    protected $enumCasts = [
        'type' => AddressType::class,
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps()->withPivot('type');
    }
}
