<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $student_id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birthdate
 * @property int $year_level
 * @property string $gender
 * @property string $mobile_number
 * @property string $email_address
 * @property Carbon|null $date_enrolled
 * @property string $province
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';
	protected $primaryKey = 'student_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'student_id' => 'int',
		'year_level' => 'int'
	];

	protected $dates = [
		'birthdate',
		'date_enrolled'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'birthdate',
		'year_level',
		'gender',
		'mobile_number',
		'email_address',
		'date_enrolled',
		'province'
	];
}
