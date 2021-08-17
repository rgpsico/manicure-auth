@include('site.template._partials.navi')
    <!-- Modal -->
 
  <!-- End Header  --> 

<!-- breadcrumb -->

<div class="iner_breadcrumb p-t-20 p-b-20" >
  <div class="container">
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb" style="margin-top:120px;">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mobile</li>
      </ul>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Detail_part -->
<section class="detail_part m-t-50">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="detail_box"> 
          <img class="img-fluid img-principal" src="../storage/avatars/{{$users->avatar}}" alt="{{$users->name}}" width="500" height="255">
          <div class="m-t-20">
            <ul class="owl-carousel list-unstyled m-b-0" id="product_slider">
              <li><img class="img-fluid" src="../storage/avatars/{{$users->avatar}}" > </li>
                 @foreach ($album as $image)                    
                    <li style="height:80px; width:100px;"><img class="img-fluid" src="../storage/uploads/{{$image->image}}" width="100" height="80"> </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>

  
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="detail_box">
          <div class="detail_head">
            <h3><br>
               {{ $users->name}} </h3>
            <p>  {{ $users->descricao}} </p>
            <ul class="list-unstyled text-capitalize m-b-0 m-t-15">
      
            </ul>
          </div>
          <ul class="list-unstyled d-inline-block float-left detail_left m-b-0">
            <li>Acre Gel</li>
            <li>unha de Vidro</li>
            <li>Porcelanato</li>           
          </ul>
          <ul class="list-unstyled d-inline-block m-l-40 detail_right  m-b-0">
            <li>Faço</li>
            <li>Faço</li>
            <li>Faço</li>
          </ul>
        
          <div class="detail_bottum m-t-15">
            <div class="row">
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">           
         
            </div>
          </div>
          <div class="detail_prize p-t-10">
            <ul class="list-unstyled">
      
            </ul>
          </div>
          <div class="detail_btn d-flex m-t-20">
            <a href=" https://api.whatsapp.com/send?phone={{$users->Wathasap}}">
                <button class="btn_chat w-100 text-white py-2 border-0" type="submit" value="button"> 
                  <i class="fa fa-phone"></i> Chamar</button>
            </a>  
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<!--End Description -->

<!-- Description -->
<section class="description">
  <div class="container"> 
    
    <!-- Row  -->
    <div class="row justify-content-left">
      <div class="col-md-7 text-left">
        <h2 class="title">Descrição</h2>
      </div>
    </div>
    <!-- Row  -->
    
    <div class="row">
      <div class="col-md-9">
        <div class="description_box">
          {{ $users->descricao}}         
        </div>
      </div>
      <div class="col-md-3">
        <div class="single-sidebar"> 
          <img class="add_img img-fluid" src="{{url("assets/site/images/google_adds2.png")}}" alt="Classified Plus"> </div>
      </div>
    </div>
  </div>
</section>
<!-- End Description --> 

<!-- Top_listings -->

<!-- End top_listings --> 
<br><br>
@include('site.all.footer')

<script>
  $('.img-fluid').click(function(){
     let src = $(this).attr('src');
     $('.img-principal').attr('src',src);          

    
  
  })
</script>