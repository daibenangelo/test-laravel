<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 * 
 * @property int $subject_id
 * @property string $name
 * @property string $department
 *
 * @package App\Models
 */
class Subject extends Model
{
	protected $table = 'subjects';
	protected $primaryKey = 'subject_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'subject_id' => 'int'
	];

	protected $fillable = [
		'name',
		'department'
	];
}
