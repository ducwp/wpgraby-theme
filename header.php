<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpgraby
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<meta name="description" content="Plugin hỗ trợ viết bài nhanh cho WordPress. Lấy bài viết nhanh với đầy đủ: Tiêu đề, tóm tắt, nội dung, hình đại diện, từ khóa...chỉ với 1-Click chưa bao giờ là dễ đến thế."> !-->
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="header">
    <div class="branding">
      <div class="container-fluid position-relative py-3">
        <div class="logo-wrapper">
          <div class="site-logo"><a class="navbar-brand" href="/"><img class="logo-icon me-2"
                src="<?php echo get_template_directory_uri( );?>/assets/images/site-logo.svg" alt="logo" style="width: 46px; vertical-align: -14px;"><span
                class="logo-text mt-3">Graby</span></a></div>
        </div><!--//docs-logo-wrapper-->

      </div><!--//container-->
    </div><!--//branding-->
  </header><!--//header-->