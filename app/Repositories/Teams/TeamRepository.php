<?php

namespace App\Repositories\Teams;

use Gomee\Repositories\BaseRepository;
/**
 * validator 
 * 
 */
use App\Validators\Teams\TeamValidator;
use App\Masks\Teams\TeamMask;
use App\Masks\Teams\TeamCollection;
class TeamRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = TeamValidator::class;
    /**
     * tên class mặt nạ. Thường có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = TeamMask::class;

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = TeamCollection::class;


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Team::class;
    }

}