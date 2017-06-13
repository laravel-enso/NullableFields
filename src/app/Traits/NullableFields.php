<?php

namespace LaravelEnso\NullableFields\app\Traits;

trait NullableFields
{
    protected static function bootNullableFields()
    {
        self::saving(function ($model) {
            $model->setNullableFields();
        });
    }

    protected function setNullableFields()
    {
        foreach ($this->nullableFromArray($this->getAttributes()) as $key => $value) {
            $this->attributes[$key] = $this->nullIfEmpty($value);
        }
    }

    public function nullIfEmpty($value)
    {
        return trim($value) === '' ? null : $value;
    }

    protected function nullableFromArray(array $attributes = [])
    {
        return is_array($this->nullable) && !empty($this->nullable)
            ? array_intersect_key($attributes, array_flip($this->nullable))
            : [];
    }
}
