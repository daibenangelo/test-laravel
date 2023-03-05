<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FacultiesEduc
 * 
 * @property int $faculty_id
 * @property bool $has_unders
 * @property string|null $unders_enrolled
 * @property Carbon|null $unders_year_received
 * @property bool $has_masters
 * @property string|null $masters_enrolled
 * @property Carbon|null $masters_year_received
 * @property bool $has_doctors
 * @property string|null $doctors_enrolled
 * @property Carbon|null $doctors_year_received
 * @property int $academe_points
 *
 * @package App\Models
 */
class FacultiesEduc extends Model
{
	protected $table = 'faculties_educ';
	protected $primaryKey = 'faculty_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'faculty_id' => 'int',
		'has_unders' => 'bool',
		'has_masters' => 'bool',
		'has_doctors' => 'bool',
		'academe_points' => 'int'
	];

	protected $dates = [
		'unders_year_received',
		'masters_year_received',
		'doctors_year_received'
	];

	protected $fillable = [
		'has_unders',
		'unders_enrolled',
		'unders_year_received',
		'has_masters',
		'masters_enrolled',
		'masters_year_received',
		'has_doctors',
		'doctors_enrolled',
		'doctors_year_received',
		'academe_points'
	];
}
