<?php
    // Set $compare_type before including this file: 'cloud', 'hosting', or 'reseller'
    if (!isset($compare_type)) $compare_type = 'cloud';
?>
    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <section class="section-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('compare_tag')); ?></div>
                <?php if ($compare_type === 'hosting'): ?>
                <h2><?php echo e(__('compare_title')); ?></h2>
                <p><?php echo e(__('compare_desc_hosting')); ?></p>
                <?php elseif ($compare_type === 'reseller'): ?>
                <h2><?php echo e(__('compare_title')); ?></h2>
                <p><?php echo e(__('compare_desc_reseller')); ?></p>
                <?php else: ?>
                <h2><?php echo e(__('compare_title')); ?></h2>
                <p><?php echo e(__('compare_desc_cloud')); ?></p>
                <?php endif; ?>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('compare_feature')); ?></th>
                            <?php if ($compare_type === 'hosting'): ?>
                            <th class="compare-highlight"><?php echo e(__('compare_yottasrc_hosting')); ?></th>
                            <th><?php echo e(__('compare_other_hosting')); ?></th>
                            <?php elseif ($compare_type === 'reseller'): ?>
                            <th class="compare-highlight"><?php echo e(__('compare_yottasrc_reseller')); ?></th>
                            <th><?php echo e(__('compare_other_reseller')); ?></th>
                            <?php else: ?>
                            <th class="compare-highlight"><?php echo e(__('compare_yottasrc_cloud')); ?></th>
                            <th><?php echo e(__('compare_other_cloud')); ?></th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>

                    <?php if ($compare_type === 'hosting'): ?>
                        <tr>
                            <td><i class="fas fa-coins"></i> <?php echo e(__('compare_starting_price')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_price_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_price_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-server"></i> <?php echo e(__('compare_control_panel')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_cpanel_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_cpanel_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tachometer-alt"></i> <?php echo e(__('compare_web_server')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_web_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_web_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> <?php echo e(__('compare_security')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_sec_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_sec_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> <?php echo e(__('compare_server_locations')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_loc_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_loc_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-hdd"></i> <?php echo e(__('compare_storage')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_stor_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_stor_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-envelope"></i> <?php echo e(__('compare_email')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_email_ys')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('compare_val_hosting_email_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sync-alt"></i> <?php echo e(__('compare_backups')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_backup_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_backup_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> <?php echo e(__('compare_crypto')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_crypto_ys')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('compare_val_hosting_crypto_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> <?php echo e(__('compare_support')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_hosting_support_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_hosting_support_other')); ?></td>
                        </tr>

                    <?php elseif ($compare_type === 'reseller'): ?>
                        <tr>
                            <td><i class="fas fa-coins"></i> <?php echo e(__('compare_starting_price')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_price_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_price_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-palette"></i> <?php echo e(__('compare_white_label')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_brand_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_brand_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-server"></i> <?php echo e(__('compare_whm_cpanel')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_whm_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_whm_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tachometer-alt"></i> <?php echo e(__('compare_web_server')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_web_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_web_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> <?php echo e(__('compare_server_locations')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_loc_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_loc_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-dns"></i> <?php echo e(__('compare_nameservers')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_ns_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_ns_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-envelope"></i> <?php echo e(__('compare_email')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_email_ys')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('compare_val_reseller_email_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> <?php echo e(__('compare_security')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_sec_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_sec_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> <?php echo e(__('compare_crypto')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_crypto_ys')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('compare_val_reseller_crypto_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> <?php echo e(__('compare_support')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_reseller_support_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_reseller_support_other')); ?></td>
                        </tr>

                    <?php else: /* cloud */ ?>
                        <tr>
                            <td><i class="fas fa-coins"></i> <?php echo e(__('compare_starting_price')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_price_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_price_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-clock"></i> <?php echo e(__('compare_billing_model')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_billing_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_billing_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> <?php echo e(__('compare_regions')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_regions_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_regions_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-rocket"></i> <?php echo e(__('compare_deploy_speed')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_deploy_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_deploy_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-id-card"></i> <?php echo e(__('compare_signup')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_signup_ys')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('compare_val_cloud_signup_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wallet"></i> <?php echo e(__('compare_min_deposit')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_deposit_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_deposit_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-code"></i> <?php echo e(__('compare_api')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_api_ys')); ?></td>
                            <td><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_api_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-expand-arrows-alt"></i> <?php echo e(__('compare_scaling')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_scaling_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_scaling_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> <?php echo e(__('compare_crypto')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_crypto_ys')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('compare_val_cloud_crypto_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> <?php echo e(__('compare_support')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('compare_val_cloud_support_ys')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('compare_val_cloud_support_other')); ?></td>
                        </tr>
                    <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
