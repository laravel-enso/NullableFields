<?php

namespace LaravelEnso\NullableFields\App\Traits;

trait NullableFields
{
    abstract public function getAttributes();

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
        if (is_array($this->nullable) && count($this->nullable) > 0) {
            return array_intersect_key($attributes, array_flip($this->nullable));
        }

        return [];
    }
}
