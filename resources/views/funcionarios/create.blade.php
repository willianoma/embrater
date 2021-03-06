<head>
  <link href="{{ asset('/css/formfuncionario.css') }}" rel="stylesheet">
</head>
@extends('layout')

@section('header')
<div class="page-header">
  <h1><i class="glyphicon glyphicon-plus"></i> Funcionarios / Create </h1>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">

    <form action="{{ route('funcionarios.store') }}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


      <div class="form-horizontal div-top col-md-12 last-item first-item @if($errors->has('profleimage')) has-error @endif">
       <label for="profleimage-field">Profleimage</label>
       <input type="file" id="profleimage-field" name="profleimage" class="form-control" value="{{ old("profleimage") }}"/>
       @if($errors->has("profleimage"))
       <span class="help-block">{{ $errors->first("profleimage") }}</span>
       @endif
     </div>



     <div class="form-group first-item last-item @if($errors->has('nome')) has-error @endif">
       <label for="nome-field">Nome</label>
       <input type="text" required="" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
       @if($errors->has("nome"))
       <span class="help-block">{{ $errors->first("nome") }}</span>
       @endif

       <!-- 4 Itens -->

     </div>
     <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('posto')) has-error @endif">
       <label for="posto-field">Posto</label>

       <select id="posto-field" name="posto" class="form-control">
        <?php


        foreach ($postos as $key => $value) {
          echo '<option>';
          echo $value->nome;
          echo ' </option>';

        }
        ?>
      </select>

      <!--  <input type="text" id="posto-field" name="posto" class="form-control" value="{{ old("posto") }}"/> -->


      @if($errors->has("posto"))
      <span class="help-block">{{ $errors->first("posto") }}</span>
      @endif
    </div>

    <div class="form-group col-md-3 minimal-padding @if($errors->has('tipo')) has-error @endif">
     <label for="tipo-field">Tipo</label>

     @include('funcionarios.partials.tipoHorario')

     <!--  <input type="text" id="tipo-field" name="tipo" class="form-control" value="{{ old("tipo") }}"/>-->
     @if($errors->has("tipo"))


     <span class="help-block">{{ $errors->first("tipo") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('horario')) has-error @endif">
     <label for="horario-field">Horário</label>

     @include('funcionarios.partials.horarios')

     <!--<input type="text" id="horario-field" name="horario" class="form-control" value="{{ old("horario") }}"/>-->
     @if($errors->has("horario"))

     <span class="help-block">{{ $errors->first("horario") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding last-item  @if($errors->has('status')) has-error @endif">
     <label for="status-field">Status</label>

     @include('funcionarios.partials.statusFuncionario')

     <!--<input type="text" id="status-field" name="status" class="form-control" value="{{ old("status") }}"/>-->
     @if($errors->has("status"))
     <span class="help-block">{{ $errors->first("status") }}</span>
     @endif
   </div>

   <!-- Fim 4 Itens -->

   <!-- 4 Itens -->

   <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('cargo')) has-error @endif">
     <label for="cargo-field">Cargo</label>

     @include('funcionarios.partials.cargoFuncionario')

     <!--<input type="text" id="cargo-field" name="cargo" class="form-control" value="{{ old("cargo") }}"/>-->

     @if($errors->has("cargo"))
     <span class="help-block">{{ $errors->first("cargo") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('funcao')) has-error @endif">
     <label for="funcao-field">Funcao</label>

     @include('funcionarios.partials.funcoesFuncionarios')


     <!-- <input type="text" id="funcao-field" name="funcao" class="form-control" value="{{ old("funcao") }}"/>-->

     @if($errors->has("funcao"))
     <span class="help-block">{{ $errors->first("funcao") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('data_admissao')) has-error @endif">
     <label for="data_admissao-field">Data_admissao</label>
     <input type="date" id="data_admissao-field" name="data_admissao" class="form-control" value="{{ old("data_admissao") }}"/>
     @if($errors->has("data_admissao"))
     <span class="help-block">{{ $errors->first("data_admissao") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('estado_civil')) has-error @endif">
     <label for="estado_civil-field">Estado_civil</label>

     @include('funcionarios.partials.estadoSocial')

     <!--<input type="text" id="estado_civil-field" name="estado_civil" class="form-control" value="{{ old("estado_civil") }}"/>-->
     @if($errors->has("estado_civil"))
     <span class="help-block">{{ $errors->first("estado_civil") }}</span>
     @endif
   </div>

   <!-- Fim 4 itens -->

   <!-- 4 itens -->

   <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('cpf')) has-error @endif">
     <label for="cpf-field">Cpf</label>
     <input type="text" required="" id="cpf-field" name="cpf" class="form-control" value="{{ old("cpf") }}"/>
     @if($errors->has("cpf"))
     <span class="help-block">{{ $errors->first("cpf") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('rg')) has-error @endif">
     <label for="rg-field">Rg</label>
     <input type="text" required="" id="rg-field" name="rg" class="form-control" value="{{ old("rg") }}"/>
     @if($errors->has("rg"))
     <span class="help-block">{{ $errors->first("rg") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('ctps')) has-error @endif">
     <label for="ctps-field">Ctps</label>
     <input type="text" required="" id="ctps-field" name="ctps" class="form-control" value="{{ old("ctps") }}"/>
     @if($errors->has("ctps"))
     <span class="help-block">{{ $errors->first("ctps") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('pis_pasep')) has-error @endif">
     <label for="pis_pasep-field">Pis_pasep</label>
     <input type="text" required="" id="pis_pasep-field" name="pis_pasep" class="form-control" value="{{ old("pis_pasep") }}"/>
     @if($errors->has("pis_pasep"))
     <span class="help-block">{{ $errors->first("pis_pasep") }}</span>
     @endif
   </div>

   <!-- Fim 4 itens -->

   <!-- 4 itens -->

   <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('reservista')) has-error @endif">
     <label for="reservista-field">Reservista</label>
     <input type="text" id="reservista-field" name="reservista" class="form-control" value="{{ old("reservista") }}"/>
     @if($errors->has("reservista"))
     <span class="help-block">{{ $errors->first("reservista") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('titulo_eleitor')) has-error @endif">
     <label for="titulo_eleitor-field">Titulo_eleitor</label>
     <input type="text" id="titulo_eleitor-field" name="titulo_eleitor" class="form-control" value="{{ old("titulo_eleitor") }}"/>
     @if($errors->has("titulo_eleitor"))
     <span class="help-block">{{ $errors->first("titulo_eleitor") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('nascimento')) has-error @endif">
     <label for="nascimento-field">Nascimento</label>
     <input type="date" id="nascimento-field" name="nascimento" class="form-control" value="{{ old("nascimento") }}"/>
     @if($errors->has("nascimento"))
     <span class="help-block">{{ $errors->first("nascimento") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('grau_instrucao')) has-error @endif">
     <label for="grau_instrucao-field">Grau_instrucao</label>

   @include('funcionarios.partials.grauInstrucao')

    <!-- <input type="text" id="grau_instrucao-field" name="grau_instrucao" class="form-control" value="{{ old("grau_instrucao") }}"/> -->

     @if($errors->has("grau_instrucao"))
     <span class="help-block">{{ $errors->first("grau_instrucao") }}</span>
     @endif
   </div>

   <!-- Fim 4 itens -->

   <!-- 4 itens -->

   <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('telefone')) has-error @endif">
     <label for="telefone-field">Telefone</label>
     <input type="text" required="" id="telefone-field" name="telefone" class="form-control" value="{{ old("telefone") }}"/>
     @if($errors->has("telefone"))
     <span class="help-block">{{ $errors->first("telefone") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('email')) has-error @endif">
     <label for="email-field">Email</label>
     <input type="text" id="email-field" name="email" class="form-control" value="{{ old("email") }}"/>
     @if($errors->has("email"))
     <span class="help-block">{{ $errors->first("email") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding @if($errors->has('tipo_sanguineo')) has-error @endif">
     <label for="tipo_sanguineo-field">Tipo_sanguineo</label>
     <input type="text" id="tipo_sanguineo-field" name="tipo_sanguineo" class="form-control" value="{{ old("tipo_sanguineo") }}"/>
     @if($errors->has("tipo_sanguineo"))
     <span class="help-block">{{ $errors->first("tipo_sanguineo") }}</span>
     @endif
   </div>

   <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('deficiencia')) has-error @endif">
     <label for="deficiencia-field">Deficiencia</label>

     <select id="deficiencia-field" name="deficiencia" class="form-control">
      <option id="Nao" value="Nao">Não</option>
      <option id="Sim" value="Sim">Sim</option>
    </select>


    <!--<input type="text" id="deficiencia-field" name="deficiencia" class="form-control" value="{{ old("deficiencia") }}"/> -->

    @if($errors->has("deficiencia"))
    <span class="help-block">{{ $errors->first("deficiencia") }}</span>
    @endif
  </div>


  <!-- Fim 4 itens -->

  <!-- 4 itens -->

  <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('farda')) has-error @endif">
   <label for="farda-field">Farda</label>

   @include('funcionarios.partials.fardas')

   <!--<input type="text" id="farda-field" name="farda" class="form-control" value="{{ old("farda") }}"/>-->

   @if($errors->has("farda"))
   <span class="help-block">{{ $errors->first("farda") }}</span>
   @endif
 </div>

 <div class="form-group col-md-3 minimal-padding @if($errors->has('bota')) has-error @endif">
   <label for="bota-field">Bota</label>
   <input type="text" id="bota-field" name="bota" class="form-control" value="{{ old("bota") }}"/>
   @if($errors->has("bota"))
   <span class="help-block">{{ $errors->first("bota") }}</span>
   @endif
 </div>

 <div class="form-group col-md-3 minimal-padding @if($errors->has('contato_emergencia')) has-error @endif">
   <label for="contato_emergencia-field">Contato_emergencia</label>
   <input type="text" id="contato_emergencia-field" name="contato_emergencia" class="form-control" value="{{ old("contato_emergencia") }}"/>
   @if($errors->has("contato_emergencia"))
   <span class="help-block">{{ $errors->first("contato_emergencia") }}</span>
   @endif
 </div>


 <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('recebe_vale_transporte')) has-error @endif">
   <label for="recebe_vale_transporte-field">Recebe_vale_transporte</label>

   <select id="recebe_vale_transporte-field" name="recebe_vale_transporte" class="form-control">
    <option id="Nao" value="Nao">Não</option>
    <option id="Sim" value="Sim">Sim</option>
  </select>


  <!--<input type="text" id="recebe_vale_transporte-field" name="recebe_vale_transporte" class="form-control" value="{{ old("recebe_vale_transporte") }}"/> -->
  @if($errors->has("recebe_vale_transporte"))
  <span class="help-block">{{ $errors->first("recebe_vale_transporte") }}</span>
  @endif
</div>


<!-- Fim 4 itens -->

<!-- 2 itens -->

        <div class="form-group col-md-6 minimal-padding first-item @if($errors->has('endereco')) has-error @endif">
            <label for="endereco-field">Endereço Completo (Logradouro, N, Bairro, Cidade-Estado. Complemento)</label>
            <input type="text" required="" id="endereco-field" name="endereco" class="form-control"
                   value="{{ old("endereco") }}"/>
            @if($errors->has("endereco"))
                <span class="help-block">{{ $errors->first("endereco") }}</span>
            @endif
        </div>
{{--Arrumar isso no futuro--}}
        <div class="form-group col-md-3 minimal-padding @if($errors->has('filiacaopai')) has-error @endif">
            <label for="filiacao-pai-field">Nome do Pai</label>
            <input type="text" id="filiacao-pai-field" name="filiacaopai" class="form-control" value="{{ old("filiacaopai") }}"/>
            @if($errors->has("filiacaopai"))
                <span class="help-block">{{ $errors->first("filiacaopai") }}</span>
            @endif
        </div>

        <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('filiacaomae')) has-error @endif">
            <label for="filiacao-mae-field">Nome da Mãe</label>
            <input type="text" id="filiacao-mae-field" name="filiacaomae" class="form-control" value="{{ old("filiacaomae") }}"/>
            @if($errors->has("filiacao"))
                <span class="help-block">{{ $errors->first("filiacaomae") }}</span>
            @endif
        </div>

<!-- Fim 2 itens -->


<!-- 2 itens -->


<div class="form-group col-md-6 minimal-padding first-item @if($errors->has('nome_conjuge')) has-error @endif">
 <label for="nome_conjuge-field">Nome_conjuge</label>
 <input type="text" id="nome_conjuge-field" name="nome_conjuge" class="form-control" value="{{ old("nome_conjuge") }}"/>
 @if($errors->has("nome_conjuge"))
 <span class="help-block">{{ $errors->first("nome_conjuge") }}</span>
 @endif
</div>

<div class="form-group col-md-6 minimal-padding last-item @if($errors->has('filhos')) has-error @endif">
 <label for="filhos-field">Filhos</label>
 <input type="text" id="filhos-field" name="filhos" class="form-control" value="{{ old("filhos") }}"/>
 @if($errors->has("filhos"))
 <span class="help-block">{{ $errors->first("filhos") }}</span>
 @endif
</div>

<!-- Fim 2 itens -->

<!-- 4 itens -->

<div class="form-group col-md-3 minimal-padding first-item @if($errors->has('banco_tipo')) has-error @endif">
 <label for="banco_tipo-field">Banco_tipo</label>

         @include('funcionarios.partials.bancosTipoConta')


 <!--<input type="text" id="banco_tipo-field" name="banco_tipo" class="form-control" value="{{ old("banco_tipo") }}"/>-->

 @if($errors->has("banco_tipo"))
 <span class="help-block">{{ $errors->first("banco_tipo") }}</span>
 @endif
</div>

<div class="form-group col-md-3 minimal-padding @if($errors->has('banco')) has-error @endif">
 <label for="banco-field">Banco</label>

 @include('funcionarios.partials.bancos')

 <!--<input type="text" id="banco-field" name="banco" class="form-control" value="{{ old("banco") }}"/>-->
 @if($errors->has("banco"))
 <span class="help-block">{{ $errors->first("banco") }}</span>
 @endif
</div>

<div class="form-group col-md-3 minimal-padding @if($errors->has('banco_conta')) has-error @endif">
 <label for="banco_conta-field">Banco_conta</label>
 <input type="text" required="" id="banco_conta-field" name="banco_conta" class="form-control" value="{{ old("banco_conta") }}"/>
 @if($errors->has("banco_conta"))
 <span class="help-block">{{ $errors->first("banco_conta") }}</span>
 @endif
</div>

<div class="form-group col-md-3 minimal-padding last-item @if($errors->has('banco_agencia')) has-error @endif">
 <label for="banco_agencia-field">Banco_agencia</label>
 <input type="text" required="" id="banco_agencia-field" name="banco_agencia" class="form-control" value="{{ old("banco_agencia") }}"/>
 @if($errors->has("banco_agencia"))
 <span class="help-block">{{ $errors->first("banco_agencia") }}</span>
 @endif
</div>

<!-- Fim 4 itens -->

<!-- 4 itens -->

<div class="form-group col-md-3 minimal-padding first-item @if($errors->has('cbo')) has-error @endif">
 <label for="cbo-field">Cbo</label>
 <input type="text" id="cbo-field" name="cbo" class="form-control" value="{{ old("cbo") }}"/>
 @if($errors->has("cbo"))
 <span class="help-block">{{ $errors->first("cbo") }}</span>
 @endif
</div>

<div class="form-group col-md-3 minimal-padding @if($errors->has('aso')) has-error @endif">
 <label for="aso-field">Aso</label>
 <input type="text" id="aso-field" name="aso" class="form-control" value="{{ old("aso") }}"/>
 @if($errors->has("aso"))
 <span class="help-block">{{ $errors->first("aso") }}</span>
 @endif
</div>

<div class="form-group col-md-3 minimal-padding @if($errors->has('referencia')) has-error @endif">
 <label for="referencia-field">Referencia</label>
 <input type="text" id="referencia-field" name="referencia" class="form-control" value="{{ old("referencia") }}"/>
 @if($errors->has("referencia"))
 <span class="help-block">{{ $errors->first("referencia") }}</span>
 @endif
</div>

<div class="form-group col-md-3 minimal-padding last-item @if($errors->has('preenchida_por')) has-error @endif">
 <label for="preenchida_por-field">Preenchida_por</label>
 <input type="text" id="preenchida_por-field" readonly="" name="preenchida_por" readonly="" class="form-control" value="{{ Auth::user()->name }}"/>
 @if($errors->has("preenchida_por"))
 <span class="help-block">{{ $errors->first("preenchida_por") }}</span>
 @endif
</div>

<!-- Fim 4 itens -->

<div class="form-group col-md-12 first-item last-item @if($errors->has('obs')) has-error @endif">
 <label for="obs-field">Obs</label>
 <input type="text" id="obs-field" name="obs" class="form-control" value="{{ old("obs") }}"/>
 @if($errors->has("obs"))
 <span class="help-block">{{ $errors->first("obs") }}</span>
 @endif
</div>

<div class="well well-sm">
  <button type="submit" class="btn btn-primary">Create</button>
  <a class="btn btn-link pull-right" href="{{ route('funcionarios.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
</div>
</form>

</div>
</div>
@endsection