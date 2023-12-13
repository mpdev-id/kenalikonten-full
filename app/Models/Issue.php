<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    // protected $table = 'issues';
    // Inside your Issue model
    protected $fillable = ['screenshot1', 'screenshot2', 'link', 'detail', 'email', 'status'];

    // protected $fillable = ['status','screenshoot1','screenshoot2','link','detail','email'];
}
