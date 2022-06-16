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
<br><br><br>


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
<br><br><br>


{{--@for($i = 0; $i < 10; $i++)--}}
{{--    {{ $i }}--}}
{{--@endfor--}}


@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] }}
        <br>
        Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset
<br><br><br>


@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] }}
        <br>
        Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
        @php $i++ @endphp
    @endwhile
@endisset
<br><br><br>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        <br>
        Telefone: ({{ $fornecedo['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse

        @endisset
<br><br><br>


