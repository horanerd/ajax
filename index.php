<html>
<head>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<section class="container" >
    <div class="row col-3" >
    <form name="teste" id="form_id_teste" action="response.php" method="POST">
        <input type="text" id="teste" class="form-control" style="float:left;" name="teste"/>
        <input type="submit" name="enviar" class="btn btn-success " style="float:left;">
    </form>
    </div>
    <p id="response" style="border: 1px solid #eee;"></p>
    <div class="btn btn-sucess" onclick="nome(teste)"> teste </div>
</section>
<?php
var_dump(filter_input(INPUT_GET, "descricao", FILTER_SANITIZE_STRIPPED));
?>
<form method="get">
<select name="descricao">
    <option >
        <?= filter_input(INPUT_GET, "descricao", FILTER_SANITIZE_STRIPPED); ?>
    </option>
    <option> Nome </option>
    <option> Telefone </option>
    <option> E-mail </option>

    </select>
    <input type="submit" name="enviar" value="enviar" >
</form>


<script>

    window.onload = document.querySelector("#teste").focus();




    // $(".btn").click(function(){
    //     alert("test");
    // });
    // $("#form_id_teste").submit(function (event) {
    //     var variavel = $('input[name="teste"]').val();
    //     alert(variavel);
    //    event.preventDefault();
    //     $.ajax({
    //         url: 'response.php',
    //         method: "POST",
    //         data: {response: variavel, mar: "teste"},
    //         dataType: "html",
    //         beforeSend : function () {
    //             console.log('Carregando...');
    //         },
    //         success: function (data) {
    //             $('#response').html(data);
    //         },
    //         error: function(){
    //             alert("erro");
    //         }
    //     });

        // var resultado = document.querySelector("#response");
        // fetch("response.php", {
        //     method: 'post',
        //     body: variavel,
        //
        // }).then((response) => response.text())
        //
        //     .then((text) => {
        //         resultado.replaceWith(text)
        //     }).catch((error) => {
        //     console.log(error)
        // })

   // });


</script>
</body>
</html>
