<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer_id',
        'reported_by',
        'reported_date',
        'description',
        'urgency',
        'status'
    ];
    // dinh nghia moi quan he issues vs computer
    public function computer (){
        return $this->belongsTo(Computer::class);
    }
}
