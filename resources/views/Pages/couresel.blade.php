<div id="myCarousel" class="carousel slide couresel_format" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner couresel-align">
      <div class="carousel-item active">
       
        <img src="{{asset('images/1.jpg')}}" class="d-block w-100 image_css" alt="">
      
        <div class="container">
          <div class="carousel-caption">
            <h1>GO SHOPPING WITH US </h1>        
            <p><a class="btn btn-lg btn-primary" href="{{url('dashboard2')}}" role="button">CLICK ME</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <img src="{{asset('images/2.jpg')}}" class="d-block w-100 image_css" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>GO SHOPPING WITH US </h1>       
          <p><a class="btn btn-lg btn-primary" href="{{url('dashboard2')}}" role="button">CLICK ME</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
          <img src="{{asset('images/3.jpg')}}" class="d-block w-100 image_css" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>GO SHOPPING WITH US </h1>         
            <p><a class="btn btn-lg btn-primary" href="{{url('dashboard2')}}" role="button">CLICK ME</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


