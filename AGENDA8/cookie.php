<?php 

// Cria um cookie chamado 'usuario' com o valor 'gabi'
setcookie('usuario', 'gabi');

// Criando um cookie para durar um dia
setcookie('usuario', 'gabi', (time() + (24 * 3600)));


?>