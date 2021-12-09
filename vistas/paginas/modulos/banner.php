<?php

$banner = ControladorBanner::ctrMostrarBanner();

?>

<div class="oe-home-topslider">
    <div class="oe-slider oe-testimonials-slider" data-flexslider-direction-nav="false" data-flexslider-touch="false"
        data-flexslider-animation="slide">
        <ul class="slides">
            <?php foreach ($banner as $key => $value) : ?>
            <li>
                <div class="oe-flexslider-item oe-slider-bg"
                    style="background-image: url('<?php echo $servidor . $value["img"] ?>'); height: 700px !important">
                    <div class="dark-element"></div>
                    <div class="oe-banner-holder">
                        <div class="oe-white">
                            <div class="oe-block-float oe-float-centered-2x">

                                <div class="widgets x3 oe-effects">
                                    <a class="excursion-link" href="#">
                                        <?php echo $value["excursion"] ?> </a>

                                    <!-- <br><iframe src="tripadvisor.php?idExc=42" scrolling="no" frameborder="0" width="110px;" height="30px;"></iframe> -->

                                    <div class="precio">
                                        <sup>
                                            $ </sup>
                                        <?php echo $value["precio"] ?> <sup>
                                            ARS </sup>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach ?>



        </ul>
    </div>
</div>