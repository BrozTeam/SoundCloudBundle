SoundCloudBundle
================

A Symfony2 Wrapper for the ise/php-soundcloud Composer package for PHP

Installation
------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require broz/sound-cloud-bundle:dev-master
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Broz\SoundCloudBundle\BrozSoundCloudBundle(),
        );

        // ...
    }

    // ...
}
```

### Step 3: Configure the bundle

``` yaml
# app/config/config.yml
# you will get these parameters form https://soundcloud.com/you/apps/[app_name]/edit"
broz_sound_cloud:
    client_id:
    client_secret:
```
