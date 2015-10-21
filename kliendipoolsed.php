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
<img id="myImage" onclick="changeImage()" src="https://whyweprotest.net/attachments/cat-science1-jpg.206344/" width="180" height="120">

<script>
    $(document).ready(function() {
        $('#myImage').click(function() {
            $('#myImage').attr("src", "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTiOfAJ_h6V2ITLN5PcYCzLYW9z8t9qQDaMUK6vEwG1QileOlUl");
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
<!--9.ül -->

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
<!-- 10.ül-->





</body>
</html>

