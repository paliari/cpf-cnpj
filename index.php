<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CPF-CNPJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/vendor/bootstrap-2.3.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<h1>CPF-CNPJ</h1>

<form class="form-horizontal well" method="post">
    <div data-group-cpf-cnpj class="control-group">
        <label class="control-label no-padding-top">
            <div class="btn-group" data-toggle="buttons-radio">
                <span data-group-cpf-cnpj-radio value="cpf" class="btn btn-mini active"><i class="icon-user"></i> CPF</span>
                <span data-group-cpf-cnpj-radio value="cnpj" class="btn btn-mini"><i class="icon-briefcase"></i> CNPJ</span>
            </div>
        </label>
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input data-cpf type="text" required="required" name="cpf-cnpj" placeholder="___.___.___-__" data-mask="999.999.999-99" data-label="CPF">
                <input data-cnpj type="text" required="required" name="cpf-cnpj" style="display: none;" disabled="disabled" placeholder="__.___.___/____-__" data-mask="99.999.999/9999-99" data-label="CNPJ">
            </div>
        </div>
    </div>

    <div data-login-group-capth class="control-group">
        <label class="control-label" for="nomraz">Nome/Rasão Social</label>
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-bookmark"></i></span>
                <input type="text" id="nomraz" placeholder="Nome/Rasão Social" required="required">
            </div>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <button data-login-submit type="submit" class="button btn btn-primary btn-large" >
                Enviar
                <i class="icon-chevron-right icon-white"></i>
            </button>
        </div>
    </div>
</form>

<!--
<script src="http://code.jquery.com/jquery.js"></script>
-->
<script src="assets/vendor/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/vendor/bootstrap-2.2.2/js/bootstrap.min.js" type="text/javascript"></script>
<!--
<script src="assets/vendor/bootstrap-2.3.0/js/bootstrap.min.js"></script>
-->
<script src="assets/vendor/jasny-bootstrap-2.1.1-j2/js/bootstrap-inputmask.js" type="text/javascript"></script>
<script src="assets/js/valida.js"></script>
<script src="assets/js/cpf-cnpj.js"></script>
</body>
</html>