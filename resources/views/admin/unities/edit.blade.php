
@extends('layouts.app')

@section('content')
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-lg-12">
<div class="box">
<div class="box-header with-border">
<h3 class="box-title"></h3>
<div class="box-tools pull-right">
<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
</div>
</div>
<!-- /.box-header -->
<div class="box-body">

<div class="row">
<div class="col-lg-10">
<h2>Editar Medida</h2>
<br>
<form class="form-horizontal" method="post" action="{{ url('/admin/unities/'.$unity->id.'/edit') }}">
{{ csrf_field() }}  

<div class="form-group">
<div class="col-lg-6">
<label for="medida" class="control-label">Genero</label>
<input type="text" name="medida" id="medida" class="form-control" value=" {{ $unity->medida }}" >
</div>    
</div>  

<br>
<div class="form-group">
<div class="col-lg-offset-8 col-lg-4">
<button type="submit" class="btn btn-info">Actualizar medida</button>
&nbsp;
<a href="{{ url('/admin/configuration') }}" class="btn btn-default"  > Cancelar </a>
</div>
</div>

</form>

</div>
</div>

</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
@endsection