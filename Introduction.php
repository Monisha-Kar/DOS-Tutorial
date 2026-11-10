
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOS Tutorial</title>

    <!-- Bootstrap and existing CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/base.css">

    <!-- Tutorial page CSS -->
    <link rel="stylesheet" href="css/tutorial.css">
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="Introduction.php">
                    DOS Tutorial
                </a>
            </div>

            <ul class="nav navbar-nav">
                <li>
                    <a href="Introduction.php">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        Introduction
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="DOSCommands.php" class="next-button">
                        Next
                        <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                </li>
            </ul>

        </div>
    </nav>


    <!-- Main container -->
    <div class="container-fluid tutorial-container">
        <div class="row tutorial-row">

            <!-- Left column: Chapter index -->
            <div id="chapter-index" class="col-md-3">

                <div class="chapter-panel">

                    <h4 class="chapter-heading">
                        <span class="glyphicon glyphicon-list"></span>
                        ALL CHAPTERS
                    </h4>

                    <hr>

                    <div id="chapter-list-container">

                        <!-- Chapters will be loaded here using AJAX -->

                    </div>

                </div>

                <!-- Progress Section -->
                <div id="progress-container">
                        <!-- Progress will be loaded using AJAX -->
                </div>

            </div>


            <!-- Middle column: Introduction content -->
            <div id="main-content" class="col-md-9">

                <div class="card">

                    <div class="card-block">

                        <img src="imgs/Introduction.png"
                             class="img-responsive introduction-image"
                             alt="Introduction to DOS">

                    <div class="chapter-title">
                        Chapter 01 : Introduction to MS-DOS
                    </div>

                    

                    </div>

                </div>

            </div>

        </div>
    </div>


    <!-- JavaScript files -->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js"></script>

<script>

$(document).ready(function(){

    // Fetch all chapters
    $.ajax({

        url: "fetch_chapters.php",

        method: "POST",

        data: {
            current_file: "Introduction.php"
        },

        success: function(data) {

            $("#chapter-list-container").html(data);

        },

        error: function() {

            $("#chapter-list-container").html(
                "Unable to load chapters."
            );

        }

    });

    // Fetch chapter progress
    $.ajax({

        url: "fetch_progress.php",
        method: "POST",

        data: {
            current_file: "Introduction.php"
        },

        success: function(data) {

            $("#progress-container").html(data);

        },

        error: function() {

            $("#progress-container").html(
                "Unable to load progress."
            );

        }

    });

});

</script>

</body>
</html>
