<?php

namespace Rossey\Blns;

final class NaughtyString
{
    /**
     * @var string
     */
    private $string = '';

    /**
     * Immutable Object
     */
    private function __construct()
    {
    }

    /**
     * Immutable Object
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function __set($key, $value)
    {
    }

    /**
     * @param string $data
     * @return NaughtyString
     */
    public static function create($data)
    {
        $naughtyString = new self();
        $naughtyString->string = (string)$data;
        return $naughtyString;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->string;
    }
}