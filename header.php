<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="alternate" type="application/atom+xml" href="<?php bloginfo('atom_url'); ?>">
  <?php if (has_post_thumbnail() ) :
  $bgid = get_post_thumbnail_id();
  $bgsrc1 = wp_get_attachment_image_src( $bgid, 'medium_large');
  $bgsrc = $bgsrc1[0]; ?>
  <style>
    @media screen and (max-width: 960px) {
      .hero {
        background-image: url('<?php echo $bgsrc; ?>');
      }
    }
  </style>
<?php endif; ?>
  <?php gravity_form_enqueue_scripts( 1, true ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="pageWrapper">
    <header class="transparent__nav">
    <div class="header-outer">
      <div class="logo-wrap white-logo">
        <svg id="logo" viewBox="0 0 89.73 22.327">
          <path id="blueShield" class="cls-1" d="M.888 2.764v10.681c1.435 3.679 4.705 6.169 8.118 7.94 3.414-1.771 6.684-4.261 8.119-7.94V2.764a19 19 0 0 0-16.237 0z"/>
          <path id="letters" class="cls-2" d="M5.208 3.137l1.078 3.62v-3.62h.812v5.394h-.873L5.106 5.078v3.453h-.812V3.137h.914zM13.519 7.189a1.513 1.513 0 0 1-.293.963 1.058 1.058 0 0 1-.559.382 1.525 1.525 0 0 1-.451.06 1.272 1.272 0 0 1-.792-.237 1.322 1.322 0 0 1-.415-.526 2.128 2.128 0 0 1-.178-.765l.769-.056a1.183 1.183 0 0 0 .249.682.417.417 0 0 0 .336.152.5.5 0 0 0 .425-.263.653.653 0 0 0 .081-.357.993.993 0 0 0-.3-.667q-.242-.227-.722-.684a3.071 3.071 0 0 1-.572-.7 1.623 1.623 0 0 1-.181-.757 1.316 1.316 0 0 1 .5-1.114 1.232 1.232 0 0 1 .758-.228 1.37 1.37 0 0 1 .743.194 1.11 1.11 0 0 1 .39.421 1.542 1.542 0 0 1 .178.622l-.78.141a.934.934 0 0 0-.189-.513.4.4 0 0 0-.324-.132.372.372 0 0 0-.34.2.757.757 0 0 0-.1.4 1.183 1.183 0 0 0 .319.752 2.757 2.757 0 0 0 .362.344q.285.237.375.331a2.741 2.741 0 0 1 .466.593 2.353 2.353 0 0 1 .125.254 1.491 1.491 0 0 1 .121.516zM6.646 12.33a1.239 1.239 0 0 0-.946-.374H4.419v5.388h.811v-2.028h.47a1.216 1.216 0 0 0 .9-.379 1.255 1.255 0 0 0 .372-.912v-.783a1.3 1.3 0 0 0-.326-.912zm-.46 1.711a.454.454 0 0 1-.136.332.442.442 0 0 1-.329.137H5.23v-1.725h.491a.454.454 0 0 1 .338.129.462.462 0 0 1 .127.34zM12.177 17.408a1.287 1.287 0 0 1-1.289-1.286v-2.94a1.287 1.287 0 1 1 2.573 0v.618h-.841v-.632a.469.469 0 0 0-.468-.469.445.445 0 0 0-.329.138.453.453 0 0 0-.135.331v2.948a.461.461 0 0 0 .464.464.456.456 0 0 0 .331-.135.446.446 0 0 0 .137-.329v-.743h.841v.752a1.284 1.284 0 0 1-1.284 1.285z"/>
          <path id="orangeShield" d="M0 2.142v11.413c1.4 3.746 4.605 6.566 9.006 8.772 4.4-2.206 7.607-5.026 9.007-8.772V2.142A20.006 20.006 0 0 0 0 2.142zm.888.622A19.86 19.86 0 0 1 8.563.955v8.877H.888zm0 10.681V10.72h7.675v10.421c-3.25-1.754-6.302-4.178-7.675-7.696zm16.237 0c-1.372 3.518-4.425 5.942-7.675 7.7V10.72h7.675zM9.45 9.832V.955a19.806 19.806 0 0 1 7.675 1.809v7.068z"/>
          <g id="text">
            <path class="cls-1" d="M25.654,10.918a1.682,1.682,0,0,1,1.284.508,1.763,1.763,0,0,1,.443,1.237v1.062a1.7,1.7,0,0,1-.5,1.237,1.651,1.651,0,0,1-1.223.513h-.636v2.75h-1.1V10.918Zm.66,1.761a.629.629,0,0,0-.173-.461.617.617,0,0,0-.458-.175h-.666v2.34h.666a.6.6,0,0,0,.446-.186.619.619,0,0,0,.185-.45V12.679Zm3.565-1.851a1.748,1.748,0,0,1,1.748,1.749v3.99a1.745,1.745,0,1,1-3.489,0v-3.99a1.746,1.746,0,0,1,1.741-1.749Zm.6,1.73a.625.625,0,0,0-.629-.63.623.623,0,0,0-.449.183.606.606,0,0,0-.186.447v4A.6.6,0,0,0,29.4,17a.619.619,0,0,0,.449.183.625.625,0,0,0,.629-.629v-4Zm5.131,5.667h-3V10.918h1.1v6.207h1.9v1.1Zm1.858,0h-1.1V10.918h1.1v7.307Zm2.723.09a1.741,1.741,0,0,1-1.747-1.743V12.585a1.747,1.747,0,0,1,2.983-1.236,1.7,1.7,0,0,1,.506,1.237v.835H40.79v-.858a.635.635,0,0,0-.635-.635.6.6,0,0,0-.446.186.619.619,0,0,0-.183.449v4a.625.625,0,0,0,.629.629.619.619,0,0,0,.449-.183.6.6,0,0,0,.186-.446V15.554h1.141v1.019a1.74,1.74,0,0,1-1.742,1.742Zm3.638-3.152L42.35,10.91h1.212l.817,2.627.81-2.627h1.219l-1.481,4.253v3.062h-1.1V15.163Zm5.844,3.152a1.741,1.741,0,0,1-1.747-1.743V12.585a1.747,1.747,0,0,1,2.983-1.236,1.7,1.7,0,0,1,.506,1.237v.835H50.272v-.858a.635.635,0,0,0-.635-.635.6.6,0,0,0-.446.186.62.62,0,0,0-.184.449v4a.627.627,0,0,0,.63.629.619.619,0,0,0,.449-.183.6.6,0,0,0,.186-.446V15.554h1.141v1.019a1.74,1.74,0,0,1-1.742,1.742Zm2.65-.09V10.91h3.138v1.109H53.421v1.994h1.486v1.109H53.421v2h2.038v1.108Zm5.134-7.315,1.463,4.91V10.91h1.1v7.315H58.834l-1.517-4.682v4.682h-1.1V10.91Zm4.623,1.117H60.9V10.918h3.44v1.109H63.178v6.2h-1.1v-6.2Zm3.153,6.2V10.91h3.137v1.109H66.331v1.994h1.486v1.109H66.331v2h2.037v1.108Zm5.634-7.307a1.687,1.687,0,0,1,1.355.508,1.842,1.842,0,0,1,.379,1.236v1.061a1.7,1.7,0,0,1-.593,1.312l.817,3.19H71.637l-.671-2.752c-.031,0-.064,0-.1,0h-.641v2.75h-1.1V10.918Zm.658,1.761a.56.56,0,0,0-.631-.636h-.666v2.34h.666a.6.6,0,0,0,.447-.186.618.618,0,0,0,.184-.45Z"/>
            <path class="cls-1" d="M25.155,1.843l1.463,4.909V1.843h1.1V9.158H26.534L25.017,4.475V9.158h-1.1V1.843Zm4.9,5.632-.269,1.683H28.639l1.242-7.307H31.4l1.224,7.307H31.464l-.257-1.683Zm.575-3.949L30.224,6.4h.817l-.409-2.873Zm3.057-.567v6.2h1.1v-6.2h1.165V1.851H32.515V2.959Zm4.252,6.2h-1.1V1.851h1.1V9.158Zm2.717-7.4a1.676,1.676,0,0,1,1.237.513,1.687,1.687,0,0,1,.511,1.236V7.5a1.745,1.745,0,1,1-3.489,0V3.51a1.682,1.682,0,0,1,.513-1.239,1.678,1.678,0,0,1,1.228-.51Zm.6,1.729a.625.625,0,0,0-.629-.629.619.619,0,0,0-.449.183.6.6,0,0,0-.186.446v4a.6.6,0,0,0,.186.446.623.623,0,0,0,.449.183.625.625,0,0,0,.629-.629v-4Zm3.359-1.647,1.463,4.909V1.843h1.1V9.158H46L44.477,4.475V9.158h-1.1V1.843Zm4.9,5.632-.27,1.683H48.1l1.242-7.307h1.516l1.225,7.307H50.924l-.257-1.683Zm.575-3.949L49.685,6.4H50.5l-.409-2.873Zm5.919,5.632h-3V1.851h1.1V8.057h1.9v1.1Zm5.161-1.816a2.051,2.051,0,0,1-.4,1.305,1.432,1.432,0,0,1-.758.519,2.047,2.047,0,0,1-.612.082,1.731,1.731,0,0,1-1.074-.322,1.8,1.8,0,0,1-.562-.714,2.883,2.883,0,0,1-.242-1.037L58.576,7.1a1.611,1.611,0,0,0,.338.925.562.562,0,0,0,.455.205.68.68,0,0,0,.576-.356.88.88,0,0,0,.111-.484,1.346,1.346,0,0,0-.414-.9q-.327-.308-.979-.927a4.19,4.19,0,0,1-.776-.951,2.211,2.211,0,0,1-.244-1.026,1.785,1.785,0,0,1,.67-1.511,1.663,1.663,0,0,1,1.028-.309,1.853,1.853,0,0,1,1.008.263,1.508,1.508,0,0,1,.528.57,2.105,2.105,0,0,1,.242.844l-1.057.192a1.276,1.276,0,0,0-.258-.7.544.544,0,0,0-.439-.179.5.5,0,0,0-.461.268,1.032,1.032,0,0,0-.129.537,1.6,1.6,0,0,0,.433,1.019,3.555,3.555,0,0,0,.491.467q.386.322.509.448a3.792,3.792,0,0,1,.631.8,2.776,2.776,0,0,1,.169.345,2,2,0,0,1,.165.7Zm.914,1.816V1.843h3.137V2.951H63.187V4.946h1.486V6.054H63.187V8.049h2.037V9.158Zm5.642.09a1.741,1.741,0,0,1-1.747-1.743V3.518a1.746,1.746,0,0,1,1.747-1.749,1.672,1.672,0,0,1,1.236.513,1.694,1.694,0,0,1,.506,1.237v.835H68.33V3.5a.635.635,0,0,0-.635-.635.6.6,0,0,0-.446.186.619.619,0,0,0-.183.449v4a.625.625,0,0,0,.629.629.619.619,0,0,0,.449-.183.6.6,0,0,0,.186-.446V6.487h1.141V7.506a1.74,1.74,0,0,1-1.742,1.742Zm4.385-.008A1.731,1.731,0,0,1,70.373,7.5V1.851h1.075V7.492a.607.607,0,0,0,.186.448.619.619,0,0,0,.449.183.625.625,0,0,0,.629-.631V1.851h1.15V7.5a1.659,1.659,0,0,1-.513,1.236,1.7,1.7,0,0,1-1.235.5Zm4.471-7.389a1.686,1.686,0,0,1,1.354.508,1.839,1.839,0,0,1,.379,1.235V4.656a1.7,1.7,0,0,1-.592,1.312l.816,3.19H77.356l-.67-2.752h-.74V9.158h-1.1V1.851Zm.658,1.761a.56.56,0,0,0-.631-.636h-.666v2.34h.666a.6.6,0,0,0,.446-.187.616.616,0,0,0,.185-.45V3.612Zm3.344,5.546h-1.1V1.851h1.1V9.158Zm2.061-6.2H81.475V1.851h3.439V2.959H83.748v6.2h-1.1v-6.2ZM87.15,6.1,85.672,1.843h1.212L87.7,4.47l.81-2.627H89.73L88.25,6.1V9.158h-1.1Z"/>
          </g>
        </svg>

      </div>
      <div class="nav-wrap">
        <nav class="header-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu',
          'container' => 'ul',
          'container_class' => 'navigation',
          'menu_class' => 'top-level',
        ));
        ?>
      </nav>
      </div>
      <div class="mobile-menu-wrapper">
              <div id="nav-trigger">
  							<span class="bar"></span>
  							<span class="bar"></span>
  							<span class="bar"></span>
  							<span class="bar"></span>
  						</div>
      </div>
    </div>

  </header>