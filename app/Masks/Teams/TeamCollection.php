<?php
namespace App\Masks\Teams;

use Gomee\Masks\MaskCollection;

class TeamCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return TeamMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
