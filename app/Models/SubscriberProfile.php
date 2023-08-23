<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriberProfile extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'subscriber_profiles';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_SELECT = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    public const ACCOUNT_TYPE_SELECT = [
        '1' => 'Active',
        '2' => 'Subscription Cancel',
        '3' => 'Block',
        '4' => 'Ceased Account',
    ];

    protected $fillable = [
        'user',
        'package_id',
        'business_name',
        'business_address',
        'company_registration_number',
        'subdomain_name',
        'contact_number',
        'status',
        'account_type',
        'remaining_trial_period',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function package()
    {
        return $this->belongsTo(PackageList::class, 'package_id');
    }
}
