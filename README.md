# shapes
Shapes editor

example of input request:
```php
[
  ['type' => 'circle', 'params' => ['color' => 'red', 'line' => 3]],
  ['type' => 'circle', 'params' => ['color' => 'green', 'line' => 2]]
];
```

example of result for json response object
```php
[{"type":"circle","color":"red","line":3},{"type":"circle","color":"green","line":2}]
```
