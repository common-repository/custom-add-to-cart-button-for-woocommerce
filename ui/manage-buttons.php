<?php

namespace BinaryCarpenter\BC_ATC;

use BinaryCarpenter\BC_ATC\BC_ATC_Options as Options;
use BinaryCarpenter\BC_ATC\BC_Static_UI as Static_UI;
use BinaryCarpenter\BC_ATC\Config as Config;

global $uatcOptions;


?>
<script>
    let nangCap = <?php echo (Config::IS_PRO ? 'true' : 'false'); ?>;
</script>

<div id="uatc-manager" class="bc-root">
    <div class="bc-uk-container">
        <ul id="uatc-tabs" class="bc-uk-tab" data-uk-tab="{connect:'#bc-uatc-main-tabs'}">
            <li>
                <a href="#">Button styles</a>
            </li>

            <li>
                <a href="#">Quantity style</a>
            </li>
        </ul>

        <ul id="bc-uatc-main-tabs" class="bc-uk-switcher">
            <li>
                <!--      button styles tab      -->
                <div class="bc-box" id="button-settings">
                    <div class="bc-uk-grid bc-uk-child-width-expand@s" bc-uk-grid>
                        <div>

                            <div id="bc-atc-editor">
                                <h2>Regular settings</h2>

                                <div>
                                    <div class="bc-uatc-form-section">
                                        <h3>Button's text</h3>
                                        <div class="bc-uk-grid bc-uk-child-width-expand@s" bc-uk-grid>


                                            <div class="bc-uk-flex-row"> <!-- first row -->
                                                <div>
                                                    <label for="">Simple product button text</label>
                                                    <input class="bc-uk-input"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'text'); ?>"
                                                        type="text" id="button-text" placeholder="button text">
                                                </div>

                                                <div>
                                                    <label class="" for="">Variable product button text</label>
                                                    <input class="bc-uk-input"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'variableText'); ?>"
                                                        type="text" id="button-variable-text"
                                                        placeholder="variable button text">
                                                </div>


                                                <div>
                                                    <label for="">Grouped product button text</label>
                                                    <input class="bc-uk-input"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'groupedText'); ?>"
                                                        type="text" id="button-grouped-text"
                                                        placeholder="grouped button text">
                                                </div>
                                            </div> <!-- end first row -->

                                            <div class="bc-uk-flex-row">
                                                <div>
                                                    <label for="">External product button text</label>
                                                    <input class="bc-uk-input"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'externalText'); ?>"
                                                        type="text" id="button-external-text"
                                                        placeholder="external button text">
                                                </div>

                                                <div>
                                                    <label for="">Booking product button text (for WooCommerce booking
                                                        plugin)</label>
                                                    <input class="bc-uk-input"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'wooBookingText'); ?>"
                                                        type="text" id="button-woocommerce-booking-text"
                                                        placeholder="woocommerce booking button text">
                                                </div>
                                                <div>
                                                    <label for="">Out of stock text</label>
                                                    <input class="bc-uk-input"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'outOfStockText'); ?>"
                                                        type="text" id="button-out-of-stock-text"
                                                        placeholder="out of stock text">
                                                </div>
                                            </div>


                                        </div>


                                        <h4>Text size</h4>
                                        <div>
                                            <input
                                                value="<?php echo Options::bc_atc_get_option($uatcOptions, 'textSize'); ?>"
                                                type="number" id="text-size" placeholder="text size">
                                            <input
                                                value="<?php echo Options::bc_atc_get_option($uatcOptions, 'textSizeUnit'); ?>"
                                                type="text" id="text-size-unit" placeholder="text size unit(px, em, %)">

                                        </div>

                                    </div>

                                    <div class="bc-uatc-form-section">
                                        <h3>Add the quantity box on shop page</h3>
                                        <div>
                                            <label for="">Add if not available</label>
                                            <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'addQuantityBoxOnShop') === 'true' ? 'checked' : ''); ?>
                                                id="uatc_display_quantity_box_on_shop"> Add quantity box for products in
                                            shop
                                        </div>


                                    </div>

                                    <div class="bc-uatc-form-section">
                                        <h3>Exclude styles on certain page</h3>
                                        <p>If you want to exclude the styles from display on any of the following pages,
                                            check the checbox</p>

                                        <div>
                                            <label for="">Exclude on shop page</label>
                                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'excludeShop') === 'true' ? 'checked' : ''); ?> id="uatc_exclude_shop"> Exclude shop
                                        </div>

                                        <div>
                                            <label for="">Exclude on single product pages</label>
                                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'excludeSingle') === 'true' ? 'checked' : ''); ?> id="uatc_exclude_single"> Exclude single product
                                            page
                                        </div>

                                        <div>
                                            <label for="">Exclude on product tag pages</label>
                                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'excludeTag') === 'true' ? 'checked' : ''); ?> id="uatc_exclude_tag"> Exclude tag pages
                                        </div>

                                        <div>
                                            <label for="">Exclude on category pages</label>
                                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'excludeCategory') === 'true' ? 'checked' : ''); ?> id="uatc_exclude_category"> Exclude category pages
                                        </div>
                                        <div>
                                            <label for="">Exclude on other pages</label>
                                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'excludeOtherPages') === 'true' ? 'checked' : ''); ?> id="uatc_exclude_other_pages"> Exclude other pages
                                        </div>
                                    </div>
                                    <div class="bc-uatc-form-section">
                                        <h3>Button's icon and image</h3>


                                        <div id="icon-size-color">
                                            <h4>Icon size and color</h4>
                                            <?php if (!Config::IS_PRO): ?>
                                                <p class="bc-uatc-upgrade-notice">Icon size and colors are available in
                                                    the PRO version only. <a target="_blank"
                                                        href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE . '?src=upgrade_icon_size_and_color'; ?>">Click
                                                        here to upgrade</a></p>
                                            <?php endif; ?>
                                            <div class="bc-uk-flex bc-uk-flex-between">
                                                <div>
                                                    <label for="">Icon size</label>
                                                    <div class="bc-uk-flex">
                                                        <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'iconFontSize'); ?>"
                                                            type="number" id="icon-font-size"
                                                            placeholder="icon font size">
                                                        <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'iconFontSizeUnit'); ?>"
                                                            type="text" id="icon-font-size-unit"
                                                            placeholder="icon font size unit(px, em, %)">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="">Icon color</label>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only" disabled' : ''); ?> type="text" class="bc-uatc-color-picker"
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonIconColor'); ?>"
                                                        id="button-icon-color">
                                                </div>

                                            </div>

                                        </div>

                                        <div id="icon-position">
                                            <h4>Icon position</h4>

                                            <div class="bc-uk-flex bc-uk-flex-left">
                                                <div>
                                                    <input class="bc-uk-radio" type="radio" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonIconPosition') == 'before' || Options::bc_atc_get_option($uatcOptions, 'buttonIconPosition') == '' ? 'checked' : ''); ?>
                                                        name="button-icon-position" value="before"> Left &nbsp;&nbsp;
                                                </div>
                                                <div>
                                                    <input class="bc-uk-radio" type="radio" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonIconPosition') == 'after' ? 'checked' : ''); ?>
                                                        name="button-icon-position" value="after"> Right
                                                </div>

                                            </div>

                                            <p></p>

                                        </div>

                                        <div class="icons-selector">
                                            <div id="bc-atc-icon-selector" class="bc-atc-icon-list">
                                                <h4 for="">Button's Icon</h4>
                                                <label for="">Default icon</label>
                                                <p class="bc-atc-explain">Select the icon to display before your add to
                                                    cart text</p>
                                                <?php $icon = Options::bc_atc_get_option($uatcOptions, 'icon'); ?>
                                                <label for=""><i class=""
                                                        style="display: block; color: transparent;">.</i>
                                                    <input <?php echo ($icon == '' ? "checked" : "") ?> value=""
                                                        type="radio" name="button-icon"></label>

                                                <label for=""><i class="icon-atc-cart-01"></i>
                                                    <input <?php echo ($icon == '\e817' ? "checked" : "") ?>value="\e817"
                                                        type="radio" name="button-icon"></label>
                                                <label for=""><i class="icon-atc-cart-04"></i>
                                                    <input <?php echo ($icon == '\f291' ? "checked" : "") ?>value="\f291"
                                                        type="radio" name="button-icon">
                                                </label>
                                                <label for=""><i class="icon-atc-cart-05"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($icon == '\f217' ? "checked" : "") ?>
                                                        value="\f217" type="radio" name="button-icon"> </label>
                                                <label for=""><i class="icon-atc-cart-06"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($icon == '\e819' ? "checked" : "") ?>
                                                        value="\e819" type="radio" name="button-icon"> </label>
                                                <label for=""> <i class="icon-atc-cart-07"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($icon == '\e81d' ? "checked" : "") ?>
                                                        value="\e81d" type="radio" name="button-icon"></label>
                                                <label for=""><i class="icon-atc-cart-08"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($icon == '\f290' ? "checked" : "") ?>
                                                        value="\f290" type="radio" name="button-icon"> </label>
                                                <label for=""><i class="icon-atc-cart-09"></i><input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        <?php echo ($icon == '\f218' ? "checked" : "") ?> value="\f218"
                                                        type="radio" name="button-icon"> </label>
                                                <label for=""><i class="icon-atc-cart-10"></i><input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        <?php echo ($icon == '\e81a' ? "checked" : "") ?> value="\e81a"
                                                        type="radio" name="button-icon"> </label>
                                                <label for=""><i class="icon-atc-cart-11"></i><input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        <?php echo ($icon == '\e81e' ? "checked" : "") ?> value="\e81e"
                                                        type="radio" name="button-icon"> </label>
                                                <label for=""> <i class="icon-atc-cart-12"></i><input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        <?php echo ($icon == '\f23d' ? "checked" : "") ?> value="\f23d"
                                                        type="radio" name="button-icon"></label>
                                                <label for=""><i class="icon-atc-cart-13"></i><input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        <?php echo ($icon == '\e81b' ? "checked" : "") ?> value="\e81b"
                                                        type="radio" name="button-icon"> </label>


                                                <i class="fa <?php echo Options::bc_atc_get_option($uatcOptions, 'icon'); ?>"
                                                    id="icon-preview"></i>
                                                <div style="display: none">
                                                    <label for="">Icon position</label>
                                                    <select name="" id="icon-position">
                                                        <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'iconPosition') === 'before' ? 'selected' : ''); ?>
                                                            value="before">Before text
                                                        </option>
                                                        <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'iconPosition') === 'after' ? 'selected' : ''); ?>
                                                            value="after">After text
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="loading-icon-selector" class="bc-atc-icon-list">
                                                <label for="">Loading icon</label>
                                                <p class="bc-atc-explain">This loading icon will show up when the
                                                    customer click on the add to cart button</p>
                                                <?php if (!Config::IS_PRO): ?>
                                                    <p class="bc-uatc-upgrade-notice">Loading icons are available in the
                                                        PRO version only. <a target="_blank"
                                                            href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                                            here to upgrade</a></p>
                                                <?php endif; ?>

                                                <?php $loading_icon = Options::bc_atc_get_option($uatcOptions, 'loadingIcon'); ?>

                                                <label for=""><i class=""
                                                        style="display: block; color: transparent;">.</i>
                                                    <input <?php echo ($loading_icon == '' ? "checked" : "") ?> value=""
                                                        type="radio" name="loading-icon"></label>
                                                <label for=""><i class="icon-atc-spinner-01"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e839' ? "checked" : "") ?> value="\e839" type="radio" name="loading-icon"></label>
                                                <label for=""><i class="icon-atc-spinner-02"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e834' ? "checked" : "") ?> value="\e834" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-03"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\f529' ? "checked" : "") ?> value="\f529" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-04"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e830' ? "checked" : "") ?> value="\e830" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-05"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e832' ? "checked" : "") ?> value="\e832" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-06"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e838' ? "checked" : "") ?> value="\e838" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-07"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\f110' ? "checked" : "") ?> value="\f110" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-08"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e804' ? "checked" : "") ?> value="\e804" type="radio" name="loading-icon"> </label>
                                                <label for=""><i class="icon-atc-spinner-09"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($loading_icon == '\e805' ? "checked" : "") ?> value="\e805" type="radio" name="loading-icon"> </label>

                                            </div>
                                            <div id="added-icon-selector" class="bc-atc-icon-list">
                                                <?php if (!Config::IS_PRO): ?>
                                                    <p class="bc-uatc-upgrade-notice">This feature is available in the
                                                        PRO version only. <a target="_blank"
                                                            href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                                            here to upgrade</a></p>
                                                <?php endif; ?>

                                                <label for="">Added icon</label>
                                                <p class="bc-atc-explain">The icon that is shown when item get added to
                                                    cart</p>
                                                <?php if (!Config::IS_PRO): ?>
                                                    <p class="bc-uatc-upgrade-notice">This feature is available in the
                                                        PRO version only. <a target="_blank"
                                                            href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                                            here to upgrade</a></p>
                                                <?php endif; ?>


                                                <?php $added_icon = Options::bc_atc_get_option($uatcOptions, 'addedIcon'); ?>
                                                <label for=""><i class=""
                                                        style="display: block; color: transparent;">.</i>
                                                    <input <?php echo ($added_icon == '' ? "checked" : "") ?> value=""
                                                        type="radio" name="added-icon"></label>
                                                <label for=""><i class="icon-atc-added-01"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($added_icon == '\e801' ? "checked" : "") ?>
                                                        value="\e801" type="radio" name="added-icon"></label>
                                                <label for=""><i class="icon-atc-added-02"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($added_icon == '\e800' ? "checked" : "") ?>
                                                        value="\e800" type="radio" name="added-icon"></label>
                                                <label for=""><i class="icon-atc-added-03"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($added_icon == '\e802' ? "checked" : "") ?>
                                                        value="\e802" type="radio" name="added-icon"></label>
                                                <label for=""><i class="icon-atc-added-04"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($added_icon == '\f06d' ? "checked" : "") ?>
                                                        value="\f06d" type="radio" name="added-icon"></label>
                                                <label for=""><i class="icon-atc-added-05"></i>
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo ($added_icon == '\e803' ? "checked" : "") ?>
                                                        value="\e803" type="radio" name="added-icon"></label>
                                            </div>
                                        </div>


                                        <div>
                                            <label for="">Keep added icon after item added to cart</label>
                                            <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'keepAddedIcon') === 'true' ? 'checked' : ''); ?> id="keep_added_icon"> Keep
                                        </div>

                                        <br>

                                        <div class="">
                                            <div class="bc-uk-grid bc-uk-child-width-expand" bc-uk-grid>
                                                <div class="bc-uk-col">
                                                    <h4 for="">Button image</h4>
                                                    <p class="bc-atc-explain">The images that display instead of icons
                                                        above. If you want to use images, make sure to set icons to
                                                        blank option (first option)</p>
                                                    <?php if (!Config::IS_PRO): ?>
                                                        <p class="bc-uatc-upgrade-notice">This feature is available in
                                                            the PRO version only. <a target="_blank"
                                                                href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                                                here to upgrade</a></p>
                                                    <?php endif; ?>

                                                    <div class="bc-uk-grid bc-uk-child-width-expand">
                                                        <div class="image-container" data-image="initial-image">
                                                            <label for="">Default image</label>

                                                            <span <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                                class="bc-uatc-select-image"><i
                                                                    class="icon-atc-upload-01"></i></span>
                                                            <input style="display: none;" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                                value="<?php echo Options::bc_atc_get_option($uatcOptions, 'initialImage'); ?>"
                                                                type="text" id="initial-image">
                                                            <img class="bc-uatc-preview-image"
                                                                src="<?php echo Options::bc_atc_get_option($uatcOptions, 'initialImage'); ?>"
                                                                alt="">


                                                        </div>
                                                        <div class="image-container" data-image="loading-image">
                                                            <label for="">Loading image</label>
                                                            <span
                                                                title="<?php _e('Click here to select loading image'); ?>"
                                                                <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                                class="bc-uatc-select-image"><i
                                                                    class="icon-atc-upload-01"></i></span>
                                                            <input style="display: none;" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                                value="<?php echo Options::bc_atc_get_option($uatcOptions, 'loadingImage'); ?>"
                                                                type="text" id="loading-image">
                                                            <img src="<?php echo Options::bc_atc_get_option($uatcOptions, 'loadingImage'); ?>"
                                                                class="bc-uatc-preview-image" alt="">


                                                        </div> <!-- Loading image -->
                                                        <div data-image="added-image" class="image-container">
                                                            <label for="">Added image</label>
                                                            <span
                                                                title="<?php _e('Click here to select added to cart image'); ?>"
                                                                <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                                class="bc-uatc-select-image"><i
                                                                    class="icon-atc-upload-01"></i></span>
                                                            <input style="display: none;" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                                value="<?php echo Options::bc_atc_get_option($uatcOptions, 'addedImage'); ?>"
                                                                type="text" id="added-image">
                                                            <img src="<?php echo Options::bc_atc_get_option($uatcOptions, 'addedImage'); ?>"
                                                                class="bc-uatc-preview-image" alt="">


                                                        </div> <!-- Added to cart image -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div style="display: none">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="">Image position</label>
                                                        <p class="bc-atc-explain">Where do you want to place the images
                                                            (before or after text)</p>
                                                        <select name="" id="image-position">
                                                            <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'imagePosition') === 'before' ? 'selected' : ''); ?>
                                                                value="before">Before text
                                                            </option>
                                                            <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'imagePosition') === 'before' ? 'selected' : ''); ?>
                                                                value="after">After text
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                    </div>


                                    <div class="bc-uatc-form-section">
                                        <h3>Button preset styles</h3>
                                        <label for="">Select style</label>
                                        <p class="bc-atc-explain">Select pre-made style or the ones you created. If you
                                            want to use the styles on the right, make sure you select No style</p>
                                        <!-- data-id is to control styles created by user. If users create styles, they will have an id other than 0. We will use this to decide whether to just print the css content to the header (in actions.php) -->
                                        <select name="" id="style">
                                            <option data-id="0" value="bc-uatc-default-shop-style">Default shop style
                                            </option>
                                            <option data-id="0" <?php echo (Options::bc_atc_get_option($uatcOptions, 'style') === 'bc-uatc-style-amazon' ? 'selected' : ''); ?>
                                                value="bc-uatc-style-amazon">Amazon
                                            </option>
                                            <option data-id="0" <?php echo (Options::bc_atc_get_option($uatcOptions, 'style') === 'bc-uatc-style-reset' ? 'selected' : ''); ?>
                                                value="bc-uatc-style-reset">Reset (reset everything)
                                            </option>
                                            <option data-id="0" <?php echo (Options::bc_atc_get_option($uatcOptions, 'style') === 'bc-uatc-style-lazada' ? 'selected' : ''); ?>
                                                value="bc-uatc-style-lazada">Lazada
                                            </option>
                                            <option data-id="0" <?php echo (Options::bc_atc_get_option($uatcOptions, 'style') === 'bc-uatc-style-shopee' ? 'selected' : ''); ?>
                                                value="bc-uatc-style-shopee">Shopee
                                            </option>
                                            <!--     <option data-id="0" <?php echo (Options::bc_atc_get_option($uatcOptions, 'style') === 'bc-uatc-style-custom-01' ? 'selected' : ''); ?> value="bc-uatc-style-custom-01">Custom style 01</option> -->
                                        </select>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div>
                            <h2>Advanced button's settings</h2>


                            <div class="bc-uatc-form-section">
                                <h3>Button's size</h3>
                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'useCustomButtonSizes') === 'true' ? 'checked' : ''); ?> id="use_custom_button_sizes"> Use custom button sizes
                                <div class="bc-uk-child-width-expand">

                                    <ul class="bc-uk-tab" data-uk-tab="{connect: '#button-size-options'}">
                                        <li><a href="#button-size-desktop">Desktop</a></li>
                                        <li><a href="#button-size-tablet">Tablet</a></li>
                                        <li><a href="#button-size-phone">Phone</a></li>
                                    </ul>
                                    <ul class="bc-uk-switcher" id="button-size-options">
                                        <li id="button-size-desktop">
                                            <div>
                                                <label for="button-width">Button width (optional)</label>
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonWidth'); ?>"
                                                    type="number" id="button-width" placeholder="button's width">
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonWidthUnit'); ?>"
                                                    type="text" id="button-width-unit"
                                                    placeholder="button's width unit(px, em, %)">
                                            </div>

                                            <div>
                                                <label for="button-height">Button height (optional)</label>
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonHeight'); ?>"
                                                    type="number" id="button-height"
                                                    placeholder="button's height, in px">
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonHeightUnit'); ?>"
                                                    type="text" id="button-height-unit"
                                                    placeholder="button's height unit(px, em, %)">
                                            </div>
                                        </li>

                                        <li id="button-size-tablet">
                                            <div>
                                                <label for="button-width-tablet">Button width (optional)</label>
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonWidthTablet'); ?>"
                                                    type="number" id="button-width-tablet" placeholder="button's width">
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonWidthUnitTablet'); ?>"
                                                    type="text" id="button-width-unit-tablet"
                                                    placeholder="button's width unit(px, em, %)">
                                            </div>

                                            <div>
                                                <label for="button-height-tablet">Button height (optional)</label>
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonHeightTablet'); ?>"
                                                    type="number" id="button-height-tablet"
                                                    placeholder="button's height, in px">
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonHeightUnitTablet'); ?>"
                                                    type="text" id="button-height-unit-tablet"
                                                    placeholder="button's height unit(px, em, %)">
                                            </div>
                                        </li>

                                        <li id="button-size-phone">
                                            <div>
                                                <label for="button-width-phone">Button width (optional)</label>
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonWidthPhone'); ?>"
                                                    type="number" id="button-width-phone" placeholder="button's width">
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonWidthUnitPhone'); ?>"
                                                    type="text" id="button-width-unit-phone"
                                                    placeholder="button's width unit(px, em, %)">
                                            </div>

                                            <div>
                                                <label for="button-height-phone">Button height (optional)</label>
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonHeightPhone'); ?>"
                                                    type="number" id="button-height-phone"
                                                    placeholder="button's height, in px">
                                                <input
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonHeightUnitPhone'); ?>"
                                                    type="text" id="button-height-unit-phone"
                                                    placeholder="button's height unit(px, em, %)">
                                            </div>
                                        </li>
                                    </ul>


                                </div>

                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonDisplayBlock') === 'true' ? 'checked' : ''); ?> id="button_display_block"> Button on its own line (Display block)


                            </div>

                            <div id="button-background-options" class="bc-uatc-form-section">
                                <h3>Button's background</h3>

                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'useCustomBackground') === 'true' ? 'checked' : ''); ?> id="use_custom_background"> Use custom background

                                <label for="">Background types</label>
                                <?php if (!Config::IS_PRO): ?>
                                    <p class="bc-uatc-upgrade-notice">Gradient and image background are available in the
                                        PRO version only. <a target="_blank"
                                            href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                            here to upgrade</a></p>
                                <?php endif; ?>
                                <div class="bc-uk-flex bc-uk-flex-between">
                                    <div>
                                        <input class="bc-uk-radio" type="radio" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBackgroundType') == 'solid' || Options::bc_atc_get_option($uatcOptions, 'buttonBackgroundType') == '' ? 'checked' : ''); ?> name="button-background-type" value="solid"> Solid color
                                    </div>
                                    <div>
                                        <input class="bc-uk-radio" type="radio" title="Hello" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBackgroundType') == 'gradient' ? 'checked' : ''); ?>
                                            name="button-background-type" value="gradient"> Gradient
                                    </div>
                                    <div>
                                        <input class="bc-uk-radio" type="radio" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBackgroundType') == 'image' ? 'checked' : ''); ?> name="button-background-type" value="image"> Image
                                    </div>
                                </div>


                                <label for="">Background settings</label>
                                <div id="background-options-tabs">
                                    <ul class="bc-uk-tab" data-uk-tab="{connect: '#button-bg-options'}">
                                        <li>
                                            <a href="#background-type-solid-color">Solid color</a>
                                        </li>

                                        <li>
                                            <a href="#background-type-gradient-color">Gradient color</a>
                                        </li>

                                        <li>
                                            <a href="#background-type-image">Image</a>
                                        </li>
                                    </ul>

                                    <ul class="bc-uk-switcher" id="button-bg-options">
                                        <li>
                                            <div id="background-type-solid-color">

                                                <div class="bc-uk-flex  bc-uk-flex-between">
                                                    <div>
                                                        <h4>Normal state</h4>
                                                        <label for="">Button's background color</label>
                                                        <input type="text" class="bc-uatc-color-picker"
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonSolidBackgroundColor'); ?>"
                                                            id="button-solid-background-color">

                                                        <label for="">Button's text color</label>
                                                        <input type="text" class="bc-uatc-color-picker"
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonSolidTextColor'); ?>"
                                                            id="button-solid-text-color">
                                                    </div>
                                                    <div>
                                                        <h4>On hover</h4>

                                                        <label for="">Button's background color</label>
                                                        <input type="text" class="bc-uatc-color-picker" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only" disabled' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonSolidHoverBackgroundColor'); ?>"
                                                            id="button-solid-hover-background-color">

                                                        <label for="">Button's text color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only" disabled' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonSolidHoverTextColor'); ?>"
                                                            class="bc-uatc-color-picker"
                                                            id="button-solid-hover-text-color">

                                                        <?php if (!Config::IS_PRO): ?>
                                                            <p class="bc-uatc-upgrade-notice">Hover state colors are pro
                                                                only feature. <a target="_blank"
                                                                    href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                                                    here to upgrade</a></p>
                                                        <?php endif; ?>
                                                    </div>

                                                </div>


                                            </div>
                                        </li>

                                        <li>
                                            <div id="background-type-gradient-color">
                                                <div class="bc-uk-flex  bc-uk-flex-between">
                                                    <div>
                                                        <h4>Normal state</h4>
                                                        <label for="">Button's background first color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            class="bc-uatc-color-picker"
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientFirstBackgroundColor'); ?>"
                                                            id="button-gradient-first-background-color">

                                                        <label for="">Button's background second color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            class="bc-uatc-color-picker"
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientSecondBackgroundColor'); ?>"
                                                            id="button-gradient-second-background-color">

                                                        <label for="">Gradient degree</label>
                                                        <input type="number" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientDegree'); ?>"
                                                            id="button-gradient-degree">

                                                        <label for="">Button's text color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            class="bc-uatc-color-picker"
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientTextColor'); ?>"
                                                            id="button-gradient-text-color">
                                                    </div>
                                                    <div>
                                                        <h4>On hover</h4>
                                                        <label for="">Button's background first color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientHoverFirstBackgroundColor'); ?>"
                                                            class="bc-uatc-color-picker"
                                                            id="button-gradient-hover-first-background-color">

                                                        <label for="">Button's background second color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientHoverSecondBackgroundColor'); ?>"
                                                            class="bc-uatc-color-picker"
                                                            id="button-gradient-hover-second-background-color">

                                                        <label for="">Gradient degree</label>
                                                        <input type="number" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientHoverDegree'); ?>"
                                                            id="button-gradient-hover-degree">

                                                        <label for="">Button's text color</label>
                                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonGradientHoverTextColor'); ?>"
                                                            class="bc-uatc-color-picker"
                                                            id="button-gradient-hover-text-color">
                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <div id="background-type-image">
                                                <div class="image-container col" data-image="button-image-background">
                                                    <label for="">Button background image</label>
                                                    <p class="bc-atc-explain">This is the image that will be displayed
                                                        on the left of the button. Leave blank if you don't want to
                                                        use</p>
                                                    <img class="bc-uatc-preview-image"
                                                        src="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundURL'); ?>"
                                                        alt="">
                                                    <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundURL'); ?>"
                                                        type="text" id="button-image-background" class="bc-uk-input">
                                                    <button <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                                        class="bc-uatc-select-image bc-uk-button bc-uk-button-primary">
                                                        <i class="fa fa-image"></i> Select an image
                                                    </button>
                                                </div>
                                                <label for="">Background size</label>
                                                <select <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> name="" id="button-image-background-size">
                                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundSize') === 'cover' ? 'selected' : ''); ?>
                                                        value="cover">Cover
                                                    </option>
                                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundSize') === 'contain' ? 'selected' : ''); ?>
                                                        value="contain">Contain
                                                    </option>
                                                </select>

                                                <label for="">Repeat background</label>
                                                <select <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> name="" id="button-image-background-repeat">
                                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundRepeat') === 'no-repeat' ? 'selected' : ''); ?> value="no-repeat">No Repeat
                                                    </option>
                                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundRepeat') === 'repeat-x' ? 'selected' : ''); ?> value="repeat-x">Repeat X
                                                    </option>
                                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundRepeat') === 'repeat-y' ? 'selected' : ''); ?> value="repeat-y">Repeat Y
                                                    </option>
                                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonImageBackgroundRepeat') === 'repeat' ? 'selected' : ''); ?>
                                                        value="repeat">Repeat
                                                    </option>
                                                </select>

                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>


                            <div class="bc-uatc-form-section">
                                <h3>Button's margin</h3>

                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'useCustomMargin') === 'true' ? 'checked' : ''); ?> id="use_custom_margin"> Use custom margin
                                <p class="bc-atc-explain">All values are in px</p>

                                <ul class="bc-uk-tab" data-uk-tab="{connect: '#button-margin-options'}">
                                    <li><a href="#button-margin-desktop">Desktop</a></li>
                                    <li><a href="#button-margin-tablet">Tablet</a></li>
                                    <li><a href="#button-margin-phone">Phone</a></li>
                                </ul>
                                <ul class="bc-uk-switcher" id="button-margin-options">
                                    <li id="#button-margin-desktop">
                                        <div class="bc-uk-flex">
                                            <div>
                                                <label for="">Top</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginTop'); ?>"
                                                    id="button-margin-top">
                                            </div>
                                            <div>
                                                <label for="">Bottom</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginBottom'); ?>"
                                                    id="button-margin-bottom">
                                            </div>
                                            <div>
                                                <label for="">Left</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginLeft'); ?>"
                                                    id="button-margin-left">
                                            </div>
                                            <div>
                                                <label for="">Right</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginRight'); ?>"
                                                    id="button-margin-right">
                                            </div>
                                        </div>
                                    </li>

                                    <li id="#button-margin-tablet">
                                        <div class="bc-uk-flex">
                                            <div>
                                                <label for="">Top</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginTopTablet'); ?>"
                                                    id="button-margin-top-tablet">
                                            </div>
                                            <div>
                                                <label for="">Bottom</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginBottomTablet'); ?>"
                                                    id="button-margin-bottom-tablet">
                                            </div>
                                            <div>
                                                <label for="">Left</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginLeftTablet'); ?>"
                                                    id="button-margin-left-tablet">
                                            </div>
                                            <div>
                                                <label for="">Right</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginRightTablet'); ?>"
                                                    id="button-margin-right-tablet">
                                            </div>
                                        </div>
                                    </li>


                                    <li id="#button-margin-phone">
                                        <div class="bc-uk-flex">
                                            <div>
                                                <label for="">Top</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginTopPhone'); ?>"
                                                    id="button-margin-top-phone">
                                            </div>
                                            <div>
                                                <label for="">Bottom</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginBottomPhone'); ?>"
                                                    id="button-margin-bottom-phone">
                                            </div>
                                            <div>
                                                <label for="">Left</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginLeftPhone'); ?>"
                                                    id="button-margin-left-phone">
                                            </div>
                                            <div>
                                                <label for="">Right</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonMarginRightPhone'); ?>"
                                                    id="button-margin-right-phone">
                                            </div>
                                        </div>
                                    </li>
                                </ul>


                            </div>

                            <div class="bc-uatc-form-section">
                                <h3>Button's padding</h3>
                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'useCustomPadding') === 'true' ? 'checked' : ''); ?> id="use_custom_padding"> Use custom padding
                                <p class="bc-atc-explain">All values are in px</p>

                                <ul class="bc-uk-tab" data-uk-tab="{connect: '#button-padding-options'}">
                                    <li><a href="#button-padding-desktop">Desktop</a></li>
                                    <li><a href="#button-padding-tablet">Tablet</a></li>
                                    <li><a href="#button-padding-phone">Phone</a></li>
                                </ul>
                                <ul class="bc-uk-switcher" id="button-padding-options">
                                    <li id="#button-padding-desktop">
                                        <div class="bc-uk-flex">
                                            <div>
                                                <label for="">Top</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingTop'); ?>"
                                                    id="button-padding-top">
                                            </div>
                                            <div>
                                                <label for="">Bottom</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingBottom'); ?>"
                                                    id="button-padding-bottom">
                                            </div>
                                            <div>
                                                <label for="">Left</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingLeft'); ?>"
                                                    id="button-padding-left">
                                            </div>
                                            <div>
                                                <label for="">Right</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingRight'); ?>"
                                                    id="button-padding-right">
                                            </div>
                                        </div>
                                    </li>

                                    <li id="#button-padding-tablet">
                                        <div class="bc-uk-flex">
                                            <div>
                                                <label for="">Top</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingTopTablet'); ?>"
                                                    id="button-padding-top-tablet">
                                            </div>
                                            <div>
                                                <label for="">Bottom</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingBottomTablet'); ?>"
                                                    id="button-padding-bottom-tablet">
                                            </div>
                                            <div>
                                                <label for="">Left</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingLeftTablet'); ?>"
                                                    id="button-padding-left-tablet">
                                            </div>
                                            <div>
                                                <label for="">Right</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingRightTablet'); ?>"
                                                    id="button-padding-right-tablet">
                                            </div>
                                        </div>
                                    </li>


                                    <li id="#button-padding-phone">
                                        <div class="bc-uk-flex">
                                            <div>
                                                <label for="">Top</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingTopPhone'); ?>"
                                                    id="button-padding-top-phone">
                                            </div>
                                            <div>
                                                <label for="">Bottom</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingBottomPhone'); ?>"
                                                    id="button-padding-bottom-phone">
                                            </div>
                                            <div>
                                                <label for="">Left</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingLeftPhone'); ?>"
                                                    id="button-padding-left-phone">
                                            </div>
                                            <div>
                                                <label for="">Right</label>
                                                <input type="number"
                                                    value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonPaddingRightPhone'); ?>"
                                                    id="button-padding-right-phone">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="bc-uatc-form-section" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>>
                                <h3>Button's borders</h3>

                                <h4>Border radius</h4>
                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'useCustomBorderRadius') === 'true' ? 'checked' : ''); ?> id="use_custom_border_radius"> Use custom border radius
                                <p class="bc-atc-explain">All values are in px</p>
                                <div class="bc-uk-flex">
                                    <div>
                                        <label for="">Top Left</label>
                                        <input type="number"
                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonRadiusTopLeft'); ?>"
                                            id="button-radius-top-left">
                                    </div>
                                    <div>
                                        <label for="">Top Right</label>
                                        <input type="number"
                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonRadiusTopRight'); ?>"
                                            id="button-radius-top-right">
                                    </div>
                                    <div>
                                        <label for="">Bottom Left</label>
                                        <input type="number"
                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonRadiusBottomLeft'); ?>"
                                            id="button-radius-bottom-left">
                                    </div>
                                    <div>
                                        <label for="">Bottom Right</label>
                                        <input type="number"
                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonRadiusBottomRight'); ?>"
                                            id="button-radius-bottom-right">
                                    </div>
                                </div>

                                <h4>Border</h4>
                                <div class="bc-uk-flex">
                                    <div>
                                        <label for="">Border width (px)</label>
                                        <input type="number" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?>
                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonBorderWidth'); ?>"
                                            id="button-border-width">
                                    </div>

                                    <div>
                                        <label for="">Border color</label>
                                        <input type="text" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> class="bc-uatc-color-picker"
                                            value="<?php echo Options::bc_atc_get_option($uatcOptions, 'buttonBorderColor'); ?>"
                                            id="button-border-color">
                                    </div>

                                    <div>
                                        <label for="">Border style</label>

                                        <select name="" id="button-border-style">
                                            <option value="" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == '' ? 'selected' : ''); ?>>
                                                Nothing
                                            </option>
                                            <option value="dotted" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == 'dotted' ? 'selected' : ''); ?>>
                                                Dotted
                                            </option>
                                            <option value="dashed" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == 'dashed' ? 'selected' : ''); ?>>
                                                Dashed
                                            </option>
                                            <option value="solid" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == 'solid' ? 'selected' : ''); ?>>
                                                Solid
                                            </option>
                                            <option value="double" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == 'double' ? 'selected' : ''); ?>>
                                                Double
                                            </option>
                                            <option value="groove" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == 'groove' ? 'selected' : ''); ?>>
                                                Groove
                                            </option>
                                            <option value="ridge" <?php echo (Options::bc_atc_get_option($uatcOptions, 'buttonBorderStyle') == 'ridge' ? 'selected' : ''); ?>>
                                                Ridge
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="bc-uatc-form-section">
                                <h3>Other settings</h3>

                                <h4>Ajax add to cart</h4>
                                <input class="bc-uk-checkbox" type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'enableAjaxProductPage') === 'true' ? 'checked' : ''); ?> id="enable_ajax_add_to_cart"> Enable ajax add to cart on product
                                pages (no
                                reload)

                                <div>
                                    <label class="" for="">Selector for other buttons to have ajax</label>
                                    <input class="bc-uk-input"
                                        value="<?php echo Options::bc_atc_get_option($uatcOptions, 'additionalAjaxSelector'); ?>"
                                        type="text" id="additional_ajax_selector"
                                        placeholder="Place selector for buttons here">
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </li>

            <li>
                <!--      quanity styles tab      -->
                <div id="quantity-style">

                    <div class="row">
                        <div class="col-6">
                            <h2>Styles for quantity box</h2>
                            <?php if (!Config::IS_PRO): ?>
                                <p class="bc-uatc-upgrade-notice">Styles for quantity box, the add and minus icon are
                                    available in the PRO version only. <a target="_blank"
                                        href="<?php echo Config::BC_ULTIMATE_ATC_LANDING_PAGE; ?>">Click
                                        here to upgrade</a></p>
                            <?php endif; ?>


                            <div style="display: none;">
                                <label for="">Float?</label>
                                <select <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> name=""
                                    id="quantity-float">
                                    <option value="">No settings</option>
                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'quantityFloat') === 'bc-uatc-float-left' ? 'selected' : ''); ?>
                                        value="bc-uatc-float-left">Float left
                                    </option>
                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'quantityFloat') === 'bc-uatc-float-right' ? 'selected' : ''); ?>
                                        value="bc-uatc-float-right">Float right
                                    </option>
                                    <option <?php echo (Options::bc_atc_get_option($uatcOptions, 'quantityFloat') === 'bc-uatc-no-float' ? 'selected' : ''); ?>
                                        value="bc-uatc-no-float">Block
                                    </option>
                                </select>
                            </div>

                            <label for="">Use Ultimate ATC quantity box style</label>
                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'useATCQuantityStyle') === 'true' ? 'checked' : ''); ?> id="use_atc_quantity_style"> Use

                            <label for="">Display minus and add button around quantity</label>
                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'displayAddMinus') === 'true' ? 'checked' : ''); ?> id="display_add_minus"> Display

                            <label for="">Display quantity input in shop page</label>
                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'showQuantityBoxShopPage') === 'true' ? 'checked' : ''); ?>
                                id="show_quantity_box_shop_page"> Display


                            <label for="">Display quantity input in category page</label>
                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'showQuantityBoxCategoryPage') === 'true' ? 'checked' : ''); ?>
                                id="show_quantity_box_category_page"> Display

                            <label for="">Update cart on increase/decrease buttons click (cart page only)</label>
                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'updateCartOnIncreaseDecreaseClick') === 'true' ? 'checked' : ''); ?>
                                id="update_cart_on_increase_decrease_click"> Use


                            <hr />


                            <?php

                            Static_UI::label('', 'Quantity box size (px)', true);
                            echo Static_UI::flex_section(
                                array(
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Width:</label> <input %1$s type="number" value="%2$s" id="qty-box-width" placeholder="width"> </div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxWidth')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Height:</label> <input %1$s type="number" value="%2$s" id="qty-box-height" placeholder="height"> </div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxHeight')),

                                ),
                                ''
                            );

                            Static_UI::label('', 'Quantity box borders (px),  (use -100 to not use the value)', true);
                            echo Static_UI::flex_section(
                                array(
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Color:</label> <input  %1$s type="text" class="bc-uatc-color-picker"  value="%2$s" id="qty-box-border-color"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxBorderColor')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Top:</label> <input  %1$s type="number" value="%2$s" id="qty-box-border-top"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxBorderTop')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Right:</label> <input  %1$s type="number" value="%2$s" id="qty-box-border-right"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxBorderRight')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Bottom:</label> <input  %1$s type="number" value="%2$s" id="qty-box-border-bottom"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxBorderBottom')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Left:</label> <input  %1$s type="number" value="%2$s" id="qty-box-border-left"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'qtyBoxBorderLeft')),
                                ),
                                ''
                            );

                            ?>
                            <hr>
                            <?php

                            Static_UI::label('', 'Increase, decrease buttons size (px)', true);
                            echo Static_UI::flex_section(
                                array(
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Width</label> <input %1$s type="number" value="%2$s" id="minus-add-width" placeholder="width"></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddWidth')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Height</label> <input %1$s type="number" value="%2$s" id="minus-add-height" placeholder="height"></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddHeight')),

                                ),
                                ''
                            );

                            Static_UI::label('', 'Increase, decrease buttons borders (use -100 to not use the value)', true);
                            echo Static_UI::flex_section(
                                array(
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Color:</label> <input  %1$s type="text" class="bc-uatc-color-picker"  value="%2$s" id="minus-add-border-color"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddBorderColor')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Top:</label> <input  %1$s type="number" value="%2$s" id="minus-add-border-top"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddBorderTop')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Right:</label> <input  %1$s type="number" value="%2$s" id="minus-add-border-right"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddBorderRight')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Bottom:</label> <input  %1$s type="number" value="%2$s" id="minus-add-border-bottom"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddBorderBottom')),
                                    sprintf('<div style="width: 70px; margin: 0 5px;"><label>Left:</label> <input  %1$s type="number" value="%2$s" id="minus-add-border-left"  ></div>', (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''), Options::bc_atc_get_option($uatcOptions, 'minusAddBorderLeft')),
                                ),
                                ''
                            );


                            ?>
                            <hr>


                            <?php $style = Options::bc_atc_get_option($uatcOptions, 'quantityBoxStyle'); ?>

                            <?php Static_UI::label('', 'Select style for the quantity box', true); ?>

                            <label for=""><img style="width: 100px;"
                                    src="<?php echo plugins_url('../bundle/css/images/bc-atc-qty-style-01.png', __FILE__) ?>">
                                <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : '');
                                echo ($style == 'bc-uatc-quantity-style-1' ? "checked" : "") ?>
                                    value="bc-uatc-quantity-style-1" type="radio" name="quantity-box-style"></label>
                            <label for=""><img style="width: 100px;"
                                    src="<?php echo plugins_url('../bundle/css/images/bc-atc-qty-style-02.png', __FILE__) ?>">
                                <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : '');
                                echo ($style == 'bc-uatc-quantity-style-2' ? "checked" : "") ?>
                                    value="bc-uatc-quantity-style-2" type="radio" name="quantity-box-style">
                            </label>
                            <label for=""><img style="width: 100px;"
                                    src="<?php echo plugins_url('../bundle/css/images/bc-atc-qty-style-03.png', __FILE__) ?>">
                                <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : '');
                                echo ($style == 'bc-uatc-quantity-style-3' ? "checked" : "") ?>
                                    value="bc-uatc-quantity-style-3" type="radio" name="quantity-box-style">
                            </label>
                            <label for=""><img style="width: 100px;"
                                    src="<?php echo plugins_url('../bundle/css/images/bc-atc-qty-style-04.png', __FILE__) ?>">
                                <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : '');
                                echo ($style == 'bc-uatc-quantity-style-4' ? "checked" : "") ?>
                                    value="bc-uatc-quantity-style-4" type="radio" name="quantity-box-style">
                            </label>
                            <label for=""><img style="width: 100px;"
                                    src="<?php echo plugins_url('../bundle/css/images/bc-atc-qty-style-05.png', __FILE__) ?>">
                                <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : '');
                                echo ($style == 'bc-uatc-quantity-style-5' ? "checked" : "") ?>
                                    value="bc-uatc-quantity-style-5" type="radio" name="quantity-box-style">
                            </label>
                            <label for=""><img style="width: 100px;"
                                    src="<?php echo plugins_url('../bundle/css/images/bc-atc-qty-style-06.png', __FILE__) ?>">
                                <input <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : '');
                                echo ($style == 'bc-uatc-quantity-style-6' ? "checked" : "") ?>
                                    value="bc-uatc-quantity-style-6" type="radio" name="quantity-box-style"></label>


                            <label for="">Quantity box hide arrows (up down)</label>
                            <input class="bc-uk-checkbox" <?php echo (!Config::IS_PRO ? 'data-field="bc-uatc-pro-only"' : ''); ?> type="checkbox" <?php echo (Options::bc_atc_get_option($uatcOptions, 'hideQtyInputArrows') === 'true' ? 'checked' : ''); ?> id="hide-qty-input-arrows"> Hide
                            them


                        </div>

                        <div class="col-6"></div>

                    </div>


                </div>
            </li>
        </ul>
        <input type="hidden" name="bc-uatc-save-settings-nonce"
            value="<?php echo wp_create_nonce('bc-uatc-save-settings-nonce'); ?>">
        <button class="bc-uk-button-primary bc-uk-button" id="save-settings"><i class="fa fa-save"></i> Save settings
        </button>
    </div>
</div>