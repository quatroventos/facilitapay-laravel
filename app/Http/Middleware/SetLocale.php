<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1); // Obtém o valor do segmento de URL para o idioma

        // Verifica se o idioma é válido ou usa o idioma padrão se não for válido
        $validLocales = ['en', 'es']; // Defina os idiomas válidos
        $locale = in_array($locale, $validLocales) ? $locale : config('app.fallback_locale');

        App::setLocale($locale); // Define o idioma ativo

        return $next($request);
    }
}
