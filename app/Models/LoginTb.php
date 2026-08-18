<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginTb extends Model
{
    use HasFactory;

    // Isinasaad ang eksaktong pangalan ng table sa database
    protected $table = 'login_tb';

    // Primary key
    protected $primaryKey = 'id';

    // Kung walang created_at at updated_at columns sa table
    public $timestamps = false;

    // Mga fields na pwedeng lagyan ng data
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'password',
    ];
}