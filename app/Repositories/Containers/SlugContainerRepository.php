<?php

namespace App\Repositories\Containers;

use Gomee\Repositories\BaseRepository;
/**
 * validator 
 * 
 */
use App\Validators\Containers\SlugContainerValidator;
use App\Masks\Containers\SlugContainerMask;
use App\Masks\Containers\SlugContainerCollection;
class SlugContainerRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = SlugContainerValidator::class;
    /**
     * tên class mặt nạ. Thường có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = SlugContainerMask::class;

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = SlugContainerCollection::class;


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\SlugContainer::class;
    }

}