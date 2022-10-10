<?php

namespace App\Repositories\Courses;

use Gomee\Repositories\BaseRepository;
/**
 * validator 
 * 
 */
use App\Validators\Courses\LessonValidator;
use App\Masks\Courses\LessonMask;
use App\Masks\Courses\LessonCollection;
use App\Models\Lesson;

class LessonRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = LessonValidator::class;
    /**
     * tên class mặt nạ. Thường có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = LessonMask::class;

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = LessonCollection::class;


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Lesson::class;
    }

    public function init()
    {
        $this->setWith('course');
    }
    
    /**
     * lay thong tin chi tiet khoa hoc
     *
     * @param array|int $args
     * @return Lesson|LessonMask
     */
    public function getLessonDetail($args)
    {
        return $this->with(['metadatas'])->detail($args);
    }


}