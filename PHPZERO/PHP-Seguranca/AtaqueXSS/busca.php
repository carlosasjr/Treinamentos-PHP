<!-- Usando o htmlspecialchars para evitar ataques ou quebra de site, transformando codigo em string -->
<h1>Você pesquisou por: <?= htmlspecialchars($_POST['busca']) ?></h1>

...