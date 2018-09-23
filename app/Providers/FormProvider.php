<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Form::component('bsTexto', 'components.form.text', ['nombre', 'value' => null, 'attributes' => []]);
      Form::component('bsNumero', 'components.form.integer', ['nombre', 'value' => null, 'attributes' => []]);
      Form::component('bsSubmit', 'components.form.submit', ['value' => 'Enviar', 'attributes' => []]);
      Form::component('bsHidden', 'components.form.hidden', ['nombre', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
