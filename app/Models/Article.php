<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property int $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $gl_au
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $gl_ac
 * @property-read int|null $gl_ac_count
 */
class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = ['title','content','user_id'];

    // 用户和文章模型关联
     public function gl_au()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    // 文章和评论模型关联
    public function gl_ac()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('created_at','desc');
    }

    // 关联文章和赞模型，判断此文章是否被用户赞过
    public function zan($user_id){
         return $this->hasOne(Zan::class)->where('user_id',$user_id);
    }

    // 获取点赞文章的赞模型
    public function zans(){
         return $this->hasMany(Zan::class);
    }
}
