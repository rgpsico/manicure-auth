<section class="categories">
    <div class="container"> 
      <!-- Row  -->
      <div class="row justify-content-center">
        <div class="col-md-7 text-center m-b-10">
          <h2 class="title">Categories</h2>
          <h6 class="subtitle">Explore the greates places in the city.</h6>
        </div>
      </div>
      <!-- Row  -->
      <div class="row">
        <div class="col-md-12">
          <ul class="list-unstyled text-center p-t-30">
              @for($x=0; $x<=9; $x++):
    <li>
        <a href="#"><img src="{{url("assets/site/images/Vehicles.png")}}" alt="Classified Plus"/>   <p> Vehicles </p>
              </a> </li>
           @endfor
          </ul>
        </div>
      </div>
    </div>
  </section>