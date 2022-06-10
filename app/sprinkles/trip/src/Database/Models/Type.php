<?php

namespace UserFrosting\Sprinkle\Trip\Database\Models;

use UserFrosting\Sprinkle\Core\Database\Models\Model;

class Type extends Model
{
    protected $keyType = 'string';

    public $timestamps = false;

    /**
     * @var string The name of the table for the current model.
     */
    protected $table = 'types';

    protected $fillable = [
        'type',
        'description'
    ];

}
