<?php
namespace App\Masks\Categories;

use Gomee\Masks\MaskCollection;

class CategoryRefCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return CategoryRefMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
