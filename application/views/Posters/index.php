<?php foreach ($Ps as $valor): ?>
  <div class="col-lg-4 mt-5 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <img src="<?php echo $valor->imag; ?>" class="img-fluid" alt="">
      <div class="portfolio-info">
        <h4><?php echo $valor->titulo; ?></h4>

        <div class="portfolio-links">
          <a href="<?php echo $valor->imag; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="<?php echo $valor->imag; ?>" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
