# MWE for https://stackoverflow.com/questions/35026153/call-to-undefined-function-pcntl-fork-php-fpm-nginx

I'm trying to use `pcntl_fork()` in php-fpm but it is not available and I get:

    Call to undefined function pcntl_fork()

Even though I've out-commented the `disable_functions` in the `php.ini`. `phpinfo()` shows the author and `php -m` also lists `pcntl`. If I'm executing my script from cli, it works. Is there any other option I need to enable?

As MWE I've prepared a minimal docker environment at https://github.com/white-gecko/pcntl-mwe resp.

    docker pull whitegecko/pcntl-mwe

if you run it with `docker run -it --rm --name pcntl -p 8080:80 pcntl` you will have the example at `http://localhost:8080/` and phpinfo at `http://localhost:8080/phpinfo.php`.
