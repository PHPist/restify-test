<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable=[
        'owner_id',
        'house_id',
        'number'
    ];

    public function owner():BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function house():BelongsTo
    {
        return $this->belongsTo(House::class);
    }




}
