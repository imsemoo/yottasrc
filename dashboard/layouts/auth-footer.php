    </div><!-- /.auth-card -->
</div><!-- /.auth-wrapper -->

<!-- Footer -->
<div class="auth-footer">
    <span>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>.</span>
    <span class="auth-footer__sep">·</span>
    <a href="<?php echo SITE_URL; ?>/terms"><?php echo e(__('auth_terms')); ?></a>
    <span class="auth-footer__sep">·</span>
    <a href="<?php echo SITE_URL; ?>/privacy"><?php echo e(__('auth_privacy')); ?></a>
</div>

<script>
/* Theme toggle — CSS handles the icon swap via [data-theme] attribute */
(function(){
    var btn = document.getElementById('authThemeToggle');
    if (!btn) return;
    btn.addEventListener('click', function(){
        var h = document.documentElement;
        var t = h.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        h.setAttribute('data-theme', t);
        localStorage.setItem('yottasrc_theme', t);
    });
})();

/* Language switcher dropdown */
(function(){
    var dropdown = document.getElementById('authLangSwitcher');
    if (!dropdown) return;
    var toggle = dropdown.querySelector('.db-switcher-toggle');
    toggle.addEventListener('click', function(e){
        e.stopPropagation();
        dropdown.classList.toggle('open');
    });
    document.addEventListener('click', function(e){
        if (!dropdown.contains(e.target)) dropdown.classList.remove('open');
    });
    document.addEventListener('keydown', function(e){
        if (e.key === 'Escape') dropdown.classList.remove('open');
    });
})();
</script>
</body>
</html>
