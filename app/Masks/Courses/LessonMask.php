<?php
namespace App\Masks\Courses;

use App\Models\Lesson;
use Gomee\Masks\Mask;

class LessonMask extends Mask
{
    
    public $meta = [];

    // xem thêm ExampleMask
    /**
     * thêm các thiết lập của bạn
     * ví dụ thêm danh sách cho phép truy cập vào thuộc tính hay gọi phương thức trong model
     * hoặc map vs các quan hệ dữ liệu
     *
     * @return void
     */
    protected function init(){
        $this->allow(['getThumbnail', 'getViewUrl', 'getVideo']);
    }

    /**
     * lấy data từ model sang mask
     * @param Lesson $lesson Tham số không bắt buộc phải khai báo. 
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
        // $this->applyMeta();
        // $this->view_url = $this->getViewUrl();
        $this->thumbnail_url = $this->getThumbnail();
        $this->title = $this->name;
    }
    
    

    // /**
    //  * gán dự liệu meta cho product
    //  * @return void
    //  */
    // public function applyMeta()
    // {
    //     if (!$this->meta) {
    //         if ($metadatas = $this->relation('metadatas', true)) {
    //             $jsf = $this->model->getJsonFields();
    //             foreach ($metadatas as $m) {
    //                 if (in_array($m->name, $jsf)) {
    //                     $value = json_decode($m->value, true);
    //                 } else {
    //                     $value = $m->value;
    //                     if (($id = str_replace('@mediaid:', '', $value)) != $value && is_numeric($id)) {
    //                         if ($file = get_media_file(['id' => $id])) {
    //                             $value = $file->source;
    //                         } else {
    //                             $value = null;
    //                         }
    //                     }
    //                 }
    //                 $this->data[$m->name] = $value;
    //                 $this->meta[$m->name] = $value;
    //             }
    //         }
    //     } else {
    //         foreach ($this->meta as $key => $value) {
    //             if (($id = str_replace('@mediaid:', '', $value)) != $value && is_numeric($id)) {
    //                 if ($file = get_media_file(['id' => $id])) {
    //                     $value = $file->source;
    //                 } else {
    //                     $value = null;
    //                 }
    //             }
    //             $this->data[$key] = $value;
    //         }
    //     }
    // }


    
    public function canViewDetail()
    {
        $user = auth()->user();
        $status = false;
        switch ($this->type) {
            case Lesson::TYPE_PUBLIC:
                $status = true;
                break;
            case Lesson::TYPE_FREE:
            case Lesson::TYPE_PROTECTED:
                if($user) $status = true;
                break;

            default:
                if($user && $this->hasUser($user->id)) $status = true;
                break;
        }

        return $status;
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


    
    // khai báo thêm các hàm khác bên dưới nếu cần
}