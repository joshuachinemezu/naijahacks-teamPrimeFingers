<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tester_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tester_userid', 'tester_name',
    ];
}
