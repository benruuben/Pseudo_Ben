<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bennu</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<button type="button" onclick="alert('Tere maailm')">Tere maailm!</button>
<a href="http://www.khk.ee" onclick="alert('Tere maailm')">Tere maailm!</a>
<a href="" onclick="alert('Jääme siia')">Jääme siia!</a>
<img
    id="pilt"
    src="https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a.jpeg"
    alt="kass" width="128px" height="136px;" onclick="muuda()">
<script>
    $(document).ready(function() {
        $('#pilt').click(function () {
            $('#pilt').attr('src', 'http://www.rapbasement.com/wp-content/uploads/2014/10/snoop-dogg-4ddc3edb2d557.jpg');
        });
    });
</script>
<br>
<script>
    $(document).ready(function () {
        $("#btn").click(function () {
            $("body").css("background-color", $("#btn").text())
        });
    });
</script>
<button id="btn">Red</button>
<br>


<script>
    $(document).ready(function () {
        $("#btn2").click(function () {
            $("body").css("background-color", $("#btn2").text())
        });
    });
</script>
<button id="btn2">Green</button>
<br>


<script>
    $(document).ready(function () {
        $("#btn3").click(function () {
            $("body").css("background-color", $("#btn3").text())
        });
    });
</script>
<button id="btn3">Blue</button>
<script>
    $(document).ready(function () {
        $("#extra").click(function () {
            $("body").css("background-color", $("#Custom").val())
        });
    });
</script>
<p><label><input type="text" id="Custom" value=""></label></p>
<button id="extra">Custom color!</button>
<br>
<!--9 ja 10 ül -->

<!--Disable right-click menu-->
<script>
    $(document).bind("contextmenu", function () {
        return false;
    }); // Disable contextmenu
</script>

<button id="btn1">Enable right click</button>

<script>
    $("#btn1").on("click", function () {
        $(document).unbind(); // Enable contextmenu via a button
    });
</script>
<!-- 11.ül-->

<button type="button" id="peidaTooEsile">Vajuta siia!</button>
<script>
    $(document).ready(function () {
        $('#peidaTooEsile').click(function() {
            $('#pilt').toggle(function() {
                $('#peidaTooEsile').hide();
            }, function() {
                $('#peidaTooEsile').show();
            });
        });
    });
</script>





</body>
</html>

