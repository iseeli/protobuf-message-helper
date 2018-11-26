<?php

class ProtobufMessage
{
    const PB_TYPE_DOUBLE = 1;
    const PB_TYPE_FIXED32 = 2;
    const PB_TYPE_FIXED64 = 3;
    const PB_TYPE_FLOAT = 4;
    const PB_TYPE_INT = 5;
    const PB_TYPE_SIGNED_INT = 6;
    const PB_TYPE_STRING = 7;
    const PB_TYPE_BOOL = 7;

    public $values = [];
    /**
     * 解析字符串为protobuf
     * @param string $packed
     * @return ProtobufMessage
     */
    public function parseFromString(string $packed) : self {}

    /**
     * protobuf序列化成字符串
     * @return string
     */
    public function serializeToString() : string {}

    /**
     * @param $name
     * @param $value
     * @return bool
     */
    public function set($name, $value) : bool {}

    /**
     * @param $name
     * @param mixed ...$arg
     * @return mixed
     */
    public function get($name, ...$arg) {}

    /**
     * @param $name
     * @return int
     */
    public function count($name) : int {}

    /**
     * @param $name
     * @return null
     */
    public function clear($name) {}

    /**
     * @param $key
     * @param $value
     * @return null
     */
    public function append($key, $value) {}

    public function reset() {}

    public function printDebugString() {}

    public function dump() {}
}
