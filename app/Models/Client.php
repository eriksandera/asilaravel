<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Client extends Model
{
    //
    use HasUuids;
    protected $table = 'my_clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'is_project',
        'self_capture',
        'client_prefix',
        'client_logo',
        'address',
        'phone_number',
        'city',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $incrementing = true;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
