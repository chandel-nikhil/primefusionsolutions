<footer>
    <div class="footer-widgets">
        <div class="widget-area">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <!-- Add more widget areas if needed -->
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>