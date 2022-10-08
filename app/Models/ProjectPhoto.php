<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectPhoto
 *
 * @property int $id
 * @property int $project_id
 * @property string $picture
 * @property int $is_cover
 * @property-read \App\Models\Project $project
 * @method static \Database\Factories\ProjectPhotoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereIsCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereProjectId($value)
 * @mixin \Eloquent
 */
class ProjectPhoto extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
