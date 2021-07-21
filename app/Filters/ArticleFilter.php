<?php

namespace App\Filters;

class ArticleFilter extends QueryFilter
{
    public function category_id($id = null)
    {
        return $this->builder->when($id, function($query) use($id){
            $query->where('category_id', $id);
        });
    }
    public function order_by($order_by = null)
    {
        return $this->builder->when($order_by, function($query) use($order_by){
            $query->orderBy('created_at', $order_by);
        });
    }

}
