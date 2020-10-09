<?php require_once("includes/header.php"); ?>
<?php require_once("includes/classes/VideoDetailsFormProvider.php"); ?>

    <div class="columnContainer">
        <?php
            $formProvider = new VideoDetailsFormProvider();
            echo $formProvider->createUploadForm();
        ?>
    </div>

<?php require_once("includes/footer.php"); ?>
