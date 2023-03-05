<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentsPhoto
 * 
 * @property int $student_id
 * @property string|null $image
 *
 * @package App\Models
 */
class StudentsPhoto extends Model
{
	protected $table = 'students_photos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'student_id' => 'int'
	];

	protected $fillable = [
		'student_id',
		'image'
	];
}
