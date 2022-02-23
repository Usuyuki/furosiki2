<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Appearance
 *
 * @property int $id
 * @property string $name 見た目名
 * @property string|null $description 説明
 * @property string $pattern_svg_path 柄のsvgパス
 * @property string $default_bg_color 背景色
 * @property string $default_stroke_color 柄色
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance whereDefaultBgColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance whereDefaultStrokeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appearance wherePatternSvgPath($value)
 */
	class Appearance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Color_parrot
 *
 * @property int $id
 * @property string $name 色名
 * @property string|null $description 説明
 * @property string $bg_color 背景色
 * @property string $stroke_color 柄色
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot whereBgColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color_parrot whereStrokeColor($value)
 */
	class Color_parrot extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Furosiki
 *
 * @property int $id
 * @property string|null $from 送信者名
 * @property string|null $to 受信者名
 * @property string|null $sentence 添文
 * @property string $uuid uuid
 * @property int $is_tategaki 縦書きフラグ
 * @property int $is_receive 受け取りフラグ
 * @property string $data_path データパス
 * @property string $bg_color 背景色
 * @property string $stroke_color 柄色
 * @property int $appearance_id 見た目id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Appearance $appearance
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki query()
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereAppearanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereBgColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereDataPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereIsReceive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereIsTategaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereSentence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereStrokeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Furosiki whereUuid($value)
 */
	class Furosiki extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

