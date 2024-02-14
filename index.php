<?php
$title = 'Bosh sahifa';

require 'includes/header.php';

$companies = [
  [
    'name' => "Pollwon",
    "image" => "./jpg/pollwon-main-image.jpg",
    "href" => "#",
    "about" => "Amazing Experiences Driven by Artel Whether broadcasting live sports, award ceremonies, current events, delivering real-time multimedia to large displays throughout a stadium, or managing venue security, Artel has award winning, flexible solutions for delivering real-time multimedia.",
  ],
  [
    "name" => "EPA",
    "image" => "./jpg/epa-main-image.jpg",
    "href" => "#",
    "about" => "Eksportchi korxonalar uchun beriladigan subsidiyalar, moliyaviy yordamlar, eksportoldi kreditlari uchun resurslar va kompensatsiyalar ro'yxati. Eksportchi korxonalar tomonidan murojaatlar, shikoyatlar va takliflar yo'llash uchun mo'ljallangan onlayn platforma.",
  ],
  [
    'name' => "Pollwon",
    "image" => "./jpg/pollwon-main-image.jpg",
    "href" => "#",
    "about" => "Amazing Experiences Driven by Artel Whether broadcasting live sports, award ceremonies, current events, delivering real-time multimedia to large displays throughout a stadium, or managing venue security, Artel has award winning, flexible solutions for delivering real-time multimedia.",
  ],
  [
    "name" => "EPA",
    "image" => "./jpg/epa-main-image.jpg",
    "href" => "#",
    "about" => "Eksportchi korxonalar uchun beriladigan subsidiyalar, moliyaviy yordamlar, eksportoldi kreditlari uchun resurslar va kompensatsiyalar ro'yxati. Eksportchi korxonalar tomonidan murojaatlar, shikoyatlar va takliflar yo'llash uchun mo'ljallangan onlayn platforma.",
  ],
];

function buildCompany($company)
{
  $template = '
    <div class="col-lg-4" style="">
      <img src="#IMAGE" style="width: 140px; height: 140px; border-radius: 50%; border-color: black;">
      <h2>#COMPANY</h2>
      <p>#ABOUT</p>
      <p>
        <a class="btn btn-secondary" href="#HREF">Davomini o\'qish</a>
      </p>
    </div>';

  $template = str_replace("#COMPANY", $company['name'], $template);
  $template = str_replace("#IMAGE", $company['image'], $template);
  $template = str_replace("#HREF", $company['href'], $template);
  $template = str_replace("#ABOUT", substr($company['about'], 0, 150) . '...', $template);

  return $template;
}
?>

<div class="container marketing" style="margin-top: 100px;">

  <div class="row">
    <?php
    foreach ($companies as $company) {
      echo buildCompany($company);
    }
    ?>
  </div>


  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">Epa companiy.<span class="text-body-secondary">Eng sifatli elekrta asboplar sotuvchi kampaniya </span></h2>
      <p class="lead">odamlar nma diydi</p>
    </div>
    <div class="col-md-5">
      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
      <img src="jpg/epa.jpg" alt="epa" width="500" height="500">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading fw-normal lh-1">Pollwon Kompaniyasi.<span class="text-body-secondary">Eng sifatli elekrta asboplar sotuvchi kampaniya </span></h2>
      <p class="lead">Odamlar har doim nma diydi</p>
    </div>
    <div class="col-md-5 order-md-1">
      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><img src="jpg/pollwon.jpg" alt="pollwon" width="500" height="500">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /> <img src="jpg/php.png" alt="php" width="500" height="500">
    </div>
  </div>

  <hr class="featurette-divider">

</div>

<?php require 'includes/footer.php'; ?>