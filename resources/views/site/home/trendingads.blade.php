<section class="trending_ads">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="title">Trending Ads</h2>
        <h6 class="subtitle">Explore the greates places in the city.</h6>
      </div>
    </div>
    <!-- Row  -->
    <div class="row">

      @for($x=0; $x<=9; $x++)  
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="trending-parts bg-light rounded m-t-30">
          <div class="trending-img"> 
              <img class="img-fluid rounded-top" src="{{url("assets/site/images/Trending-img-1.png")}}" alt="Classified Plus">
            <div class="featured-new"> <a href="#"> Open New </a> </div>
            <div class="trending_hed text-left">
              <h4> Cities Finest Spa </h4>
              <p> Kenny Dr Granada Hills, CA 91344 </p>
            </div>
          </div>


          <div class="trending-text p-t-25 p-b-20 p-l-15 p-r-15">
            <div class="text-top d-flex justify-content-between  m-t-15 p-b-10">
              <div class="trending-left"><a href="#" class="m-r-5"><i class="fa fa-heart-o"></i> 5</a> <a href="#">
                  <i class="fa fa-comment-o"></i> 8</a> </div>
              <div class="trending-right"> <a href="#"> Fashion </a> </div>
            </div>
            <div class="trending-bottum d-flex p-t-15 p-b-10"> <a href="" class="a m-r-15 text-uppercase m-t-5 color_1"> a </a>
              <p> Lorem Ipsum is simply dummy text and of the printing typesetting </p>
            </div>
          </div>
        </div>
      </div>
      
      @endfor
    
    
   
    </div>
      <button class="view-btn hvr-pulse-grow" type="submit" value="button">View all</button>
    </div>
  </div>
</section>