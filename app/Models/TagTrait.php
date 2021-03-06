<?php

namespace App\Models;

trait TagTrait
{

    public static function searchFields()
    {
        return [];
    }

    /**
     * 所有字段
     *
     * @return array
     */
    public static function allFields()
    {
        return [
            'id' => [
                'name'   => '主键',
                'element'=> 'input',
                'attributes' => [
                    'type'     => 'hidden',
                ],
            ],

            'name' => [
                'name'   => '标签名',
                'slots'  => [
                    'table' => true,
                ],
                'detail' => 'slot',
                'rule'   => [
                    'required',
                    'max:10'
                ],
                'element'=> 'input',
                'attributes' => [
                    'type'     => 'text',
                    'required' => 'required',
                ],
            ],

            'sort' => [
                'name'   => '排序',
                'rule'   => [
                    'required',
                    'numeric',
                ],
                'element'=> 'input',
                'attributes' => [
                    'type'     => 'number',
                    'required' => 'required',
                ],
            ],

            'created_at' => [
                'name'   => '创建时间',
                'element'=> 'input',
                'attributes' => [
                    'type'     => 'text',
                    'disabled' => 'disabled',
                ],
            ],

            'updated_at' => [
                'name'   => '更新时间',
                'element'=> 'input',
                'attributes' => [
                    'type'     => 'text',
                    'disabled' => 'disabled',
                ],
            ],
        ];
    }

    /**
     * 列表字段
     * @return array
     */
    public static function tableKeys()
    {
        return [
            'id',
            'name',
            'sort',
            'created_at',
            'updated_at',
        ];
    }

    public static function createKeys()
    {
        return [
            'sort',
            'name',
        ];
    }

    public static function updateKeys()
    {
        return [
            'sort',
            'name',
        ];
    }

    /**
     * 详情字段
     * @return array
     */
    public static function detailKeys()
    {
        return [
            'id',
            'name',
            'sort',
            'created_at',
            'updated_at',
        ];
    }
}