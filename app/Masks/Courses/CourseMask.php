<?php

namespace App\Masks\Courses;

use App\Masks\Tags\TagCollection;
use App\Models\Course;
use Gomee\Masks\Mask;

class CourseMask extends Mask
{

    protected $isApplyMeta = false;
    // xem thêm ExampleMask
    /**
     * thêm các thiết lập của bạn
     * ví dụ thêm danh sách cho phép truy cập vào thuộc tính hay gọi phương thức trong model
     * hoặc map vs các quan hệ dữ liệu
     *
     * @return void
     */
    protected function init()
    {
        $this->allow(['getThumbnail', 'getDuetimeLabel', 'getViewUrl', 'priceFormat', 'getMeta', 'getVideo']);
        $this->map([
            'tags' => TagCollection::class,
            'lessons' => LessonCollection::class
        ]);
    }

    /**
     * lấy data từ model sang mask
     * @param Course $course Tham số không bắt buộc phải khai báo. 
     * Xem thêm ExampleMask
     */
    // public function toMask()
    // {
    //     $data = $this->getAttrData();
    //     // thêm data tại đây.
    //     // Xem thêm ExampleMask
    //     return $data;

    // }

    /**
     * sẽ được gọi sau khi thiết lập xong
     *
     * @return void
     */
    protected function onLoaded()
    {
        $this->applyMetadata();
        $this->duetime_label = $this->getDuetimeLabel();
        $this->price_format_text = $this->priceFormat();
        $this->view_url = $this->getViewUrl();
        $this->thumbnail_url = $this->getThumbnail();
        $this->title = $this->name;
    }

    public function onSetupCompleted()
    {
    }

    public function applyMetadata()
    {
        if ($this->isApplyMeta) return;
        $this->isApplyMeta = true;
        if ($meta = $this->getMeta()) {
            foreach ($meta as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }

    public function canViewLessons()
    {
        $user = auth()->user();
        $status = false;
        switch ($this->type) {
            case Course::TYPE_PUBLIC:
                $status = true;
                break;
            case Course::TYPE_FREE:
            case Course::TYPE_PROTECTED:
                if ($user) $status = true;
                break;

            default:
                if ($user && $this->hasUser($user->id)) $status = true;
                break;
        }

        return $status;
    }

    public function isFree()
    {
        return $this->type == Course::TYPE_FREE;
    }

    public function isPremium()
    {
        return $this->type == Course::TYPE_PREMIUM;
    }

    public function isPublic()
    {
        return $this->type == Course::TYPE_PUBLIC;
    }

    public function isProtected()
    {
        return $this->type == Course::TYPE_PROTECTED;
    }



    public function getFullTitle()
    {
        return $this->title . ' | Khóa học | ' . siteinfo('site_name');
    }


    // khai báo thêm các hàm khác bên dưới nếu cần
}
