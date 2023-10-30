<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $fillable = [
        'unique_key',
        'soft_delete',
        'date',
        'customername',
        'fathername',
        'husbandname',
        'mobileno',

        'idproofone',
        'proofimage_one',
        'idprooftwo',
        'proofimage_two',
        'address',
        'street',
        'area',
        'city',
        'dateof_site_visit',
        'reference',
    ];
}
