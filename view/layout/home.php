<main>
  <section class="slider">
    <!-- <i class="fa fa-angle-left slider-prev"></i>
          <ul class="slider-dots">
            <li class="slider-dot-item active" data-index="0"></li>
            <li class="slider-dot-item" data-index="1"></li>
            <li class="slider-dot-item" data-index="2"></li>
          </ul> -->
    <!-- <div class="slider-wrapper"> -->
    <!-- <div class="slider-main"> -->
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/slider-01.webp" alt="" />
      </a>
    </div>
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/slider-02.webp" alt="" />
      </a>
    </div>
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/slider-03.webp" alt="" />
      </a>
    </div>
    <div class="slider-item">
      <a href="#" class="slider-image">
        <img src="././public/images/slider-04.webp" alt="" />
      </a>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <!-- <i class="fa fa-angle-right slider-next"></i> -->
  </section>

  <?php
  include "brand.php";
  ?>

  <?php
  include "product_new.php";
  ?>

  <section class="banner">
    <img src="././public/images/banner.webp" alt="" />
  </section>

  <section class="gender">
    <div class="container">
      <div class="gender-header gender-links">
        <h2 class="heading gender-link" onclick="openTab(event, 'Male')" id="defaultOpen">
          Nam
        </h2>
        <h2 class="heading gender-link" onclick="openTab(event, 'Female')">
          Nữ
        </h2>
      </div>

      <div class="gender-list" id="Male">
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-male-1.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nam</a>
            <a href="#" class="gender-type">Giày chạy bộ</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-male-2.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nam</a>
            <a href="#" class="gender-type">Giày thời trang</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-male-3.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nam</a>
            <a href="#" class="gender-type">Giày luyện tập</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-male-4.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nam</a>
            <a href="#" class="gender-type">Giày bóng rổ</a>
          </div>
        </div>
        <div class="gender-item" id="itemMale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-male-5.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nam</a>
            <a href="#" class="gender-type">Giày bóng đá</a>
          </div>
        </div>
      </div>

      <div class="gender-list" id="Female">
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-female-1.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nữ</a>
            <a href="#" class="gender-type">Giày chạy bộ</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-female-2.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nữ</a>
            <a href="#" class="gender-type">Giày thời trang</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-female-3.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nữ</a>
            <a href="#" class="gender-type">Giày luyện tập</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-female-4.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nữ</a>
            <a href="#" class="gender-type">Giày bóng rổ</a>
          </div>
        </div>
        <div class="gender-item" id="itemFemale">
          <div class="gender-image">
            <a href="#" class="gender-img">
              <img src="././public/images/gender-female-5.webp" alt="" />
            </a>
          </div>
          <div class="gender-content">
            <a href="#" class="gender-name">Nữ</a>
            <a href="#" class="gender-type">Giày bóng đá</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "product_feature.php";
  ?>

  <?php
  include "product_promo.php";
  ?>

  <section class="banner-slide">
    <div class="container">
      <div class="banner-slide-header">
        <h2 class="heading">KHUYẾN MÃI</h2>
      </div>

      <div class="banner-slide-list">
        <div class="banner-slide-item">
          <a href="#" class="banners-slide-image">
            <img src="././public/images/banner-slide-1.webp" alt="" />
          </a>
        </div>
        <div class="banner-slide-item">
          <a href="#" class="banners-slide-image">
            <img src="././public/images/banner-slide-1.webp" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "sport.php";
  ?>

  <?php
  include "news.php";
  ?>
</main>