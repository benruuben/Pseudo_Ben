<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bennu</title>
</head>
<body>
<button type="button" onclick="alert('Tere maailm')">Tere maailm!</button>
<a href="http://www.khk.ee" onclick="alert('Tere maailm')">Tere maailm!</a>
<a href="" onclick="alert('Jääme siia')">Jääme siia!</a>
<img id="myImage" onclick="changeImage()" src="https://whyweprotest.net/attachments/cat-science1-jpg.206344/" width="180" height="120">
<script>
    function changeImage() {
        var image = document.getElementById('myImage');
        if (image.src.match("bulbon")) {
            image.src = "https://whyweprotest.net/attachments/cat-science1-jpg.206344/";
        } else {
            image.src = "https://nktva42l4am2fq6f1bf2dz43-wpengine.netdna-ssl.com/wp-content/uploads/2014/09/words.jpg";
        }
    }
</script>




</body>
</html>

