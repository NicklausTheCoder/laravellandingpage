<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4 align-items-center justify-content-between">
      <div class="col-xl-5">
        <span class="about-meta">{{ $about->meta }}</span>
        <h2>{{ $about->heading }}</h2>
        <p>{{ $about->description }}</p>

        <div class="row feature-list-wrapper">
          <div class="col-md-6">
            <ul class="feature-list">
              @foreach (json_decode($about->features_left, true) as $feature)
                <li>
                  <i class="{{ $feature['icon'] }}"></i>
                  <span>{{ $feature['text'] }}</span>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="feature-list">
              @foreach (json_decode($about->features_right, true) as $feature)
                <li>
                  <i class="{{ $feature['icon'] }}"></i>
                  <span>{{ $feature['text'] }}</span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="info-wrapper">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="profile d-flex align-items-center gap-3">
                <img src="{{ asset($about->ceo_image) }}" alt="CEO Profile" class="profile-image">
                <div>
                  <h4 class="profile">{{ $about->ceo_name }}</h4>
                  <p class="profile-position">{{ $about->ceo_position }}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="contact-info d-flex align-items-center gap-2">
                <i class="bi bi-telephone-fill"></i>
                <div>
                  <p class="contact-nick">{{ $about->contact_label }}</p>
                  <p class="contact-nicklaus">{{ $about->contact_number }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="image-wrapper">
          <div class="images position-relative">
            <img src="{{ asset($about->main_image) }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
            <img src="{{ asset($about->small_image) }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
          </div>
          <div class="experience-badge">
            <h3>{{ $about->experience_years }} <span>Years</span></h3>
            <p>{{ $about->experience_text }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>