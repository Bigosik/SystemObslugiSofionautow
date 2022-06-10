<?php

namespace UserFrosting\Sprinkle\Trip\Database\Models;

use UserFrosting\Sprinkle\Core\Database\Models\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TypeLink extends Pivot
{
    public $timestamps = false;

    /**
     * @var string The name of the table for the current model.
     */
    protected $table = 'type_links';

    protected $fillable = [
        'type',
        'trip'
    ];

}
