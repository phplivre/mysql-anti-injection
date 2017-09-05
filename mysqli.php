<?php
// conexão com o mysql
$mysqli = new mysqli ("localhost","root","12345678","db");
// caso não consiga conectar com o servidor mysql
if (mysqli_connect_errno()) {
echo '<h3>Erro ao conectar-se.</h3>Não foi possível conectar-se ao servidor mysql: <font color="red">' . mysqli_connect_error() . '</font>';
exit();
}
// função para uso nos posts
function post($x1) {
	global $mysqli;
return mysqli_real_escape_string($mysqli, $_POST[$x1]);
}
// função para uso nos gets
function get($x1) {
	global $mysqli;
	return mysqli_real_escape_string($mysqli, $_GET[$x1]);
}
// exemplo de como usar
echo post(email);
echo get(id);
?>
