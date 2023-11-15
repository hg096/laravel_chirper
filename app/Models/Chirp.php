<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Chirp extends Model
{
    use HasFactory;

    // 데이터 접근 허용 (대량 할당 보호)
    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
