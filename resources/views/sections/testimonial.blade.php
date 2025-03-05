<section id="clients" class="clients section">
  <div class="container">
    <div class="swiper">
      <div class="swiper-wrapper">
        @foreach ($clients as $client)
          <div class="swiper-slide">
            <img src="{{ asset($client->logo) }}" alt="">
          </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.swiper-slide');
        const totalSlides = slides.length;
        const paginationContainer = document.querySelector('.swiper-pagination');

        function updatePagination() {
          paginationContainer.innerHTML = '';
          slides.forEach((_, index) => {
            const bullet = document.createElement('div');
            bullet.classList.add('bullet');
            bullet.addEventListener('click', () => goToSlide(index));
            if (index === currentIndex) bullet.classList.add('active');
            paginationContainer.appendChild(bullet);
          });
        }

        function goToSlide(index) {
          currentIndex = index;
          const offset = -currentIndex * (100 / Math.min(4, totalSlides)); // Adjust based on visible slides
          document.querySelector('.swiper-wrapper').style.transform = `translateX(${offset}%)`;
          updatePagination();
        }

        setInterval(() => {
          currentIndex = (currentIndex + 1) % totalSlides;
          goToSlide(currentIndex);
        }, 3000); // Adjust time as needed

        updatePagination();
      </script>

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <center>
          <h2>Testimonials</h2>
          <hr style="border: solid ; border-color: #0260c4; width:50px ; border-width:3px ">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi</p>
        </center>
        <style>
          .testimonials .testi {
            background-color: #f3f9ff;
            box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            position: relative;
            height: 100%;
          }

          .testimonials .testi {
            background-color: white;
            box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            position: relative;
            height: 100%;
          }

          .testimonials .testi .testimonial-img {
            width: 90px;
            border-radius: 50px;
            height: 90px;
            border: 6px solid white;
            float: left;
            object-fit: cover;
            margin: 0 10px 0 0;
          }

          .testimonials .testi h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 5px 0;
          }

          .testimonials .testi h4 {
            font-size: 14px;
            color: black;
            margin: 0;
          }

          .testimonials .testi .stars {
            margin: 10px 0;
          }

          .testimonials .testi .stars i {
            color: #c79706;
            margin: 0 1px;
          }

          .testimonials .testi .quote-icon-left,
          .testimonials .testi .quote-icon-right {
            color: lightblue;
            font-size: 36px;
            line-height: 0;
          }

          .testimonials .testi .quote-icon-left {
            display: inline-block;
            left: -5px;
            position: relative;
          }

          .testimonials .testi .quote-icon-right {
            display: inline-block;
            right: -5px;
            position: relative;
            top: 10px;
            transform: scale(-1, -1);
          }

          .testimonials .testi p {
            font-style: italic;
            margin: 15px 0 0 0;
            padding: 0;
          }
        </style>
         <div class="container">
    <div class="row g-5">
      @foreach ($testimonials as $testimonial)
        <div class="col-lg-6">
          <div class="testi">
            <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
            <h3>{{ $testimonial->name }}</h3>
            <h4>{{ $testimonial->position }}</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>{{ $testimonial->quote }}</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->
      @endforeach
    </div>
  </div>
</section>