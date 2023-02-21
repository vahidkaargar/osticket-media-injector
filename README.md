# osticket plugin - media injector

You can add any css and js to page for responsive template or even js for creativity without editing core of code

### Requirement

Before active this plugin do one thing:
Add this code at the bottom of ``main.inc.php``

```php
Signal::send('bootstrap', $ost, $errors);
```