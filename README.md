# Simple to use Livewire component for Select2

This is a fork of [jackbayliss/livewire-select2](https://github.com/jackbayliss/livewire-select2)

```bash
composer require curtsheller/livewire-select2
```

Easy to use Livewire component specifically for **Select2**.

Added is the ability to add additional options using to select2 using a `config file: config/livewire-select2`

```
php artisan vendor:publish --tag=livewire-select2-config
```
## Initial Setup
First of all, ensure you install jQuery, and select2- for example, the below. You can also install these via npm and import it into your app.js.

Main thing is ensuring the scripts are included anywhere you want select2 to work.

```html
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

```

## Usage
_see [jackbayliss/livewire-select2](https://github.com/jackbayliss/livewire-select2) for usage._
## Credits

- [Jack Bayliss](https://github.com/jackbayliss)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
