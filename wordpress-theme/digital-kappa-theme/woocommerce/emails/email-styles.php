<?php
/**
 * Email Styles
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;
?>

/* Base Styles */
body {
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    font-family: 'Montserrat', Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

#wrapper {
    background-color: #f9f9f9;
    padding: 40px 20px;
}

#template_container {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    max-width: 600px;
    margin: 0 auto;
    overflow: hidden;
}

/* Header */
#template_header {
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    padding: 40px 30px;
    text-align: center;
}

#template_header h1 {
    color: #d2a30b;
    font-family: 'Merriweather', Georgia, serif;
    font-size: 28px;
    font-weight: 700;
    margin: 0;
    padding: 0;
}

#template_header_image {
    margin-bottom: 20px;
}

#template_header_image img {
    max-width: 180px;
    height: auto;
}

/* Body */
#template_body {
    padding: 0;
}

#body_content {
    padding: 40px 30px;
}

#body_content_inner {
    color: #374151;
    font-size: 15px;
    line-height: 1.7;
}

#body_content_inner p {
    margin: 0 0 20px;
}

#body_content_inner h2 {
    color: #1a1a1a;
    font-family: 'Merriweather', Georgia, serif;
    font-size: 22px;
    font-weight: 700;
    margin: 0 0 20px;
    padding: 0;
}

/* Order Info Box */
.order-info-box {
    background: #f9fafb;
    border-radius: 8px;
    padding: 20px;
    margin: 25px 0;
}

.order-info-box p {
    margin: 5px 0 !important;
}

/* Download Section */
.download-section {
    background: linear-gradient(135deg, #d2a30b10 0%, #d2a30b05 100%);
    border: 2px solid #d2a30b;
    border-radius: 12px;
    padding: 25px;
    margin: 30px 0;
    text-align: center;
}

.download-section h3 {
    color: #1a1a1a;
    font-family: 'Merriweather', Georgia, serif;
    font-size: 18px;
    margin: 0 0 15px;
}

.download-btn {
    display: inline-block;
    background: #d2a30b;
    color: #ffffff !important;
    font-size: 16px;
    font-weight: 600;
    padding: 14px 30px;
    border-radius: 8px;
    text-decoration: none !important;
    margin: 10px 5px;
    transition: background 0.3s ease;
}

.download-btn:hover {
    background: #b8920a;
}

/* Order Table */
.td,
.order-item {
    padding: 15px 0;
    border-bottom: 1px solid #e5e7eb;
}

.order-item:last-child {
    border-bottom: none;
}

table.td {
    width: 100%;
    border-collapse: collapse;
}

th.td {
    color: #6b7280;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 12px 0;
    border-bottom: 2px solid #e5e7eb;
    text-align: left;
}

td.td {
    padding: 15px 0;
    border-bottom: 1px solid #f3f4f6;
    vertical-align: top;
}

tfoot td.td {
    border-bottom: none;
}

.order-total {
    font-size: 18px;
    font-weight: 700;
    color: #d2a30b;
}

/* Addresses */
address {
    font-style: normal;
    color: #374151;
    line-height: 1.6;
}

.addresses {
    margin: 30px 0;
}

.addresses h2 {
    color: #1a1a1a;
    font-size: 16px;
    margin: 0 0 10px;
}

/* Footer */
#template_footer {
    background: #f9fafb;
    padding: 30px;
    text-align: center;
    border-top: 1px solid #e5e7eb;
}

#credit {
    color: #9ca3af;
    font-size: 13px;
    line-height: 1.6;
}

#credit a {
    color: #d2a30b;
    text-decoration: none;
}

/* Links */
a {
    color: #d2a30b;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Highlights */
.highlight {
    color: #d2a30b;
    font-weight: 600;
}

.gold-text {
    color: #d2a30b;
}

/* Responsive */
@media only screen and (max-width: 600px) {
    #wrapper {
        padding: 20px 10px;
    }

    #template_header {
        padding: 30px 20px;
    }

    #template_header h1 {
        font-size: 22px;
    }

    #body_content {
        padding: 30px 20px;
    }

    .download-section {
        padding: 20px;
    }

    .download-btn {
        display: block;
        margin: 10px 0;
    }
}
