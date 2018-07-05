<?php
/**
 * Created by PhpStorm.
 * User: toqua
 * Date: 3/17/2018
 * Time: 11:55 AM
 */

namespace App\Repositories;
use App\Models\Products;


class ProductRepository extends BaseRepository
{
    public function model()
    {
        return Products::class;
    }
}