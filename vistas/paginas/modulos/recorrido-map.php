<section class="container oe-main-content" data-uk-scrollspy="{cls:'animate-started',delay:300}">
    <h2 class="oe-heading-2">RECORRIDO DE LA EXCURSIÓN</h2>
</section>


<?php foreach ($planes as $key => $value) : ?>

<?php if ($_GET["id"] == $value["id"]) : ?>
<?php echo $value["recorrido"] ?>
<!-- <div id="map-canvas" style="min-height: 500px;"></div> -->
<?php endif ?>
<?php endforeach ?>