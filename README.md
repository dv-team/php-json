# PHP-JSON-Wrapper

A wrapper-class for json_encode and json_decode to automatically set some constants like JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR

```php
use DvTeam\JSON\JSON;

JSON::stringify(['a' => 123], false); // {"a":123}

JSON::parse('{"a":123}'); // ['a' => 123]
```
