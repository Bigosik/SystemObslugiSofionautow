<?php

namespace UserFrosting\Sprinkle\Trip\Database\Models;

use UserFrosting\Sprinkle\Core\Database\Models\Model;

class Application extends Model
{
    public $timestamps = true;

    /**
     * @var string The name of the table for the current model.
     */
    protected $table = 'applications';

    protected $fillable = [
        'who',
        'date',
        'fee',
        'term',
        'discount'
    ];
}
