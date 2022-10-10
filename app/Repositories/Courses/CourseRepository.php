<?php

namespace App\Repositories\Courses;

use Gomee\Repositories\BaseRepository;
/**
 * validator 
 * 
 */
use App\Validators\Courses\CourseValidator;
use App\Masks\Courses\CourseMask;
use App\Masks\Courses\CourseCollection;
use App\Models\Course;
use Gomee\Helpers\Arr;

class CourseRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = CourseValidator::class;
    /**
     * tên class mặt nạ. Thường có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = CourseMask::class;

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = CourseCollection::class;


    
    /**
     * @var array $sortByRules kiểu sắp xếp
     */
    protected $sortByRules = [
        1 => 'id-DESC',
        2 => 'id-ASC',
        3 => 'title-ASC',
        4 => 'title-DESC',
        5 => 'views-DESC',
        6 => 'rand()'
    ];

    

    /**
     * @var array $defaultSortBy Mảng key value là tên cộ và kiểu sắp xếp
     */
    protected $defaultSortBy = [
        'courses.id' => 'DESC'
    ];

    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Course::class;
    }

    /**
     * lay thong tin chi tiet khoa hoc
     *
     * @param array|int $args
     * @return Course|CourseMask
     */
    public function getCourseDetail($args)
    {
        return $this->with('lessons')->detail($args);
    }

    /**
     * get user option
     * @param Request $request
     * @param array $args
     * @return array
     */
    public function getCourseTagData($request, array $args = [])
    {
        if ($request->ignore && is_array($request->ignore)) {
            $this->whereNotIn('courses.id', $request->ignore);
        }
        if ($list = $this->getFilter($request, $args)) {
            foreach ($list as $item) {
                $data[] = [
                    'id' => $item->id,
                    'name' => htmlentities("$item->name")
                ];
            }
        }
        return $data;
    }

    /**
     * xữ lý trước khi lấy dữ liệu
     *
     * @param array $args
     * @return void
     */
    public function beforeGetData($args = [])
    {

        $a = false;
        foreach ($args as $key => $value) {
            $k = strtolower($key);
            switch ($k) {

                case '@sort':
                case '@sorttype':
                case '@sort_type':
                    if (!$a) {
                        $this->parseSortBy($value);
                        $a = true;
                    }
                    unset($args[$key]);
                    break;

                default:
                    # code...
                    break;
            }
        }


        if (!$this->hasSortby && !isset($args['@orderBy']) && !isset($args['@order_by']) && $this->defaultSortBy && !$a) {
            $this->parseSortBy(1);
        }
        return $args;
    }

    
    /**
     * xử lý order by cho hàm lấy sản phẩm
     *
     * @param array|string $sortBy
     * @return void
     */
    public function parseSortBy($sortBy)
    {
        if (is_array($sortBy)) {
            // truong hop mang toan index la so
            if (Arr::isNumericKeys($sortBy)) {
                foreach ($sortBy as $by) {
                    $this->checkSortBy($by);
                }
            } else {
                foreach ($sortBy as $column => $type) {
                    if (is_numeric($column)) {
                        $this->checkSortBy($type);
                    } else {
                        $this->order_by($column, $type);
                    }
                }
            }
        } else {
            $this->checkSortBy($sortBy);
        }
    }


    /**
     * kiểm tra tính hợp lệ của tham sớ truyền vào
     *
     * @param string $sortBy
     * @param string $type
     * @return void
     */
    protected function checkSortBy($sortBy = null, $type = null)
    {
        if (in_array($sortBy, $this->sortByRules)) {
            $this->orderByRule($sortBy);
        } elseif (array_key_exists($sortBy, $this->sortByRules)) {
            $this->orderByRule($this->sortByRules[$sortBy]);
        } elseif ($sortBy) {
            $this->order_by($sortBy, $type ? $type : 'ASC');
        }
    }


    /**
     * order by rule
     *
     * @param string $rule
     * @return void
     */
    protected function orderByRule($rule)
    {
        if ($rule == 'rand()') {
            $this->orderByRaw($rule);
        } else {
            $a = explode('-', $rule);
            $this->order_by($a[0], $a[1]);
        }
    }
}