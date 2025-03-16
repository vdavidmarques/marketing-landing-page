</main>
<footer id="footer" role="contentinfo">
    <div class="container">
        <?php
        $args = array(
            'name' => 'general-information',
            'post_type' => 'page',
        );
    
        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $whatsapp = get_field('whatsapp');
            $whatsappNumber = get_field('whatsappNumber');
            $whatsappMessage = get_field('whatsappMessage');
            $email = get_field('e-mail');
            $instagram = get_field('instagram');
            $facebook = get_field('facebook');
            $address = get_field('address');
        ?>
            <?php if ($instagram): ?>
                <a target="_blank" href="<?php echo $instagram ?>">
                    <?php echo $instagram ?>
                </a>
            <?php endif; ?>
            <?php if ($whatsapp): ?>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                    <?php echo $whatsapp ?>
                </a>
            <?php endif; ?>
            <?php if ($facebook): ?>
                <a target="_blank" href="<?php echo $facebook ?>">
                    <?php echo $facebook ?>
                </a>
    
            <?php endif; ?>
            <?php if ($email): ?>
                <a href="mailto:<?php echo $email ?>">
                    <?php echo $email ?>
                </a>
            <?php endif; ?>
            <?php if ($address): ?>
                <p>
                    <?php echo $address ?>
                </p>
            <?php endif; ?>
    
        <?php endwhile; ?>
        <div id="copyright">
            &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>