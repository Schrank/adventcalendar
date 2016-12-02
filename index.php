<?php
header('Content-Type: text/html; charset=utf-8');

$days = [
    11,
    16,
    24,
    8,
    18,
    4,
    10,
    2,
    19,
    1,
    20,
    14,
    22,
    3,
    15,
    6,
    17,
    9,
    23,
    12,
    5,
    13,
    7,
    21,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Adventskalender</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body {
            margin 0 1em;
        }

        .day {
            min-height: 4em;
            font-size: 5em;
            text-align: center;
        }

        a {
            padding-top: 1em;
            display: block;
            height: 100%;
            padding-bottom: 1em;
            background-color: #d9534f;
        }

        a:hover {
            text-decoration: none;
        }

        a.open {
            background-color: #5cb85c;
        }
    </style>
</head>
<body>
<h1>Adventskalender für meinen Herzensmensch</h1>
<div clas="container-fluid">
    <?php for ($i = 1; $i <= 24; $i++): ?>
        <?php $alreadyOpen = (date('j') >= $days[$i - 1]); ?>
        <?php if ($i % 6 == 1): ?>
            <div class="row">
        <?php endif; ?>
        <div class="day col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <a href="showImage.php?day=<?php echo $days[$i - 1]; ?>"
               class=" <?php if ($alreadyOpen): echo 'open'; endif; ?>">
                <?php echo $days[$i - 1]; ?>
            </a>
        </div>
        <?php if ($i % 6 == 0): ?>
            </div>
        <?php endif; ?>
    <?php endfor; ?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
</body>
</html>
