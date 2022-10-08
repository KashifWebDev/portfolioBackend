<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $heading
 * @property string $description
 * @property string $website
 * @property string $tags
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectPhoto[] $photos
 * @property-read int|null $photos_count
 * @method static \Database\Factories\ProjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereWebsite($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function photos(){
        return $this->hasMany(ProjectPhoto::class);
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }
}
