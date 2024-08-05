<?php

declare(strict_types=1);

namespace App\Models;

use App\Base\Model;
use MongoDB\Laravel\Eloquent\Casts\ObjectId;

/**
 * Class Medal
 * @property ObjectId $_id
 * @property int $Year
 * @property string $City
 * @property string $Sport
 * @property string $Discipline
 * @property string $Athlete
 * @property string $Country
 * @property string $Gender
 * @property string $Event
 * @property string $Medal
 */
class Medal extends Model
{
}
