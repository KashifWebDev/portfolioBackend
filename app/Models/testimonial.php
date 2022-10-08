<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\testimonial
 *
 * @property int $id
 * @property string $name
 * @property string $picture
 * @property string $feedback
 * @method static \Database\Factories\testimonialFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|testimonial wherePicture($value)
 * @mixin \Eloquent
 */
class testimonial extends Model
{
    public $timestamps = false;
    use HasFactory;
}
