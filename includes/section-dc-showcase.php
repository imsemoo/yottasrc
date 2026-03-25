<?php
/**
 * Reusable DC Showcase — Compact Location Grid
 * ==============================================
 * Set variables before including:
 *   $dc_heading     — h2 text (default: "Deploy closer to your audience")
 *   $dc_desc        — paragraph text
 *   $dc_link_prefix — URL prefix for location links, e.g. "/cheap-cpanel" (empty = no links)
 */
$dc_heading     = $dc_heading ?? __('dc_heading_default');
$dc_desc        = $dc_desc ?? __('dc_desc_default');
$dc_link_prefix = $dc_link_prefix ?? '';
$_base = e(SITE_URL);

// Helper: build href attribute if prefix is set
if (!function_exists('_dc_href')) {
    function _dc_href($base, $prefix, $country) {
        if (!$prefix) return '';
        return 'href="' . $base . $prefix . '-' . $country . '-location/"';
    }
}
?>
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dc_tag')); ?></div>
                <h2><?php echo $dc_heading; ?></h2>
                <p><?php echo $dc_desc; ?></p>
            </div>

            <div class="dc-strip-stats">
                <div class="dc-strip-stat"><i class="fas fa-server"></i> <strong>20+</strong> <?php echo e(__('dc_stat_locations')); ?></div>
                <div class="dc-strip-stat"><i class="fas fa-network-wired"></i> <strong>10 Gbit/s</strong> <?php echo e(__('dc_stat_network')); ?></div>
                <div class="dc-strip-stat"><i class="fas fa-globe"></i> <strong>4</strong> <?php echo e(__('dc_stat_continents')); ?></div>
                <div class="dc-strip-stat"><i class="fas fa-tachometer-alt"></i> <strong>&lt;30ms</strong> <?php echo e(__('dc_stat_latency')); ?></div>
            </div>

            <div class="dc-map-grid">
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-europe"></i> <?php echo e(__('dc_europe')); ?> <span class="dc-continent-count">9</span></div>
                    <div class="dc-continent-locs">
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'finland'); ?> class="location-card"><span class="fi fi-fi"></span> <?php echo e(__('country_finland')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'germany'); ?> class="location-card"><span class="fi fi-de"></span> <?php echo e(__('country_germany')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'france'); ?> class="location-card"><span class="fi fi-fr"></span> <?php echo e(__('country_france')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'uk'); ?> class="location-card"><span class="fi fi-gb"></span> <?php echo e(__('country_uk')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'netherlands'); ?> class="location-card"><span class="fi fi-nl"></span> <?php echo e(__('country_netherlands')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'romania'); ?> class="location-card location-card--active"><span class="fi fi-ro"></span> <?php echo e(__('country_romania')); ?> <span class="dc-hq-badge">HQ</span></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'turkey'); ?> class="location-card"><span class="fi fi-tr"></span> <?php echo e(__('country_turkey')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'poland'); ?> class="location-card"><span class="fi fi-pl"></span> <?php echo e(__('country_poland')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'austria'); ?> class="location-card"><span class="fi fi-at"></span> <?php echo e(__('country_austria')); ?></a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-americas"></i> <?php echo e(__('dc_americas')); ?> <span class="dc-continent-count">2</span></div>
                    <div class="dc-continent-locs">
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'usa'); ?> class="location-card"><span class="fi fi-us"></span> <?php echo e(__('country_usa')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'canada'); ?> class="location-card"><span class="fi fi-ca"></span> <?php echo e(__('country_canada')); ?></a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-asia"></i> <?php echo e(__('dc_asia')); ?> <span class="dc-continent-count">5</span></div>
                    <div class="dc-continent-locs">
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'india'); ?> class="location-card"><span class="fi fi-in"></span> <?php echo e(__('country_india')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'singapore'); ?> class="location-card"><span class="fi fi-sg"></span> <?php echo e(__('country_singapore')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'japan'); ?> class="location-card"><span class="fi fi-jp"></span> <?php echo e(__('country_japan')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'hong-kong'); ?> class="location-card"><span class="fi fi-hk"></span> <?php echo e(__('country_hong_kong')); ?></a>
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'thailand'); ?> class="location-card"><span class="fi fi-th"></span> <?php echo e(__('country_thailand')); ?></a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe"></i> <?php echo e(__('dc_oceania')); ?> <span class="dc-continent-count">1</span></div>
                    <div class="dc-continent-locs">
                        <a <?php echo _dc_href($_base, $dc_link_prefix, 'australia'); ?> class="location-card"><span class="fi fi-au"></span> <?php echo e(__('country_australia')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
// Clean up variables to avoid leaking into parent scope
unset($dc_heading, $dc_desc, $dc_link_prefix, $_base);
?>
