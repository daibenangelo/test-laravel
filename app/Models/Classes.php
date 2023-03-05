<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Class
 * 
 * @property int $class_id
 * @property string $room
 * @property string $schedule
 * @property int $subject_id
 * @property int $faculty_id
 *
 * @package App\Models
 */
class Classes extends Model
{
	protected $table = 'classes';
	protected $primaryKey = 'class_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'class_id' => 'int',
		'subject_id' => 'int',
		'faculty_id' => 'int'
	];

	protected $fillable = [
		'room',
		'schedule',
		'subject_id',
		'faculty_id'
	];
}