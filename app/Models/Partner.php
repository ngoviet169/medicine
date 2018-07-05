<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partners';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_name',
        'brand_image',
        'address',
        'ward',
        'district',
        'city',
        'home_phone',
        'mobile_phone',
        'facebook',
        'email',
        'business_registration_number',
        'business_registration_image',
        'website',
        'establish_date',
        'registration_image',
        'tax_number',
        'vice_gerent',
        'contact_name',
        'contact_home_phone',
        'contact_mobile_phone',
        'contact_email',
        'password',
        'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
