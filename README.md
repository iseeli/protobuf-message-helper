# protobuf-message-ide-helper

## 相关PHP扩展
[allegro/php-protobuf](https://github.com/allegro/php-protobuf.git)


## 安装使用(仅在开发环境中使用即可)
```bash
composer require ruoge3s/protobuf-message-helper --dev
```

## 消息转换

```php

const PROTOBUF_TYPES = [1, 2, 3, 4, 5, 6, 7, 8];

/**
 * 把protobuf消息对象转换为数组进行存储
 * @param ProtobufMessage $message
 * @return array
 */
function message2array(\ProtobufMessage $message)
{
    $data = [];
    foreach ($message->fields() as $f) {
        $name   = preg_replace_callback('/([-_]+([a-z]{1}))/i', function($matches){
            return strtoupper($matches[2]);
        },'get_' . $f['name']);
        $value  = $message->$name();
        if (in_array($f['type'], PROTOBUF_TYPES)) {
            $data[$f['name']] = $value;
        } else {
            if (is_array($value)) {
                foreach ($value as $son) {
                    $data[$f['name']][] = $this->message2array($son);
                }
            } else {
                $data[$f['name']] = $value ? $this->message2array($value) : null;
            }

        }
    }
    return $data;
}
```



## 证书
[MIT](./LICENSE)
