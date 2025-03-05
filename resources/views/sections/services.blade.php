<style>
        .services .service-card .icon {
          width: 60px;
          height: 60px;
          margin-right: 30px;
          background:
            color-mix(in srgb, #0d83fd, transparent 90%);
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 8px;
          color: #0d83fd;
          font-size: 28px;
          transition: all 0.3sease;
          line-height: 1;
        }
      </style>

<section id="services" class="services section light-background">
  <center>
    <h2>Services</h2>
    <hr style="border: solid ; border-color: #0260c4; width:50px ; border-width:3px ">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi</p>
  </center>
  <div class="container">
    <div class="row g-4">
      @foreach ($services as $service)
        <div class="col-lg-6">
          <div class="service-card d-flex">
            <div class="icon flex-shrink-0">
              <i class="{{ $service->icon }}"></i>
            </div>
            <div>
              <h3>{{ $service->title }}</h3>
              <p>{{ $service->description }}</p>
              <a href="{{ $service->link }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div><!-- End Service Card -->
      @endforeach
    </div>
  </div>
</section>