<?php
namespace App\Masks\Themes;

use Gomee\Masks\MaskCollection;

class ThemeActiveCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return ThemeActiveMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
