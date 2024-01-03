<?php
namespace Samuelayo\Contactform;
    use Illuminate\Support\ServiceProvider;
    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {  
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        }
        public function register()
        {
        }
    }
    ?>
