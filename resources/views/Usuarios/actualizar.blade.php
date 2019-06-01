@extends('layouts.app')
@section('content')
<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <div class="container">

            <header>
                <div class="mb-3 center">
                    <h2 class="form-title text-center text-primary">Actualizar datos</h2>                
                </div>
            </header>

            {!!Form::open(array('url'=>'actualizarp/'.$var1->id,'method'=>'PUT','autocomplete'=>'off'))!!}
  
{{--  {!!Form::label('Nombre: ')!!}  --}}
{!!form::text('name',$var1->name)!!}
<br>
{{--  {!!Form::label('Apellido Paterno: ')!!}  --}}
{!!form::text('apePat',$var1->apePat)!!} 
<br>  
{{--  {!!Form::label('Apellido materno: ')!!}  --}}
{!!form::text('apeMat',$var1->apeMat)!!}
<br>  
{!!form::text('email',$var1->email)!!}

{!!form::submit('Actualizar',[ 'class'=>'btn btn-primary','name'=>'grabar','id'=>'grabar','content'=>'<span>Actualizar</span>'])!!}
{!!Form::close()!!}
            
</div>

</body>
</html>
@endsection

