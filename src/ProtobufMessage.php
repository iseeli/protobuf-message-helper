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
    const PB_TYPE_BOOL = 8;

    public $values = [];
    /**
     * parse packed string to protobuf object
     * @param string $packed
     * @return ProtobufMessage
     */
    public function parseFromString(string $packed) : self {
        return $this;
    }

    /**
     * serialize protobuf object to packed string
     * @return string
     */
    public function serializeToString() : string {
        return;
    }

    /**
     * set attribute value
     * @param $name
     * @param $value
     * @return bool
     */
    public function set($name, $value) : bool {
        return true;
    }

    /**
     * get value by attribute name
     * @param $name
     * @param mixed ...$arg
     * @return mixed
     */
    public function get($name, ...$arg) {
        return;
    }

    /**
     * 计数数组类型的成员属性的数组大小
     * class A extents ProtobufMessage
     * {
     *      const ARR = 1;
     *      protected static $fields = array(
     *          self::ARR => array(
     *              'name' => 'Name',
     *              'repeated' => true,
     *              'type' => \ProtobufMessage::PB_TYPE_STRING
     *          ),
     *      );
     * }
     * $a = (new A);
     * $a->append(A::ARR, 'test string1');
     * $a->append(A::ARR, 'test string2');
     * echo $a->count(A::ARR); # 2
     * @param $index
     * @return int
     */
    public function count($index) : int {
        return 0;
    }

    /**
     * 根据数组类型的成员属性索引，清空数组中的数据
     * class A extents ProtobufMessage
     * {
     *      const ARR = 1;
     *      protected static $fields = array(
     *          self::ARR => array(
     *              'name' => 'Name',
     *              'repeated' => true,
     *              'type' => \ProtobufMessage::PB_TYPE_STRING
     *          ),
     *      );
     * }
     * $a = (new A);
     * $a->append(A::ARR, 'test string1');
     * $a->append(A::ARR, 'test string2');
     * $a->clear();
     * // $a`s Name will be empty.
     * @param int $index
     */
    public function clear($index) {}

    /**
     * 给protobuf中的某个为数组的成员属性增加一条数据
     * append something to a array that data index has been defined on current class
     * ```
     * class A extents ProtobufMessage
     * {
     *      const ARR = 1;
     *      protected static $fields = array(
     *          self::ARR => array(
     *              'name' => 'ext',
     *              'repeated' => true,
     *              'type' => \ProtobufMessage::PB_TYPE_STRING
     *          ),
     *      );
     * }
     * (new A)->append(A::ARR, 'test string')
     * ```
     * @param int $index Field index
     * @param $value
     * @return null
     */
    public function append(int $index, $value) {
        return null;
    }

    /**
     * TODO What is the function?
     */
    public function reset() {}

    /**
     * 输出protobuf里面的数据
     * output protobuf data like print a string
     * it will be like this
     * ```
     * request_id: "request_id..."
     *     device {
     * device_type: 4
     * }
     * ```
     */
    public function printDebugString() {}

    /**
     * 输出protobuf里面的数据，就像php的var_dump一样打印数据，带命名空间和数据对应的索引
     * output protobuf data like using php`s var_dump() to show data
     * it will be like this
     * ```
     * Test\DemoRequest {
     *   1: request_id => "request_id..."
     *   2: device =>
     *   Test\Device {
     *     1: device_type => 4
     *   }
     * }
     * ```
     */
    public function dump() {}
}
