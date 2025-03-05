<section id="hero" class="hero">
    <br><br><br><br><br>
    <div class="container">
        <div class="hero-content">
            <div class="company-badge">
                <i class="bi bi-gear-fill me-2"></i>
                {{ $hero->company_badge }}
            </div>
            <h1>
                {{ $hero->heading_line1 }} <br>
                {{ $hero->heading_line2 }} <br>
                <span class="accent-text">{{ $hero->accent_text }}</span>
            </h1>
            <p>
                {{ $hero->description }}
            </p>
            <div class="hero-buttons">
                <a href="{{ $hero->primary_button_link }}" class="btn btn-primary">
                    {{ $hero->primary_button_text }}
                </a>
                <a href="{{ $hero->secondary_button_link }}" class="btn btn-link">
                    <i class="bi bi-play-circle me-1"></i>
                    {{ $hero->secondary_button_text }}
                </a>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset($hero->hero_image) }}" alt="Hero Image">
            <div class="customers-stuff">
                <div class="customer-avatars">
                    @foreach (json_decode($hero->customer_avatars) as $avatar)
                        <img src="{{ asset($avatar) }}" alt="Customer Avatar" class="avatar">
                    @endforeach
                    <span class="avatar more">12+</span>
                </div>
                <p>{{ $hero->customer_text }}</p>
            </div>
        </div>
    </div>
</section>
<style>
      .abacio {
        background-color: #fff;
        /* Card background */
        border-radius: 8px;
        /* Rounded corners */
        padding: 20px;
        /* Inner padding */
        transition: box-shadow 0.3s ease;
        /* Smooth transition for shadow */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Initial shadow for elevation */
      }

      .abacio:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Shadow when hovered */
      }

      .about .image-wrapper .experience-badge {
        position: absolute;
        bottom: 5%;
        right: 5%;
        background-color: var(--accent-color);
        color: var(--contrast-color);
        padding: 1.5rem;
        border-radius: 0.5rem;
        text-align: center;
        min-width: 200px;

      }
    </style>

<div class="padd" style="padding:19px 250px ">
      <div class="row stats-row gy-4 mt-5 aos-init aos-animate abacio">


        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-trophy"></i>
            </div>
            <div class="stat-content">
              <h4>3x Won Awards</h4>
              <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-briefcase"></i>
            </div>
            <div class="stat-content">
              <h4>6.5k monthly Visitors</h4>
              <p class="mb-0">Nullam quis ante</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-graph-up"></i>
            </div>
            <div class="stat-content">
              <h4>80k Views</h4>
              <p class="mb-0">Etiam sit amet orci</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-award"></i>
            </div>
            <div class="stat-content">
              <h4>6x Following</h4>
              <p class="mb-0">Vestibulum ante ipsum</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>

    </section><!-- /Hero Section -->
