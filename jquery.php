<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="assets/jquery/jquery.js"></script> -->
    <title>Jquery</title>
</head>

<style>
.img {
    width: 96px;
    height: 96px;
}
</style>

<body>
    <img class="img" src="assets/images/download (2).jpg" alt="">
    <h1>Belajar JQuery!!</h1>
    <div id="box1">Box 1</div>
    <div class="boxes">Baris pertama</div>
    <div class="boxes">Baris kedua</div>
    <div class="boxes">Baris ketiga</div>
    <form>
        <input type="text" id="inputText">
        <input type="submit">
    </form>
</body>

<script>
// $(document).ready(function() {
//     $('h1').css('color', 'red');
// });

// $(document).ready(function() {
//     $('h1').css('color', 'blue');
//     $('#box1').css('color', 'blue');
//     $('.boxes').css('color', 'blue');
// });

// $(document).ready(function() {
//     $('h1').css('color', 'blue');
//     $('#box1').css('color', 'blue');
//     $('.boxes').css('color', 'blue');
//     $('.boxes:first').css('color', 'red');
//     $('.boxes:last').css('color', 'aqua');
// });

$(document).ready(function() {
    //     $('h1').css('color', 'blue');
    //     $('#box1').css('color', 'blue');
    //     $('.boxes').css('color', 'blue');
    //     $('.boxes:first').css('color', 'red');
    //     $('.boxes:last').css('color', 'aqua');
    //     $('.boxes:eq(2)').css('color', 'red');
    // });
    $('h1').click(function() {
        $('h1').css('color', 'red');
    });
    $('h1').mouseenter(function() {
        $('h1').css('color', 'yellow');
    });
    $('h1').mouseleave(function() {
        $('h1').css('color', 'green');
    });
    //------ get dan set nilai ------
    $('form').submit(function() {
        alert($('#inputText').val());
    });
});
</script>

</html>