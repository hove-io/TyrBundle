Tyr Bundle
==========

Symfony2 bundle which provide a concrete [AbstractTyrService](https://github.com/CanalTP/TyrComponent/blob/master/src/AbstractTyrService.php).

The bundle uses the [TyrComponent](https://github.com/CanalTP/TyrComponent).


## Installation

Install via composer

``` js
{
    "require": {
        "canaltp/tyr-bundle": "1.1.x"
    }
}
```

Updating **AppKernel.php**:

``` php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new CanalTP\TyrBundle\CanalTPTyrBundle(),
        );
    }
```

Updating **app/config.yml**:

``` yml
# Tyr api configuration
canal_tp_tyr:
    url:            %tyr_url%
    end_point_id:   2 # Optional, can also be set with setEndPointId
```

Add parameters in **parameters.yml**:

``` yml
parameters:
    tyr_url: http://tyr.dev.canaltp.fr/v0/
```


## Usage

``` php
// Accessing service
$tyrApi = $container->get('canal_tp_tyr.api');
$tyrApi->setEndPointId(1); // If not set in configuration

// Call api
$user = $tyrApi->getUserByEmail('...');
```


## License

This project is under [GPL-3.0 License](LICENSE).
