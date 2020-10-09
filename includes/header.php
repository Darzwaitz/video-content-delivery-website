<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>

    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js "></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js "></script>
    <script src="js/commonActions.js"></script>
    <title>Document</title>
</head>
<!-- <?php phpinfo() ?>
<h1>testy</h1> -->

<body>
    <!-- <h1>This iz Darzy!!</h1> -->
    <div id="pageContainer">

        <div id="mastHeadContainer">
            <button class="navShowHide">
            <img src="assets/icons/menu.png" alt="menu icon" title="menu">
            </button>

            <a href="index.php" class="logoContainer">
                <img src="assets/imgs/VideoTubeLogo.png" alt="logo image" title="logo">
            </a>

            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" class="searchBar" name="term" placeholder="Search">
                    <button class="searchButton">
                    <img src="assets/icons/search.png" alt="search icon" title="search">

                    </button>
                </form>
            </div>

            <div class="rightIcons">
                <a href="upload.php">
                    <img src="assets/icons/upload.png" alt="upload icon" title="Upload" class="upload">
                </a>
                <a href="#">
                    <img src="assets/imgs/profilePictures/default.png" alt="upload icon" title="Profile" class="upload">
                </a>
            </div>

        </div>
        <!--/mastHeadContainer -->

        <div id="sideNavContainer" style="display:none;">

        </div>
        <!--/sideNavContainer -->

        <div id="mainSectionContainer">
            <div id="mainContentContainer">
