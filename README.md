# Deploy

```bash
git clone https://github.com/GitHub30/yomikata-laravel
cd yomikata-laravel
# For Xserver
#curl -s https://getcomposer.org/installer | php8.3
#alias php=php8.3
#alias composer='php8.3 composer.phar'
composer install
composer run-script post-root-package-install
composer run-script post-create-project-cmd
php artisan serve
```
