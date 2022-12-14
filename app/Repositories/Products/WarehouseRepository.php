<?php

namespace App\Repositories\Products;

use App\Validators\Products\WarehouseValidator;
use Gomee\Repositories\BaseRepository;

class WarehouseRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = WarehouseValidator::class;
    
    /**
     * @var array $defaultSortBy Mảng key value là twen6 cộ và kiểu sắp xếp
     */
    protected $defaultSortBy = [
        'warehouses.id' => 'DESC'
    ];



    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Warehouse::class;
    }

    public function init()
    {
        $this->setJoinable([
            ['join', 'products', 'products.id', '=', 'warehouses.product_id'],
            ['leftJoin', 'users', 'users.id', '=', 'warehouses.staff_id']
        ]);
        $columns = [
            'product_name' => 'products.name',
            'product_sku' => 'products.sku',
            'staff_name' => 'users.name',
            'staff_email' => 'users.email',
            
        ];
        $this->setSearchable($columns);
        $this->setSortable($columns);
        $this->setWhereable([
            'product_sku' => 'products.sku',
        ]);
        $this->setSelectable(array_merge(['warehouses.*'], $columns));
    }
    /**
     * đếm số lượng trong kho theo product_id và bỏ qua id
     * @param int $product_id
     * @param int $ignore_id
     * @return int 
     */
    public function countProduct($product_id, $ignore_id = 0)
    {
        if($ignore_id) $this->where('id', '!=', $ignore_id);
        return $this->where('product_id', $product_id)->query()->sum('total');
    }

    /**
     * Nhập/xuất kho
     * @param string $action
     * @param int $product_id ID sản phẩm
     * @param int $total Số lượng nhập kho
     * @param string $note ghi chú
     * @param int $staff_id ID nhân viên
     * @return App\Models\Warehouse
     */
    public function log($action, $product_id, $total, $note = '', $staff_id = 0)
    {
        $total = abs($total);
        $type = strtolower($action);
        if($type == 'export') $total = -$total;
        return $this->create(compact('type','product_id', 'total', 'note', 'staff_id'));
    }

    public function beforeSave($data)
    {
        if(array_key_exists('type', $data) && $data['type'] == 'export' && $data['total'] > 0) $data['total'] = -$data['total'];
        return $data;
    }
    

    
}