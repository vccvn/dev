<?php

namespace App\Models;
use Gomee\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    const REF_KEY = 'course';
    const TYPE_PUBLIC = 'public';
    const TYPE_PROTECTED = 'protected';
    const TYPE_FREE = 'free';
    const TYPE_PREMIUM = 'premium';
    const TYPE_LIST = [self::TYPE_PUBLIC, self::TYPE_PROTECTED, self::TYPE_FREE, self::TYPE_PREMIUM];
    const TYPE_PRIVACY_LABELS = [self::TYPE_PROTECTED => "Bí mật", self::TYPE_PUBLIC => "Công khai"];
    const TYPE_COMMERCE_LABELS = [self::TYPE_FREE => "Miễn phí", self::TYPE_PREMIUM => "Trả phí"];


    const TYPE_ALL_LABELS = [self::TYPE_PROTECTED => "Bí mật", self::TYPE_PUBLIC => "Công khai", self::TYPE_FREE => "Miễn phí", self::TYPE_PREMIUM => "Trả phí"];

    const TIME_UNIT_LABELS = [
        'second' => 'giây'
    ];


    public $table = 'courses';
    public $fillable = ['type', 'name', 'slug', 'description', 'content', 'thumbnail_id', 'video_url', 'price', 'metadata'];

    public $casts = [
        'metadata' => 'json'
    ];

    protected $isApplyMeta = false;

    public static function getPrivacyLabels()
    {
        return self::TYPE_PRIVACY_LABELS;
    }
    public static function getCommerceLabels()
    {
        return self::TYPE_COMMERCE_LABELS;
    }
    

    
    public function getTypeText()
    {
        return array_key_exists($this->type, self::TYPE_ALL_LABELS) ? self::TYPE_ALL_LABELS[$this->type]:'';
    }

    /**
     * Get all of the lessons for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'course_id', 'id');
    }

    /**
     * Get the thumbnail that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thumbnail(): BelongsTo
    {
        return $this->belongsTo(File::class, 'thumbnail_id', 'id');
    }

    
    public function courseTags()
    {
        return $this->hasMany(TagRef::class, 'ref_id', 'id')->where('tag_refs.ref', self::REF_KEY);
    }

    public function tags()
    {
        return $this->courseTags()->join('tags', 'tag_refs.tag_id', '=', 'tags.id')->select('tags.name', 'tags.keyword', 'tags.slug');
    }


    public function hasUser($user_id = 0)
    {
        return false;
    }

    public function getThumbnail()
    {
        if($this->thumbnail) return $this->thumbnail->getUrl();
        return asset('static/images/default.png');
    }
    
    public function getMeta()
    {
        $meta = $this->metadata?(is_array($this->metadata)?$this->metadata:json_decode($this->metadata, true)):[];
        return $meta;
    }
    public function applyMetadata()
    {
        if($this->isApplyMeta) return;
        $this->isApplyMeta = true;
        if($meta = $this->getMeta()){
            foreach ($meta as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }

    public function getDuetimeLabel()
    {
        $this->applyMetadata();
        return $this->duetime .' '. __('datetime.'.$this->duetime_unit);
    }

    /**
     * lay du lieu form
     * @return array
     */
    public function toFormData()
    {
        $data = $this->toArray();
        
        if($meta = $this->getMeta()){
            foreach ($meta as $key => $value) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function priceFormat()
    {
        return get_currency_format($this->price);
    }



    public function getViewUrl()
    {
        return get_course_url($this);
    }

    
    /**
     * get video url
     *
     * @return Arr|null
     */
    public function getVideo()
    {
        if ($video = $this->video_url) {
            return get_video_from_url($video);
        }
        return null;
    }

    
    public function isFree()
    {
        return $this->type == self::TYPE_FREE;
    }
    
    public function isPremium()
    {
        return $this->type == self::TYPE_PREMIUM;
    }

    public function isPublic()
    {
        return $this->type == self::TYPE_PUBLIC;
    }

    public function isProtected()
    {
        return $this->type == self::TYPE_PROTECTED;
    }


}
