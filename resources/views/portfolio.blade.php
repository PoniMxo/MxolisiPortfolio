
@extends('layout.app')

@section('content')
<!-- portfolio
    ================================================== -->
    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
          <div class="row">

          <div class="col-12">
            <div class="section-title-2">
              <div class="line"></div>
              <div class="text">
                <p>My Recent Work</p>
                <h3>My Work</h3>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="filtering mb-50">
              <button type="button" data-filter='*' class="active">All</button>
              <button type="button" data-filter='.brand'>Brand</button>
              <button type="button" data-filter='.web'>Design</button>
              <button type="button" data-filter='.photo'>Photo</button>
            </div>
          </div>

          <!-- gallery -->
          <div class="gallery ohidden no-padding col-12">

            <div class="col-lg-4 col-md-6 video web mb-30">
              <div class="item-img">
                <a class="single-image" href="img/portfolio/1.jpg"></a>
                <div class="part-img">
                  <img src="img/portfolio/1.jpg" alt="image">
                  <div class="overlay-img">
                    <h4>Web</h4>
                    <h6>Creative Design</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 brand mb-30">
              <div class="item-img">
                <a class="single-image" href="img/portfolio/2.jpg"></a>
                <div class="part-img">
                  <img src="img/portfolio/2.jpg" alt="image">
                  <div class="overlay-img">
                    <h4>Web</h4>
                    <h6>Creative Design</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 photo web mb-30">
              <div class="item-img video">
                <a class="single-image" href="img/portfolio/3.jpg"></a>
                <div class="part-img">
                  <img src="img/portfolio/3.jpg" alt="image">
                  <div class="overlay-img">
                    <h4>Web</h4>
                    <h6>Creative Design</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 brand photo sm-mb-30">
              <div class="item-img video">
                <a class="single-image" href="img/portfolio/4.jpg"></a>
                <div class="part-img">
                  <img src="img/portfolio/4.jpg" alt="image">
                  <div class="overlay-img">
                    <h4>Web</h4>
                    <h6>Creative Design</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 video sm-mb-30">
              <div class="item-img video">
                <a class="single-image" href="img/portfolio/5.jpg"></a>
                <div class="part-img">
                  <img src="img/portfolio/5.jpg" alt="image">
                  <div class="overlay-img">
                    <h4>Web</h4>
                    <h6>Creative Design</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 photo">
              <div class="item-img video">
                <a class="single-image" href="img/portfolio/6.jpg"></a>
                <div class="part-img">
                  <img src="img/portfolio/6.jpg" alt="image">
                  <div class="overlay-img">
                    <h4>Web</h4>
                    <h6>Creative Design</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </section>
      <!-- End portfolio
      ================================================== -->
@endsection


