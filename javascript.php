<html>
<head>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<section class="container">
    <div class="row col-3">
        <form name="teste" id="form_id_teste" action="" method="POST">
            <input type="text" id="teste" class="form-control" style="float:left;" name="response"/>
            <input type="submit" name="enviar" class="btn btn-success " style="float:left;">
        </form>
    </div>
    <p id="response" style="border: 1px solid #eee;"></p>
    <div class="btn btn-sucess"></div>
</section>


<script>

    const myForm = document.getElementById("form_id_teste");
    myForm.addEventListener('submit', function (e) {
        e.preventDefault();

        dados(this);
    });

    var resultado = document.querySelector("#response");

    function dados(form) {

        var header = new Headers();
        var form = new FormData(form);
        header.append("Content-Type", "text/html");

        fetch("response.php", {
            method: 'post',
            body: form
        }).then((response) => response.text())
            .then((text) => {
                resultado.innerHTML = text;
                console.log(form);
            }).catch((error) => {
            console.log(error)
        })
    }




</script>
</body>
</html>
