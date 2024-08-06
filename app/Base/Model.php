<?php

declare(strict_types=1);

namespace App\Base;

use Illuminate\Support\Facades\Validator;
use MongoDB\Laravel\Eloquent\Model as BaseModel;
use Exception;

abstract class Model extends BaseModel
{
    /**
     * @var string[]|array
     */
    protected static array $fields = [];

    final public function __set($key, $value)
    {
        $this->setAttribute($key, $value);
    }

    public function save(array $options = [])
    {
        $rules = $this->getFieldValidationRules();

        if (count($rules) > 0) {
            Validator::make($this->attributes, $rules)->validate();
        }

        return parent::save($options);
    }

    final public function setAttribute($key, $value)
    {
        $pkField = $this->getKeyName();

        if ($key === $pkField) {
            if ($this->{$pkField}) {
                throw new Exception($key);
            }

            return parent::setAttribute($key, $value);
        }

        if (!in_array($key, static::fields(), true)) {
            throw new Exception($key);
        }

        if ($this->hasSetMutator($key)) {
            return $this->setMutatedAttributeValue($key, $value);
        }

        return parent::setAttribute($key, $value);
    }

    protected static function fields(): array
    {
        return static::$fields;
    }

    protected function getFieldValidationRules(): array
    {
        return [];
    }
}
