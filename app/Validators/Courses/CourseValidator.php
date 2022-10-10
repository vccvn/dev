<?php

namespace App\Validators\Courses;

use App\Models\Course;
use App\Repositories\Tags\TagRepository;
use Gomee\Validators\Validator as BaseValidator;

class CourseValidator extends BaseValidator
{
    
    /**
     * tags
     *
     * @var TagRepository
     */
    
    public $tags;
    public function extends()
    {
        $this->tags = app(TagRepository::class);
        $this->addRule('check_slug', function ($prop, $value) {
            if (is_null($value)) return true;
            // if(in_array(strtolower($value), ['admin', 'api', 'manager', 'tai-khoan'])) return false;
            if ($this->custom_slug) {
                return $this->checkUniqueProp($prop, $value);
            }
            return true;
        });

        $this->addRule('check_type', function ($prop, $value) {
            if (is_null($value)) return true;
            return in_array(strtolower($value), Course::TYPE_LIST);
        });


        $this->addRule('check_file', function ($prop, $value) {
            if (!$value) return true;
            if ($file = get_media_file(['id' => $value])) return true;
            return false;
        });

        
        // kiểm tra thẻ xem có hợp lệ hay ko
        $this->addRule('check_tags', function($prop, $value){
            if(!$value) return true;
            if($value && !is_array($value)) return false;
            return count($value) == $this->tags->count(['id' => $value]);
        });
    }

    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {

        return [

            'type' => 'check_type',
            'name' => 'required|string:150',
            'slug' => 'check_slug',
            'custom_slug' => 'mixed',
            'description' => 'max:300',
            'content' => 'mixed',
            'thumbnail_id' => 'check_file',
            'video_url' => 'mixed',
            'price' => 'numeric|min:0',
            'start_date' => 'strdate',
            'duetime' => 'numeric|min:0',
            'duetime_unit' => 'mixed',
            "course_level" => 'mixed',
            "user_level" => 'mixed',
            'outpoint' => 'numeric|min:0|max:9.0',
            'tags'                             => 'check_tags',
            "rating_avg" => 'numeric|min:0|max:5',
            "rating_count" => 'numeric|min:0',
            "lesson_count" => 'numeric|min:0',
            "student_count" => 'numeric|min:0'

            
        ];
    }

    /**
     * các thông báo
     */
    public function messages()
    {
        return [

            'type.*' => 'type Không hợp lệ',
            'name.*' => 'name Không hợp lệ',
            'slug.*' => 'slug Không hợp lệ',
            'description.*' => 'description Không hợp lệ',
            'content.*' => 'content Không hợp lệ',
            'thumbnail_id.*' => 'thumbnail_id Không hợp lệ',
            'video_url.*' => 'video_url Không hợp lệ',
            'price.*' => 'price Không hợp lệ',
            'start_date.*' => 'Ngày bắt đầu không hợp lệ',
            'metadata.mixed' => 'metadata Không hợp lệ',

        ];
    }
}
