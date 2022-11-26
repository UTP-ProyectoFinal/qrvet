<x-mail::message>
# Alerta!!!

Hola {{ $cliente->v_nombre  }} {{ $cliente->v_apellido }} han encontrado a {{ $paciente->v_nombre }} {{ $paciente->v_apellido }}.
Puedes ponerte en contacto al número {{ $phone }}.

{{ config('app.name') }}
</x-mail::message>
