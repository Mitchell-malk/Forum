<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Zan
 *
 * @property int $id
 * @property int $article_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Zan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zan whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zan whereUserId($value)
 * @mixin \Eloquent
 */
class Zan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','article_id'];
}
