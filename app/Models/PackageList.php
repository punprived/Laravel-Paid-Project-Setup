<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PackageList extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'package_lists';

    protected $appends = [
        'tutorial_guide',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const TRIAL_PERIODS_SELECT = [
        '30' => '30',
        '45' => '45',
        '60' => '60',
        '90' => '90',
    ];

    public const CURRENCY_SELECT = [
        'USD' => 'US Dollar',
        'EUR' => 'Euro',
        'GBP' => 'British Pound Sterling',
        'AUD' => 'Australian Dollar',
        'CAD' => 'Canadian Dollar',
    ];

    protected $fillable = [
        'package_name',
        'description',
        'package_price',
        'default_selected',
        'currency',
        'color_code',
        'trial_periods',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function packagePackageItems()
    {
        return $this->hasMany(PackageItem::class, 'package_id', 'id');
    }

    public function getTutorialGuideAttribute()
    {
        return $this->getMedia('tutorial_guide');
    }
}
