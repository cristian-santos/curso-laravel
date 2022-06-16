<h3>Fornecedor</h3>

{{-- Fica o comentário aqui dentro --}}

{{--@dd($fornecedores)--}}

{{--@if(count($fornecedores) > 0 && count($fornecedores) < 10)--}}
{{--    <h3>Existem alguns fornecedores cadastrados</h3>--}}
{{--@elseif(count($fornecedores) > 10)--}}
{{--    <h3>Existem vários fornecedores cadastrados</h3>--}}
{{--@else--}}
{{--    <h3>Ainda não existem fornecedores cadastrados</h3>--}}
{{--@endif--}}


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
{{--@if($fornecedores[0]['status'] == 'N')--}}
{{--    Fornecedor Inativo--}}
{{--@endif--}}
<br><br>

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset
<br><br>


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}

    @switch($fornecedores[0]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não indentificado
    @endswitch
@endisset
