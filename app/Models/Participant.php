<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 * 
 * @property int $id
 * @property string|null $nom_participant
 * @property string|null $pren_participant
 * @property string|null $mail_participant
 * @property string|null $numero_participant
 * @package App\Models
 */
class Participant extends Model
{
    protected $table = 'participant';
	protected $primaryKey = 'id';

    protected $fillable = [
		'nom_participant',
		'pren_participant',
		'mail_participant',
		'numero_participant'
	];
}
