<?php

namespace App\Validators\Courses;

use App\Models\Lesson;
use Gomee\Validators\Validator as BaseValidator;

class LessonValidator extends BaseValidator
{
    public function extends()
    {
        $this->addRule('check_slug', function($prop, $value){
            if(is_null($value)) return true;
            if($this->custom_slug){
                return $this->checkUniqueProp($prop, $value);
            }
            return true;
        });

        $this->addRule('check_type', function($prop, $value){
            if(is_null($value)) return true;
            return in_array(strtolower($value), Lesson::TYPE_LIST);
        });

        
        $this->addRule('check_file', function($prop, $value){
            if(!$value) return true;
            if($file = get_media_file(['id' => $value])) return true;
            return false;
        });

    }

    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
    
        return [
            
            'course_id' => 'required|exists:courses,id',
            'type' => 'check_type',
            'name' => 'required|string:150',
            'slug' => 'check_slug',
            'custom_slug'                      => 'mixed',
            'description' => 'max:300',
            'content' => 'mixed',
            'thumbnail_id' => 'check_file',
            'video_url' => 'mixed',
        ];
    }

    /**
     * các thông báo
     */
    public function messages()
    {
        return [
            
            'course_id.*' => 'Khóa học Không hợp lệ',
            'type.*' => 'type Không hợp lệ',
            'name.*' => 'name Không hợp lệ',
            'slug.*' => 'slug Không hợp lệ',
            'description.*' => 'description Không hợp lệ',
            'content.*' => 'content Không hợp lệ',
            'thumbnail_id.*' => 'thumbnail_id Không hợp lệ',
            'video_url.*' => 'video_url Không hợp lệ',

        ];
    }
}