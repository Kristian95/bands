<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bands';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'location', 'description'
    ];
}
