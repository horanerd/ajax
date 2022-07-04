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
    <div class="btn btn-sucess">  </div>
</section>


<script>

    $("#form_id_teste").submit(function (event) {
       event.preventDefault();
        var variavel = $("input[name='teste']").val();
        $.ajax({

            url: 'response.php',
            method: "POST",
            data: {response: variavel, mar: "teste"},
            dataType: "html",
            beforeSend : function () {
                console.log('Carregando...');
            },
            success: function (data) {
                $('#response').html(data);
            },
            error: function(){
                alert("erro");
            }
        });
    });

</script>
</body>
</html>
