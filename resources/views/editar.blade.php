@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>{{$user->name}}</h2>
            <img src="../storage/avatars/{{$user->avatar}}" alt="" height="100px" width="100" style="border-radius: 50px">
          
         
            <form action="/editar/update/{{$user->id}}" enctype="multipart/form-data" method="POST" >
                @csrf
                <label for="">Imagem principal</label>
                <input type="file" name="avatar">
                <br>
                <br>
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" name="name" value="{{@$user->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Wathasap:</label>
                    <input type="text" name="Wathasap" value="{{@$DadosModel->Wathasap}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Cep:</label>
                    <input type="text" name="cep" id="cep" value="{{@$DadosModel->cep}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Bairro:</label>
                    <input type="text" name="bairro" value="{{@$DadosModel->bairro}}" class="form-control">
                </div>

               

                <div class="form-group">
                    <label for="">Descrição:</label>
                    <textarea class="form-control" name="descricao">
                        {{@$DadosModel->descricao}}
                    </textarea>
                </div>

                
                <input type="submit" class="pull-right btn btn-sm btn-primary" value="Salvar">            
          
          
            </form>
 
 

        <div class="col-md-10 my-5">
            <form action="/upload_images" enctype="multipart/form-data" method="POST" >
                @csrf
                <input type="file" name="album[]" multiple>
                <input type="submit" class="pull-right btn btn-sm btn-primary" value="upload">            
            </form>            
        </div>
   
        <div class="row">
        
            @foreach ($album as $img)
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"> 
                <img  src="../storage/uploads/{{$img->image}}"    class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />

              <form method="POST" action="image/destroy/{{$img->id}}" class="d-inline" onsubmit="return confirm('Tem certeza que deseja Excluir?')">
                @method('DELETE')
                @csrf
                    <button class="btn btn-sm btn-danger"> Excluir</button>
                </form>
            </div>
            @endforeach
      
          </div>          
        </div>
    </div>
 </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous">


$.getJSON("https://viacep.com.br/ws/"+$('#cep').val()+"/json/?callback=?", function(dados) {
console.log(dados)
});


</script>
@endsection
