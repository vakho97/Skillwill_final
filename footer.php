<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<?php
$socialLinks = get_field('social_links');
$SocialAndApps = get_field('social_links');
$facebook = $SocialAndApps['facebook']; 
$instagram = $SocialAndApps['instagram']; 
$twitter = $SocialAndApps['twitter']; 
$linkedin = $SocialAndApps['linkedin'];
?>

<footer id="colophon" class="site-footer">
    <div class="app-socials">
        <div class="socials">
            <?php if (!empty($facebook)): ?>
                <div>
                    <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/fb.png'; ?>" alt="Facebook">
                    </a>
                </div>
            <?php endif; ?>

            <?php if (!empty($instagram)): ?>
                <div>
                    <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/insta.png'; ?>" alt="Instagram">
                    </a>
                </div>
            <?php endif; ?>

            <?php if (!empty($twitter)): ?>
                <div>
                    <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'; ?>" alt="Twitter">
                    </a>
                </div>
            <?php endif; ?>

            <?php if (!empty($linkedin)): ?>
                <div>
                    <a href="<?php echo esc_url($fourth_link); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png' ?>" alt="LinkedIn">
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div> 
    <p class="copyright">Copyright ©2025 All rights reserved</p>
</footer>



<?php wp_footer(); ?>

</body>
</html>
