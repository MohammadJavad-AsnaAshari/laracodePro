<?php

namespace App\Helpers\Cart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;
use Ramsey\Collection\Collection;

/**
 * @method static bool has($id);
 * @method static Collection all();
 * @method static array get($key);
 * @method static Cart put(array $value, Model $obj = null);
 */
class Cart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "cart";
    }
}
