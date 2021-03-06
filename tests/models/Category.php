<?php

use Baum\Node;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Node
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public $timestamps = false;
}

class ScopedCategory extends Category
{
    protected $scoped = ['company_id'];
}

class MultiScopedCategory extends Category
{
    protected $scoped = ['company_id', 'language'];

    protected $fillable = ['name', 'company_id', 'language'];
}

class OrderedCategory extends Category
{
    protected $orderColumn = 'name';

    protected $fillable = ['name'];
}

class OrderedScopedCategory extends Category
{
    protected $scoped = ['company_id'];

    protected $fillable = ['name', 'company_id'];

    protected $orderColumn = 'name';
}

class SoftCategory extends Category
{
    use SoftDeletes;

    public $timestamps = true;

    protected $dates = ['deleted_at'];
}
