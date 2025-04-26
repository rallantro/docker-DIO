<html>

<head>
<title>Gerador de Produtos aleatórios</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "192.168.15.169";
$username = "root";
$password = "190406";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dados (ID, Nome, Descricao, Barra) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2')";


if ($link->query($query) === TRUE) {
  echo "Novo recorde criado com sucesso!";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
