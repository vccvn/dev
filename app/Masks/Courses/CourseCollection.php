<?php
namespace App\Masks\Courses;

use Gomee\Masks\MaskCollection;

class CourseCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return CourseMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
