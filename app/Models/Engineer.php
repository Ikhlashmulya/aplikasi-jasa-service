<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Engineer extends Model
{
    protected $table = 'engineers';

    use HasFactory;

    protected $guarded = [];

    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
