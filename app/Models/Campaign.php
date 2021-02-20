<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Campaign
 * @package App\Models
 * @property-read int id
 * @property string name
 * @property int administrator_id
 * @property-read Carbon created_at
 * @property Carbon updated_at
 * @property User administrator
 */
class Campaign extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'administrator_id',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return BelongsTo
     */
    public function administrator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'administrator_id', 'id');
    }
}
