<?php

namespace App\Models;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Core extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Summary of setting
     * @return BelongsTo
     */
    public function setting(): BelongsTo
    {
        return $this->belongsTo(Setting::class);
    }
}
