<?php
/**
 * Email Header
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo get_bloginfo('name', 'display'); ?></title>
    <!--[if mso]>
    <style type="text/css">
        table {border-collapse: collapse;}
        .fallback-font {font-family: Arial, sans-serif;}
    </style>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0; padding: 0; background-color: #f9f9f9; font-family: 'Montserrat', Arial, sans-serif; -webkit-font-smoothing: antialiased;">
    <table width="100%" id="outer_wrapper" style="background-color: #f9f9f9;">
        <tr>
            <td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
            <td width="600">
                <div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" style="padding: 40px 20px; margin: 0 auto; max-width: 600px;">
                    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="template_container" style="background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); overflow: hidden;">
                        <tr>
                            <td align="center" valign="top">
                                <!-- Header -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 40px 30px;">
                                    <tr>
                                        <td id="header_wrapper" style="text-align: center;">
                                            <!-- Logo -->
                                            <div id="template_header_image" style="margin-bottom: 20px;">
                                                <?php
                                                $img = get_option('woocommerce_email_header_image');
                                                if ($img) {
                                                    echo '<img src="' . esc_url($img) . '" alt="' . esc_attr(get_bloginfo('name', 'display')) . '" style="max-width: 180px; height: auto;" />';
                                                } else {
                                                    // Default logo text
                                                    echo '<span style="color: #d2a30b; font-family: Merriweather, Georgia, serif; font-size: 28px; font-weight: 700;">Digital Kappa</span>';
                                                }
                                                ?>
                                            </div>
                                            <h1 style="color: #ffffff; font-family: 'Merriweather', Georgia, serif; font-size: 24px; font-weight: 700; margin: 0; padding: 0;">
                                                <?php echo $email_heading; ?>
                                            </h1>
                                        </td>
                                    </tr>
                                </table>
                                <!-- End Header -->
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <!-- Body -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_body">
                                    <tr>
                                        <td valign="top" id="body_content" style="padding: 40px 30px;">
                                            <!-- Content -->
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td valign="top" id="body_content_inner" style="color: #374151; font-size: 15px; line-height: 1.7; font-family: 'Montserrat', Arial, sans-serif;">
