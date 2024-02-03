<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    protected $table = 'services';

    use HasFactory;

    protected $guarded = [];

    public function engineer(): BelongsTo
    {
        return $this->belongsTo(Engineer::class);
    }
}
