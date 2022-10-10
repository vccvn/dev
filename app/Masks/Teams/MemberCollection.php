<?php
namespace App\Masks\Teams;

use Gomee\Masks\MaskCollection;

class MemberCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return MemberMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
