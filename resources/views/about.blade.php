@extends('layout.app')
@section('content')
<!-- About
    ================================================== -->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <div class="content">
                <h3>About Me</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 sm-mb-50">
            <div class="box-info">
            <h2>Personal Info</h2>

             <h5 class="mb-30">Hello. My name is <span>Mxolisi</span> . I am 8 years experienced <span>web designer</span>.</h5>

             <h2>Skills & abilities</h2>

             <div class="skills-item mb-30">
                <h4>Web Design</h4>
                <div class="bar">
                  <span class="fill" data-width="92%"></span>
                </div>
                <div class="tip"></div>
              </div>

              <div class="skills-item mb-30">
                <h4>Mobile Applications</h4>
                <div class="bar">
                  <span class="fill" data-width="77%"></span>
                </div>
                <div class="tip"></div>
              </div>

              <div class="skills-item">
                <h4>Web Applications Development</h4>
                <div class="bar">
                  <span class="fill" data-width="95%"></span>
                </div>
                <div class="tip"></div>
              </div>

              <a href="#"><div class="inner-button"><span>Download CV</span></div></a>
            </div>
          </div>

          <div class="col-lg-4  sm-mb-50">
            <div class="box-img cover-bg " data-image-src="img/hero-about.jpg">
              <img src="img/hero-about.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box-text">
              <div class="content">

                <h2>Jobs & Education</h2>

                <div class="owl-carousel">
                  <div class="item-c">
                    <div class="item mb-30">
                      <h4>Creative Director</h4>
                      <span class="meta">10.2011 - 09.2014</span>
                      <h5>Freelance</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="item mb-30">
                      <img src="img/envato.svg" alt="">
                      <span class="meta">09.2016 - 04.2017</span>
                      <h5>Freelancer</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>

                  <div class="item-c">
                    <div class="item mb-30">
                      <h4>Specialization course</h4>
                      <span class="meta">10.2011 - 09.2014</span>
                      <h5>University of studies, Poland, Cracow</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="item mb-30">
                      <h4>Specialization course</h4>
                      <span class="meta">09.2016 - 04.2017</span>
                      <h5>Freelancer</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-12 services mt-70">
            <div class="owl-carousel">
              <div class="services-box box">
                <div class="icon mb-20">
                  <svg class="svg-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496.2 412.8"><title>laptop</title><path d="M200.9,369.9H85.8a9.9,9.9,0,1,0,0,19.8H192.4a22.35,22.35,0,0,0,21,14.7h63.2a22.35,22.35,0,0,0,21-14.7H404.3a9.9,9.9,0,0,0,0-19.8H289.2a9.86,9.86,0,0,0-9.9,9.9V382a2.65,2.65,0,0,1-2.6,2.6H213.5a2.65,2.65,0,0,1-2.6-2.6v-2.2A10,10,0,0,0,200.9,369.9Z" transform="translate(3 -38.7)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M480.3,369.9h-26V141.8a9.9,9.9,0,0,0-19.8,0v238a9.94,9.94,0,0,0,10,9.9h25.9v13.6A25.44,25.44,0,0,1,445,428.7H45.2a25.44,25.44,0,0,1-25.4-25.4V389.7H45.7a9.86,9.86,0,0,0,9.9-9.9v-238a9.9,9.9,0,0,0-19.8,0V369.9H9.9A9.86,9.86,0,0,0,0,379.8v23.5a45.28,45.28,0,0,0,45.2,45.2H445a45.28,45.28,0,0,0,45.2-45.2V379.8A9.86,9.86,0,0,0,480.3,369.9Z" transform="translate(3 -38.7)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M283.6,111.3l-57.1,56.8-19.9-20a9.9,9.9,0,0,0-14,14l26.8,27a10,10,0,0,0,7,2.9,10.19,10.19,0,0,0,7-2.9l64.2-63.8a9.9,9.9,0,0,0-14-14Z" transform="translate(3 -38.7)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="6"/><path d="M367.3,41.7H122.9A36.36,36.36,0,0,0,86.6,78V222.4a36.36,36.36,0,0,0,36.3,36.3h10.3v43.5a14.64,14.64,0,0,0,14.7,14.6,14.35,14.35,0,0,0,11-5.1l45.8-53H367.3a36.36,36.36,0,0,0,36.3-36.3V78A36.36,36.36,0,0,0,367.3,41.7Zm16.5,180.7a16.52,16.52,0,0,1-16.5,16.5H200.1a9.81,9.81,0,0,0-7.5,3.4l-39.7,45.9V248.8a9.86,9.86,0,0,0-9.9-9.9H122.8a16.52,16.52,0,0,1-16.5-16.5V78a16.52,16.52,0,0,1,16.5-16.5H367.2A16.52,16.52,0,0,1,383.7,78V222.4Z" transform="translate(3 -38.7)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/></svg>
                </div>
                <div class="text">
                  <h3>01</h3>
                  <h4 class="box-title mb-20">Web design</h4>
                  <p>Extreme attention to detail is the essence of Boo’s unique design concepts.</p>
                </div>
              </div>

              <div class="services-box box">
                <div class="icon mb-20">
                  <svg class="svg-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 518 459.8"><title>video</title><g id="surface1"><path d="M337.79,345.41a30,30,0,0,0,0-60h-20a30,30,0,0,0,0,60Zm-30-30a10,10,0,0,1,10-10h20a10,10,0,0,1,0,20h-20A10,10,0,0,1,307.79,315.41Z" transform="translate(3 -26)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M222.09,285.41h-96a42,42,0,0,0-42,42v54.17a42.05,42.05,0,0,0,42,42h96a42.05,42.05,0,0,0,42-42V327.41A42,42,0,0,0,222.09,285.41Zm22,96.17a22,22,0,0,1-22,22h-96a22,22,0,0,1-22-22V327.41a22,22,0,0,1,22-22h96a22,22,0,0,1,22,22Z" transform="translate(3 -26)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M507.7,267.4a10,10,0,0,0-9.21-1.14l-85.08,31.91v-2.76a69.32,69.32,0,0,0-65.71-69.14,108.57,108.57,0,1,0-170.84-97.45,68.91,68.91,0,0,0-49.51-20.94,70.82,70.82,0,0,0-8.61.53,10,10,0,0,0,2.49,19.85,48.12,48.12,0,0,1,6.12-.38,49.13,49.13,0,1,1-47.48,36.43,10,10,0,1,0-19.32-5.18,69.14,69.14,0,0,0,23,71.4,69.43,69.43,0,0,0-44.37,54.88h-10A29.28,29.28,0,0,0,0,314.65v19.24a29.28,29.28,0,0,0,29.24,29.24h9.24v50.44a69.31,69.31,0,0,0,69.22,69.24H244.18a10,10,0,0,0,0-20H107.7a49.29,49.29,0,0,1-49.22-49.24V295.41a49.28,49.28,0,0,1,49.22-49.23H344.18a49.29,49.29,0,0,1,49.23,49.23V413.58a49.29,49.29,0,0,1-49.23,49.23h-31a10,10,0,0,0,0,20h31a69.31,69.31,0,0,0,69.23-69.23v-2.76l85.08,31.91A10,10,0,0,0,512,433.37V275.62A10,10,0,0,0,507.7,267.4ZM29.24,343.13A9.25,9.25,0,0,1,20,333.89V314.65a9.25,9.25,0,0,1,9.24-9.24h9.24v37.72ZM285.1,49a88.59,88.59,0,1,1-88.6,88.59A88.69,88.69,0,0,1,285.1,49ZM175.93,226.18a69.19,69.19,0,0,0,17.83-29.91,109.34,109.34,0,0,0,28.6,29.91ZM492,418.94l-78.59-29.47V319.53L492,290.05Z" transform="translate(3 -26)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M284.41,462.81h-.27a10,10,0,0,0,0,20h.27a10,10,0,0,0,0-20Z" transform="translate(3 -26)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M84.39,146.36a10,10,0,0,0,7.27-3.13l.15-.16a10,10,0,1,0-14.43-13.84l-.25.26a10,10,0,0,0,7.26,16.87Z" transform="translate(3 -26)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/></g></svg>
                </div>
                <div class="text">
                    <h3>02</h3>
                  <h4 class="box-title mb-20">Web development</h4>
                  <p>Extreme attention to detail is the essence of Boo’s unique design concepts.</p>
                </div>
              </div>

              <div class="services-box box">
                <div class="icon mb-20">
                  <svg class="svg-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.3 495.4"><title>computer</title><path d="M430.55,85.5H335a9.9,9.9,0,1,0,0,19.8h95.6a19.63,19.63,0,0,1,19.6,19.6V370.7a19.63,19.63,0,0,1-19.6,19.6H59a19.63,19.63,0,0,1-19.6-19.6V124.9A19.63,19.63,0,0,1,59,105.3h97.1a9.9,9.9,0,0,0,0-19.8H59a39.48,39.48,0,0,0-39.4,39.4V370.7A39.48,39.48,0,0,0,59,410.1h175.9v59.5h-82.2a9.9,9.9,0,0,0,0,19.8h184.1a9.9,9.9,0,0,0,0-19.8h-82.2V410.1h175.9a39.48,39.48,0,0,0,39.4-39.4V124.9A39.33,39.33,0,0,0,430.55,85.5Z" transform="translate(-16.55 3)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M300.55,38.9A38.94,38.94,0,0,0,261.65,0h-33.9a38.94,38.94,0,0,0-38.9,38.9V62.2a8.81,8.81,0,0,0,.2,1.7,9.85,9.85,0,0,0-.2,1.7V258.8a9.84,9.84,0,0,0,2,6l45.9,60.3a10,10,0,0,0,15.8,0l45.9-60.3a9.84,9.84,0,0,0,2-6V65.3a8.75,8.75,0,0,0-.2-1.6,7.77,7.77,0,0,0,.2-1.6V38.9Zm-91.8,33.2h26.1V247.5h-26.1Zm36,230.7-27.1-35.6h54.2Zm36-55.3h-26.1V72.1h26.1Zm0-195.2h-72V38.9a19.16,19.16,0,0,1,19.1-19.1h33.9a19.16,19.16,0,0,1,19.1,19.1V52.3Z" transform="translate(-16.55 3)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/></svg>
                </div>
                <div class="text">
                    <h3>03</h3>
                  <h4 class="box-title mb-20">Web development</h4>
                  <p>Extreme attention to detail is the essence of Boo’s unique design concepts.</p>
                </div>
              </div>

              <div class="services-box box">
                <div class="icon mb-20">
                  <svg class="svg-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.3 495.4"><title>computer</title><path d="M430.55,85.5H335a9.9,9.9,0,1,0,0,19.8h95.6a19.63,19.63,0,0,1,19.6,19.6V370.7a19.63,19.63,0,0,1-19.6,19.6H59a19.63,19.63,0,0,1-19.6-19.6V124.9A19.63,19.63,0,0,1,59,105.3h97.1a9.9,9.9,0,0,0,0-19.8H59a39.48,39.48,0,0,0-39.4,39.4V370.7A39.48,39.48,0,0,0,59,410.1h175.9v59.5h-82.2a9.9,9.9,0,0,0,0,19.8h184.1a9.9,9.9,0,0,0,0-19.8h-82.2V410.1h175.9a39.48,39.48,0,0,0,39.4-39.4V124.9A39.33,39.33,0,0,0,430.55,85.5Z" transform="translate(-16.55 3)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/><path d="M300.55,38.9A38.94,38.94,0,0,0,261.65,0h-33.9a38.94,38.94,0,0,0-38.9,38.9V62.2a8.81,8.81,0,0,0,.2,1.7,9.85,9.85,0,0,0-.2,1.7V258.8a9.84,9.84,0,0,0,2,6l45.9,60.3a10,10,0,0,0,15.8,0l45.9-60.3a9.84,9.84,0,0,0,2-6V65.3a8.75,8.75,0,0,0-.2-1.6,7.77,7.77,0,0,0,.2-1.6V38.9Zm-91.8,33.2h26.1V247.5h-26.1Zm36,230.7-27.1-35.6h54.2Zm36-55.3h-26.1V72.1h26.1Zm0-195.2h-72V38.9a19.16,19.16,0,0,1,19.1-19.1h33.9a19.16,19.16,0,0,1,19.1,19.1V52.3Z" transform="translate(-16.55 3)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="6"/></svg>
                </div>
                <div class="text">
                    <h3>04</h3>
                  <h4 class="box-title mb-20">Photography</h4>
                  <p>Extreme attention to detail is the essence of Boo’s unique design concepts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About
    ================================================== -->
@endsection
