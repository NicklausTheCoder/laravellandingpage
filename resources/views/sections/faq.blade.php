<style>
  /*--------------------------------------------------------------

Custom Faq Section
--------------------------------------------------------------*/
.custom-faq .custom-faq-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: var(--heading-color);
}

.custom-faq .custom-faq-description {
  font-size: 1rem;
  color: var(--default-color);
  margin-bottom: 2rem;
}

.custom-faq .custom-faq-arrow {
  color: var(--accent-color);
}

.custom-faq .custom-faq-container .custom-faq-item {
  background-color: var(--surface-color);
  position: relative;
  padding: 20px;
  margin-bottom: 15px;
  border-radius: 10px;
  overflow: hidden;
}

.custom-faq .custom-faq-container .custom-faq-item:last-child {
  margin-bottom: 0;
}

.custom-faq .custom-faq-container .custom-faq-item h3 {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  margin: 0 30px 0 0;
  transition: 0.3s;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.custom-faq .custom-faq-container .custom-faq-item h3 .num {
  color: var(--accent-color);
  padding-right: 5px;
}

.custom-faq .custom-faq-container .custom-faq-item h3:hover {
  color: var(--accent-color);
}

.custom-faq .custom-faq-container .custom-faq-item .custom-faq-content {
  display: grid;
  grid-template-rows: 0fr;
  transition: 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
}

.custom-faq .custom-faq-container .custom-faq-item .custom-faq-content p {
  margin-bottom: 0;
  overflow: hidden;
}

.custom-faq .custom-faq-container .custom-faq-item .custom-faq-toggle {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 16px;
  line-height: 0;
  transition: 0.3s;
  cursor: pointer;
}

.custom-faq .custom-faq-container .custom-faq-item .custom-faq-toggle:hover {
  color: var(--accent-color);
}

.custom-faq .custom-faq-container .custom-faq-active h3 {
  color: var(--accent-color);
}

.custom-faq .custom-faq-container .custom-faq-active .custom-faq-content {
  grid-template-rows: 1fr;
  visibility: visible;
  opacity: 1;
  padding-top: 10px;
}

.custom-faq .custom-faq-container .custom-faq-active .custom-faq-toggle {
  transform: rotate(90deg);
  color: var(--accent-color);
}
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  // Select all FAQ items
  const faqItems = document.querySelectorAll('.custom-faq-item');

  // Add click event listener to each FAQ item
  faqItems.forEach((item) => {
    const toggle = item.querySelector('.custom-faq-toggle');
    const content = item.querySelector('.custom-faq-content');

    toggle.addEventListener('click', () => {
      // Toggle the active class on the clicked item
      item.classList.toggle('custom-faq-active');

      // Close all other FAQ items
      faqItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.classList.remove('custom-faq-active');
        }
      });
    });
  });
});
</script>
      <section class="custom-faq section light-background" id="custom-faq">

        <div class="container">
          <div class="row">
      
            <div class="col-lg-5" data-aos="fade-up">
              <h2 >Have a question? Check out the FAQ</h2>
              <p >Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet
                adipiscing sem neque sed ipsum.</p>
              <div class="custom-faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                <br><br><br>
                <svg class="custom-faq-arrow" width="200" height="50" viewBox="0 0 200 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 25H190M190 25L160 5M190 25L160 45"
                    stroke="currentColor"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
            </div>
      
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
              <div class="custom-faq-container">
      
                <div class="custom-faq-item custom-faq-active">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="custom-faq-content">
                    <p> Obcaecati alias eaque tempore consequuntur magnam. Quaerat fugit voluptas enim asperiores ex soluta, quos dolores perspiciatis voluptatibus quae itaque dicta iure dolore!</p>
                  </div>
                  <i class="custom-faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Custom Faq item-->
      
                <div class="custom-faq-item">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="custom-faq-content">
                    <p> Obcaecati alias eaque tempore consequuntur magnam. Quaerat fugit voluptas enim asperiores ex soluta, quos dolores perspiciatis voluptatibus quae itaque dicta iure dolore!</p>
                  </div>
                  <i class="custom-faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Custom Faq item-->
      
                <div class="custom-faq-item">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="custom-faq-content">
                    <p> Obcaecati alias eaque tempore consequuntur magnam. Quaerat fugit voluptas enim asperiores ex soluta, quos dolores perspiciatis voluptatibus quae itaque dicta iure dolore!</p>
                  </div>
                  <i class="custom-faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Custom Faq item-->
      
                <div class="custom-faq-item">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="custom-faq-content">
                    <p> Obcaecati alias eaque tempore consequuntur magnam. Quaerat fugit voluptas enim asperiores ex soluta, quos dolores perspiciatis voluptatibus quae itaque dicta iure dolore!</p>
                  </div>
                  <i class="custom-faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Custom Faq item-->
      
                <div class="custom-faq-item">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="custom-faq-content">
                    <p> Obcaecati alias eaque tempore consequuntur magnam. Quaerat fugit voluptas enim asperiores ex soluta, quos dolores perspiciatis voluptatibus quae itaque dicta iure dolore!</p>
                  </div>
                  <i class="custom-faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Custom Faq item-->
      
                <div class="custom-faq-item">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="custom-faq-content">
                    <p> Obcaecati alias eaque tempore consequuntur magnam. Quaerat fugit voluptas enim asperiores ex soluta, quos dolores perspiciatis voluptatibus quae itaque dicta iure dolore!</p>
                  </div>
                  <i class="custom-faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Custom Faq item-->
      
              </div>
            </div>
      
          </div>
        </div>
      </section>
<style>
  /*--------------------------------------------------------------
Anime-themed Call to Action Section
--------------------------------------------------------------*/
.anime-cta {
  padding: 80px 0;
}

.anime-cta .akatsuki-container {
  position: relative;
  z-index: 3;
}

.anime-cta .shonen-title {
  font-size: 28px;
  font-weight: 700;
  color: var(--default-color);
}

.anime-cta .kawaii-text {
  color: var(--default-color);
}

.anime-cta .ninja-btn {
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid color-mix(in srgb, var(--contrast-color), transparent 30%);
  color: var(--contrast-color);
}

.anime-cta .ninja-btn:hover {
  border-color: var(--contrast-color);
}
</style>
