<?php

namespace BinarCode\LaravelThirdParty\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ThirdParty
 * @property string key
 * @property string name
 * @property string description
 * @property string url
 * @property bool active
 * @property bool enabled
 * @property array private_information
 * @property array public_information
 * @property string implementation
 * @package BinarCode\LaravelThirdParty\Models
 */
class ThirdParty extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'private_information',
    ];

    protected $casts = [
        'active' => 'bool',
        'enabled' => 'bool',
        'private_information' => 'json',
        'public_information' => 'json',
    ];

    public function getTable()
    {
        return config('thirdparty.table_name');
    }
}
