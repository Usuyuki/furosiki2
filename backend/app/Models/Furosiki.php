<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Furosiki extends Model
{
    use HasFactory;
    protected $fillable = [
        "sentence", "from", "to", "uuid", "is_tategaki", "is_receive", "data_path", "color", "appearance_id",
    ];

    /**
     * Undocumented variable
     *
     * @var array
     */
    public static $rules = array(
        "sentence" => "max:1000",
        "to" => "max:50",
        "from" => "max:50",

    );
    /**
     * DBの関連付け
     *
     * @return BelongsTo
     */
    public function appearance(): BelongsTo
    {
        return $this->belongsTo(Appearance::class);
    }
}