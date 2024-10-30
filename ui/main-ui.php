<?php

namespace BinaryCarpenter\BC_ATC;

use BinaryCarpenter\BC_ATC\Activation as Activation;
use BinaryCarpenter\BC_ATC\BC_Static_UI as Static_UI;
use BinaryCarpenter\BC_ATC\Config as Config;

?>

<div id="bc-uatc-welcome-page">
    <div class="bc-uk-container">
        <div class="bc-uk-flex bc-uk-grid">

            <div class="bc-uk-width-1-2">

                <h2>Thanks for using Ultimate Add To Cart Button For WooCommerce!</h2>

                <p>To get instant support, please drop me an email at <a href="mailto:dat.tm24@gmail.com">dat.tm24@gmail.com</a>
                </p>
                <p><strong>VERY IMPORTANT!</strong> To watch the tutorials on how to use the plugin, please <a href="https://www.youtube.com/playlist?list=PL6rw2AEN42Eqa_4OnTBlkaRTbg4jM3fz8">click
                        here</a></p>

                <?php if (!Config::IS_PRO) : ?>
                    <h3>Upgrade to pro version for more features</h3>
                    <p>Upgrading to the pro version enable you to get some essential features such as:</p>
                    <ol>
                        <li>Use images as button's icon</li>
                        <li>Get access to more icons</li>
                        <li>Enable ajax add to cart for all buttons, even in product page</li>
                    </ol>

                    <a href="https://www.binarycarpenter.com/get-ultimate-add-to-cart" class="button button-primary">Upgrade now</a>

                <?php else : ?>


                    <?php
                    //try to activate here if it's pro
                    if (Config::IS_PRO) {
                        $activation_result = Activation::activate();
                        error_log('activation result: ' . $activation_result['message']);
                        if (!$activation_result['message'] == 'NO_LICENSE_KEY') {
                            Static_UI::notice($activation_result['message'], 'info', false, true);
                        } else if ($activation_result['status'] && $activation_result['status'] == 'success') {
                            Static_UI::notice($activation_result['message'], 'info', false, true);
                        } else {
                            //display activation form
                    ?>
                            <div>
                                <label class="" for="">Enter your license key</label>
                                <input class="bc-uk-input" value="" type="text" id="license-key" placeholder="Your license key">
                            </div>
                            <input type="hidden" name="bc-uatc-activate-license-nonce" value="<?php echo wp_create_nonce('bc-uatc-activate-license-nonce'); ?>">
                            <button id="activate-license-button" class="bc-uk-button-primary bc-uk-button">Activate license</button>
                    <?php
                        }
                    }

                    ?>


                <?php endif; ?>
            </div>


            <div class="bc-uk-width-1-2">
                <?php if (!Config::IS_PRO) : ?>
                    <div id="upgrade-section">

                    </div>
                    <?php endif; ?>;
            </div>
        </div>


    </div>
</div>