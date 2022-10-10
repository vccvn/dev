<?php
namespace App\Masks\Courses;

use Gomee\Masks\MaskCollection;

class UserCourseCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return UserCourseMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
