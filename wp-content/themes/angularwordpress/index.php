<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <base href="<?php $url_info = parse_url( home_url() ); echo trailingslashit( $url_info['path'] ); ?>">
  <title>Angular + WP API test</title>
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <h1><a href="<?php echo site_url(); ?>">Angular + WP test</a></h1>
  </header>

  <div ng-view></div>

  <footer>
    &copy; <?php echo date( 'Y' ); ?>
  </footer>

</body>

</html>
