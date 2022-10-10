<?php

namespace App\Repositories\Courses;

use Gomee\Repositories\BaseRepository;
/**
 * validator 
 * 
 */
use App\Validators\Courses\UserCourseValidator;
use App\Masks\Courses\UserCourseMask;
use App\Masks\Courses\UserCourseCollection;
class UserCourseRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = UserCourseValidator::class;
    /**
     * tên class mặt nạ. Thường có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = UserCourseMask::class;

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = UserCourseCollection::class;


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\UserCourse::class;
    }

}