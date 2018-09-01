<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!-- Link Externo para Fontes-->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <!-- Link Interno para Estilo CSS-->
        <link rel="stylesheet" href="css/estilo.css" />


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <script src="jq/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.date').mask('00/00/0000');
                $('.time').mask('00:00:00');
                $('.date_time').mask('00/00/0000 00:00:00');
                $('.cep').mask('00000-000');
                $('.phone').mask('0-0000-0000');
                $('.phone_with_ddd').mask('(00) 0-0000-0000');
                $('.phone_us').mask('(000) 000-0000');
                $('.mixed').mask('AAA 000-S0S');
                $('.cpf').mask('000.000.000-00', {reverse: true});
                $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
                $('.money').mask('000.000.000.000.000,00', {reverse: true});
                $('.money2').mask("#.##0,00", {reverse: true});
                $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                    translation: {
                        'Z': {
                            pattern: /[0-9]/, optional: true
                        }
                    }
                });
                $('.ip_address').mask('099.099.099.099');
                $('.percent').mask('##0,00%', {reverse: true});
                $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
                $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
                $('.fallback').mask("00r00r0000", {
                    translation: {
                        'r': {
                            pattern: /[\/]/,
                            fallback: '/'
                        },
                        placeholder: "__/__/____"
                    }
                });
                $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
            });

        </script>

    </head>
    <body>  

        <div class="topo">
            Venicius Mateus Malage Back
        </div>

        <div class="container">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li>
                    <a href="#">Produtos</a>
                    <ul>

                        <li><a href="#">Perecível</a></li>
                        <li>
                            <a href="#">Não-Perecível</a>
                        </li>
                    </ul>
                </li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="Galeria de Fotos.php">Galeria de Fotos</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div class="containerSlider">
            <div class="col-md-5">
                <label id="lblNome">Nome: </label>
         
                <input class="input" type="text" id="inpNome" />
            </div>

            <div class="col-md-5">

                <label id="lbllblEmail">E-mail: </label>
                <input class="input" type="text" id="inpEmail" />
            </div>


            <label id="lblTelefone">Celular: </label>
            <input class="phone" type="text" id="inpTelefone" />
            <br>
            
             <label id="lblCPF">CPF: </label>
            <input class="cpf" type="text" id="inpCPF" />
            <br>
            
             <label id="lblTelefone">Telefone: </label>
            <input class="phone_with_ddd" type="text" id="inpTelefone" />
            <br>

            <label id="lblDataNascimento">Data de Nascimento: </label>
            <input class="input" type="text" id="datepicker">

        </div>




    </body>
</html>
