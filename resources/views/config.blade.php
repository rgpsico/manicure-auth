@extends('layouts.app')

@section('content')

@include('auth._partials.navi')

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Configurações') }}</div>
                    <div class="card-body">   
                        <form action="{{route('configStore')}}" method="POST">
                            @csrf         
                        <div class="form-group">
                            <label for="background">Titulo do Site</label>
                            <input type="text" name="titulodosite" class="form-control" >
                        </div>

                      <div class="form-group">
                            <label for="background">Logo</label>
                            <img src="https://marcas-logos.net/wp-content/uploads/2020/01/Amazon-Logo-1-600x375.png" alt="">
                     
                            <input type="file" name="logo-image">
                         
             
                     </div>

                     <div class="form-group">
                        <label for="slider-01">Slider-01</label>    
                        
                        <input type="file" name="slider-01" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="slider-02">Slider-02</label>    
                        <input type="file" name="slider-02" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="slider-3">Slider-03</label>    
                        <input type="file" name="slider-02" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="instagran">Instagran</label>
                        <input type="text" name="instagran" class="form-control" >
                    </div>
                    <input type="submit"  value="enviar" class="btn-success">
                </form>
                   
                </div>
                <div class="card-footer">footer</div>
            </div>
        </div>
    </div>
</div>
@endsection
