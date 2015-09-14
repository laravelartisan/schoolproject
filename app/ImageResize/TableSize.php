<?php
/**
 * Created by PhpStorm.
 * User: arif
 * Date: 14-Sep-15
 * Time: 11:07 AM
 */

namespace SchoolSoft\ImageResize;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class TableSize implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        /*return $image->fit(120, 90)->greyscale();*/
        return $image->fit(90, 90)->encode('jpg', 20);
    }
}