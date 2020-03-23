# SimpleUpload

[![Latest Stable Version](https://poser.pugx.org/nabilanam/simpleupload/version)](https://packagist.org/packages/nabilanam/simpleupload)
[![Total Downloads](https://poser.pugx.org/nabilanam/simpleupload/downloads)](https://packagist.org/packages/nabilanam/simpleupload)
[![Latest Unstable Version](https://poser.pugx.org/nabilanam/simpleupload/v/unstable)](//packagist.org/packages/nabilanam/simpleupload)
[![License](https://poser.pugx.org/nabilanam/simpleupload/license)](https://packagist.org/packages/nabilanam/simpleupload)
[![composer.lock available](https://poser.pugx.org/nabilanam/simpleupload/composerlock)](https://packagist.org/packages/nabilanam/simpleupload)

A dead simple and organized file uploader for laravel.

## Installation

Via Composer:
``` bash
$ composer require nabilanam/simpleupload
```
You can publish the config file:
``` bash
php artisan vendor:publish --provider="NabilAnam\SimpleUpload\SimpleUploadServiceProvider"
```
## Usage

``` php
// somewhere in your controller

use NabilAnam\SimpleUpload\SimpleUpload;

public function update(Request $request, Slider $slider,)
{
    (new SimpleUpload)
        ->file($request->image)
        ->dirName('sliders')
        ->resizeImage(600, 100)
        ->deleteIfExists($slider->image)
        ->save();

    return back();
}
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email nabil_code@outlook.com instead of using the issue tracker.

## Credits

- [nabilanam][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/nabilanam/simpleupload.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/nabilanam/simpleupload.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/nabilanam/simpleupload/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/nabilanam/simpleupload
[link-downloads]: https://packagist.org/packages/nabilanam/simpleupload
[link-travis]: https://travis-ci.org/nabilanam/simpleupload
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/nabilanam
[link-contributors]: ../../contributors
