<h3>Fornecedor</h3>


{{ 'Texto de teste' }}
<?= 'Texto de Teste' ?>

{{-- Aqui fica o comentário que será desconsiderado pelo interpretador --}}

@php

  // Para comentários dentro de um bloco php
  /*
   outros comentários
   de mais de uma linha
   */
  echo "Dentro do bloco php do blade";

@endphp

{{-- @dd($fornecedores); --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
   <h3> Existem fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
   <h3>Existemm vários fornecedores Cadastrados</h3>
@else
   <h3>Nao Existem fornecedores cadastrados</h3>
@endif

{{-- @unless executa se o retorno for falso --}}
Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
Satatus:    {{ $fornecedores[0]['status'] }} <br>
@if($fornecedores[0]['status'] == 'Ativo')
   Fornecedor Ativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'Ativo')
   Fornecedor Inativo
@endunless
<br>
@isset($fornecedores)
   Fornecedor: {{ $fornecedores[1]['nome'] }} <br>
   Status: {{ $fornecedores[1]['status'] }}  <br>
   CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não informado'}}

@endisset
