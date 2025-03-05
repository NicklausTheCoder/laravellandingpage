<section id="pricing" class="pricing section light-background">
  <center>
    <h2>Pricing</h2>
    <hr style="border: solid ; border-color: #0260c4; width:50px ; border-width:3px ">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi</p>
  </center>
  <div class="container">
    <div class="row g-4 justify-content-center">
      @foreach ($pricingPlans as $plan)
        <div class="col-lg-4">
          <div class="pricing-jutsu {{ $plan->is_popular ? 'popular' : '' }}" style="{{ $plan->is_popular ? 'background: var(--accent-color); color: var(--contrast-color);' : '' }}">
            @if ($plan->is_popular)
              <div class="popular-badge">{{ $plan->popular_badge_text }}</div>
            @endif
            <h3 style="{{ $plan->is_popular ? 'color: white;' : '' }}">{{ $plan->plan_name }}</h3>
            <div class="price">
              <span class="currency">{{ $plan->currency }}</span>
              <span class="amount">{{ $plan->amount }}</span>
              <span class="period">{{ $plan->period }}</span>
            </div><br>
            <p class="description">{{ $plan->description }}</p>
            <h4 style="{{ $plan->is_popular ? 'color: white;' : '' }}">Featured Included:</h4>
            <ul class="features-list">
              @foreach (json_decode($plan->features, true) as $feature)
                <li>
                  <i class="{{ $feature['icon'] }}"></i>
                  <span>{{ $feature['text'] }}</span>
                </li>
              @endforeach
            </ul>
            <a href="#" class="{{ $plan->button_class }}">
              {{ $plan->button_text }}
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<style>
              .pricing-jutsu {
                height: 100%;
                padding: 2rem;
                background: var(--surface-color);
                border-radius: 1rem;
                transition: all 0.3sease;
                position: relative;
              }

              .pricing .pricing-jutsu .features-list {
                list-style: none;
                padding: 0;
                margin: 0 0 2rem 0;
              }

              .pricing .pricing-jutsu .features-list li i {
                color: var(--accent-color);
                margin-right: 0.75rem;
                font-size: 1.25rem;
              }

              .pricing .pricing-jutsu .features-list li {
                display: flex;
                align-items: center;
                margin-bottom: 1rem;
              }

              .pricing .pricing-justu .features-list li i {
                color: var(--accent-color);
                margin-right: 0.75rem;
                font-size: 1.25rem;
              }

              .pricing .pricing-jutsu .btn .btn-primary {
                background: var(--accent-color);
                border: none;
                color: var(--contrast-color);
              }

              .pricing .pricing-jutsu .btn {
                width: 100%;
                padding: 0.75rem 1.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                font-weight: 500;
                border-radius: 50px;
              }

              .pricing .pricing-jutsu .price .amount {
                font-size: 3.5rem;
                font-weight: 700;
                line-height: 1;
              }

              .pricing .pricing-jutsu .popular {
                background: var(--accent-color);
                color: var(--contrast-color);
              }

              .pricing .pricing-jutsu .popular-badge {
                position: absolute;
                top: -12px;
                left: 50%;
                transform: translateX(-50%);
                background: var(--contrast-color);
                color: var(--accent-color);
                padding: 0.5rem 1rem;
                border-radius: 2rem;
                font-size: 0.875rem;
                font-weight: 600;
                box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.08);
              }
            </style>