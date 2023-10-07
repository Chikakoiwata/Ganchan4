<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kadouhi extends Model
{
    use HasFactory;
    protected $fillable = 
    ['total_traveling_days',
    'total_working_days',
    'total_holidays',
    'total_overtime_rate',
    'total_extra_charge',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
