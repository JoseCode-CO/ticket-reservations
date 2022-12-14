<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";
    protected $fillable = ['name_event', 'description', 'category', 'unit_price', 'number_tickets', 'number_tickets_availables', 'number_tickets_unavailable'];
    public $timestamps = true;
}
