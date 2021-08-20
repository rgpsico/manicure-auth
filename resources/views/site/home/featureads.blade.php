<section class="featured_ads bg-light">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="title">Manicures Profissionais </h2>
        <h6 class="subtitle">Várias opções aqui encontramos as melhores profissionais do Rio de Janeiro.</h6>
      </div>
    </div>
    <!-- Row  -->
    <div class="row">
      
      
      @foreach ($users as $user)       
    
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="featured-parts rounded m-t-30">
            <a href="show/{{$user->id_user}}">
            <div class="featured-img">
                <img class="img-fluid rounded-top" src="storage/avatars/{{$user->avatar}}" alt="Classified Plus"/>
          
            </div>
            <div class="featured-text">
              <div class="text-top d-flex justify-content-between">
                <div class="heading"> <a href="#">{{$user->name}}</a> </div>
                <div class="book-mark"><a href="#"><i class="fa fa-bookmark"></i></a></div>
              </div>
              <div class="text-stars m-t-5">
                <p>{{$user->Wathasap}}</p>
  
              </div>
              <div class="featured-bottum m-t-30">
                <ul class="d-flex justify-content-between list-unstyled m-b-20">
                  <li><a href="#"><i class="fa fa-map-marker"></i>{{$user->bairro}}</a></li>
  
                </ul>
              </div>
            </div>
          </div>
        </a>
        </div>
        @endforeach


     
        
    </div>



      <button class="view-btn hvr-pulse-grow" type="submit" value="button">Ver Mais</button>
    </div>
  </div>
</section>