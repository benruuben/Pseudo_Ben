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




</body>
</html>

