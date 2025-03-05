<section id="features" class="features section">
  <center>
    <h2>{{ $features[0]->title }}</h2>
    <hr style="border: solid ; border-color: #0260c4; width:50px ; border-width:3px ">
    <p>{{ $features[0]->subtitle }}</p>
  </center>
  <div class="container">
    <div class="d-flex justify-content-center" style="padding-left: 400px;">
      <ul class="nav nav-tabs">
        @foreach ($features as $feature)
          <li class="nav-item">
            <a class="nav-link {{ $loop->first ? 'active show' : '' }}" data-bs-toggle="tab" data-bs-target="#features-tab-{{ $loop->iteration }}">
              <h4>{{ $feature->tab_title }}</h4>
            </a>
          </li>
        @endforeach
      </ul>
    </div>

    <div class="tab-content">
      @foreach ($features as $feature)
        <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="features-tab-{{ $loop->iteration }}">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>{{ $feature->heading }}</h3>
              <p class="fst-italic">{{ $feature->description }}</p>
              <ul>
                @foreach (json_decode($feature->features, true) as $item)
                  <li>
                    <i class="{{ $item['icon'] }}"></i>
                    <span>{{ $item['text'] }}</span>
                  </li>
                @endforeach
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="{{ asset($feature->image) }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section id="features-cards" class="features-cards section">
  <div class="container">
    <div class="row gy-4">
      @foreach ($featureCards as $card)
        <div class="col-xl-3 col-md-6">
          <div class="feature-box" style="background-color: {{ $card->background_color }};">
            <i class="{{ $card->icon }}"></i>
            <h4>{{ $card->title }}</h4>
            <p>{{ $card->description }}</p>
          </div>
        </div><!-- End Feature Box -->
      @endforeach
    </div>
  </div>
</section>