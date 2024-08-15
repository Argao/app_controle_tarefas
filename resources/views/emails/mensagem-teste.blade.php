@component('mail::message')
# Introdução

O corpo da mensagem.

- Lista 1
- Lista 2
- Lista 3

@component('mail::button', ['url' => ''])
Texto do botão 1
@endcomponent

@component('mail::button', ['url' => ''])
    Texto do botão 2
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
