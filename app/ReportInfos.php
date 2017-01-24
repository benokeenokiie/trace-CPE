<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportInfos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'drivers_name', 'plate_number', 'description',
        'partner_screen_name',
    ];
}
