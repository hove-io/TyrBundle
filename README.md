Tyr Bundle
==========

Symfony2 bundle which provide a [TyrService](https://github.com/CanalTP/TyrComponent/blob/master/src/TyrService.php).

The bundle uses the [TyrComponent](https://github.com/CanalTP/TyrComponent).


## Composer

Install via composer

``` js
{
    "require": {
        "CanalTP/TyrBundle": "1.x"
    }
}
```


## Usage

``` php
// Accessing service
$tyrApi = $container->get('canal_tp_tyr.api');

// Call api
$user = $tyrApi->getUserByEmail('...');
```


## License

This project is under [GPL-3.0 Lisense](LICENSE).
