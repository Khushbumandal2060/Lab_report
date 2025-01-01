<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Effects Demo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #box {
            width: 200px;
            height: 200px;
            background-color: lightblue;
            margin: 20px auto;
            display: block;
        }
        button {
            margin: 5px;
        }
    </style>
</head>
<body>

<h2>jQuery Effects Demo</h2>
<div id="box"></div>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>
<button id="fadeIn">Fade In</button>
<button id="fadeOut">Fade Out</button>
<button id="fadeToggle">Fade Toggle</button>
<button id="slideUp">Slide Up</button>
<button id="slideDown">Slide Down</button>
<button id="slideToggle">Slide Toggle</button>
<button id="animate">Animate</button>

<script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $("#box").hide();
        });

        $("#show").click(function() {
            $("#box").show();
        });

        $("#toggle").click(function() {
            $("#box").toggle();
        });

        $("#fadeIn").click(function() {
            $("#box").fadeIn();
        });

        $("#fadeOut").click(function() {
            $("#box").fadeOut();
        });

        $("#fadeToggle").click(function() {
            $("#box").fadeToggle();
        });

        $("#slideUp").click(function() {
            $("#box").slideUp();
        });

        $("#slideDown").click(function() {
            $("#box").slideDown();
        });

        $("#slideToggle").click(function() {
            $("#box").slideToggle();
        });

        $("#animate").click(function() {
            $("#box").animate({
                width: "300px",
                height: "300px",
                opacity: 0.5
            }, 1000);
        });
    });
</script>

</body>
</html>
