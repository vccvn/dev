<?php

namespace App\Models;
use Gomee\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    const REF_KEY = 'lesson';
    const TYPE_PUBLIC = 'public';
    const TYPE_PROTECTED = 'protected';
    const TYPE_FREE = 'free';
    const TYPE_PREMIUM = 'premium';
    const TYPE_LIST = [self::TYPE_PUBLIC, self::TYPE_PROTECTED, self::TYPE_FREE, self::TYPE_PREMIUM];
    const TYPE_PRIVACY_LABELS = [
        self::TYPE_PROTECTED => "Bí mật", 
        self::TYPE_PUBLIC => "Công khai"
    ];
    const TYPE_COMMERCE_LABELS = [
        self::TYPE_FREE => "Miễn phí", 
        self::TYPE_PREMIUM => "Trả phí"
    ];


    const TYPE_ALL_LABELS = [
        self::TYPE_PROTECTED => "Bí mật", 
        self::TYPE_PUBLIC => "Công khai", 
        self::TYPE_FREE => "Miễn phí", 
        self::TYPE_PREMIUM => "Trả phí"
    ];


    public $table = 'lessons';
    public $fillable = ['course_id', 'type', 'name', 'slug', 'description', 'content', 'thumbnail_id', 'video_url'];

    
    public static function getPrivacyLabels()
    {
        return self::TYPE_PRIVACY_LABELS;
    }
    public static function getCommerceLabels()
    {
        return self::TYPE_COMMERCE_LABELS;
    }
    /**
     * Get the course that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    /**
     * ket noi voi bang user_meta
     * @return HasMany
     */
    public function metadatas()
    {
        return $this->hasMany(Metadata::class, 'ref_id', 'id')->where('ref', 'lesson');
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

    public function getThumbnail()
    {
        if($this->thumbnail) return $this->thumbnail->getUrl();
        return asset('static/images/default.png');
    }

    public function getCourseName()
    {
        return $this->course?$this->course->name:null;
    }

    /**
     * lay du lieu form
     * @return array
     */
    public function toFormData()
    {
        $this->applyMeta();
        $data = $this->toArray();
        return $data;
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

    

    public function getViewUrl()
    {
        return get_lesson_url($this);
    }
    
    
    public function hasUser($user_id = 0)
    {
        return false;
    }

    
    public function isFree()
    {
        return $this->type == Lesson::TYPE_FREE;
    }
    
    public function isPremium()
    {
        return $this->type == Lesson::TYPE_PREMIUM;
    }

    public function isPublic()
    {
        return $this->type == Lesson::TYPE_PUBLIC;
    }

    public function isProtected()
    {
        return $this->type == Lesson::TYPE_PROTECTED;
    }

}
