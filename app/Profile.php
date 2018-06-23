<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 *
 * @package App
 * @property string $profile_picture
 * @property string $name
 * @property string $phone_number
 * @property string $email
 * @property string $faceebook_id
 * @property string $blood_group
 * @property string $status
 * @property string $last_donation
 * @property string $location
 * @property text $details_information
*/
class Profile extends Model
{
    use SoftDeletes;

    protected $fillable = ['profile_picture', 'name', 'phone_number', 'email', 'faceebook_id', 'blood_group', 'status', 'last_donation', 'location', 'details_information'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setLastDonationAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['last_donation'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['last_donation'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getLastDonationAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
}
