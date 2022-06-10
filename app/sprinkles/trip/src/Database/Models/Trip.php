<?php

namespace UserFrosting\Sprinkle\Trip\Database\Models;

use UserFrosting\Sprinkle\Core\Database\Models\Model;

class Trip extends Model
{
    public $timestamps = false;
    /**
     * @var string The name of the table for the current model.
     */
    protected $table = 'trips';

    protected $fillable = [
        'name',
        'type',
        'description',
        'responsible'
    ];

    public function types()
    {
        return $this->belongsToMany(Type::class)->using(TypeLink::class);
    }
}
