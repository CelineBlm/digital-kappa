<?php
/**
 * Email Footer
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;
?>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- End Content -->
                                        </td>
                                    </tr>
                                </table>
                                <!-- End Body -->
                            </td>
                        </tr>
                    </table>

                    <!-- Footer -->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px;">
                        <tr>
                            <td align="center" valign="top" id="template_footer" style="padding: 30px; text-align: center;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top" id="credit" style="color: #9ca3af; font-size: 13px; line-height: 1.6; font-family: 'Montserrat', Arial, sans-serif; text-align: center;">
                                            <p style="margin: 0 0 10px;">
                                                © <?php echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?>. Tous droits réservés.
                                            </p>
                                            <p style="margin: 0 0 10px;">
                                                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #d2a30b; text-decoration: none;">Site web</a>
                                                &nbsp;•&nbsp;
                                                <a href="<?php echo esc_url(home_url('/cgv')); ?>" style="color: #d2a30b; text-decoration: none;">CGV</a>
                                                &nbsp;•&nbsp;
                                                <a href="<?php echo esc_url(home_url('/politique-de-confidentialite')); ?>" style="color: #d2a30b; text-decoration: none;">Confidentialité</a>
                                            </p>
                                            <?php if ($email && $email->get_unsubscribe_url()) : ?>
                                                <p style="margin: 10px 0 0;">
                                                    <a href="<?php echo esc_url($email->get_unsubscribe_url()); ?>" style="color: #9ca3af; text-decoration: underline; font-size: 12px;">
                                                        Se désabonner
                                                    </a>
                                                </p>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- End Footer -->

                </div>
            </td>
            <td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
        </tr>
    </table>
</body>
</html>
