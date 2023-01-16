<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $table='matches';
    protected $fillable=[
        'team1',
        'team2',
        'img1',
        'img2',
        'date',
        'groups',
        'scour1',
        'scour2',
    ];
}
