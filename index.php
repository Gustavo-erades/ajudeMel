<?php 
    session_start();
    include_once("acessos.php");
    $qtd_acessos=null;
    $sql="SELECT id FROM acessos";
    $qtd_acessos= mysqli_num_rows(mysqli_query($conexao, $sql));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="paws.png" type="image/x-icon">
    <title>Olá, essa é a mel!</title>
</head>
<body>
    <div class="container">
        <div class="texto">
            <h1>Olá, me chamo Mel!</h1>
            <p>
                Caso você tenha me encontrado, por favor, entre em contato com meus donos. Eles estão a minha procura!
                Você pode <a target="_blank" href="mailto:meuemail@gmail.com?subject=Achei a mel">enviar um email</a> para eles, <a target="_blank" href="https://api.whatsapp.com/send?phone=5561999999999&text=Achei%20a%20Mel!">mandar mensagem</a> ou até mesmo <a href="tel:+5561999999999">ligar</a> para eles. Muito obrigada.
            </p>
        </div>
        <div>
            <p>
                Quanto a meus donos você pode procurar por:
                <ul>
                    <li>André Luiz</li>
                    <li>Késsia Moreira</li>
                    <li>Gustavo Êrades</li>
                    <li>Giovana Kethelen</li>
                </ul>
            </p>
            <p>
                Se puder, ligue lá em casa usando o número <a href="tel:+5561999999999">(61) 3256-6605</a>
            </p>
        </div>
        <div>
            <h3>Por favor, me ajude a encontrar minha família.</h3>
            <p>
                Número de pessoas que já visitaram essa página: <?= $qtd_acessos ?>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
