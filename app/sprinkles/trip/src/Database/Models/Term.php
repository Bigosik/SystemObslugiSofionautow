<?php

namespace UserFrosting\Sprinkle\Trip\Database\Models;

use UserFrosting\Sprinkle\Core\Database\Models\Model;

class Term extends Model
{
    public $timestamps = false;

    /**
     * @var string The name of the table for the current model.
     */
    protected $table = 'terms';

    protected $fillable = [
        'length',
        'start',
        'end',
        'cost'
    ];
}
