<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";
    protected $fillable = ['name', 'lastname', 'telephone', 'direction', 'identy_document', 'email'];
    public $timestamps = true;
}
