<?php
namespace App\Masks\Courses;

use Gomee\Masks\MaskCollection;

class LessonCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return LessonMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
