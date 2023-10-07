<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estimate extends Model
{
    use HasFactory;
    protected $fillable = [
        'daily_rate', 'overtime_rate', 'extra_charge',
        'accomodation_fee', 'traveling_fee', 'other_fee',
        'other_fee_remarks', 'total_fee', 'remarks',
        'project_id'];

        public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
