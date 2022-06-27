<?php
session_start() 
?>
<DOCTYPE hmtl>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Site-PHP</title>
</head>
<body>
    <h2>Enviar Mensagem</h2>
    <?php if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);    
    }
    ?>
    
        <form name="add_msg" action="processa.php" method="POST">
            <label>Nome: </labe>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo"
             required><br><br>

            <label>Email: </labe>
            <input type="email" name=email" id="email"  placeholder="Melhor Email"
             required><br><br>

            <label>Website: </labe>
            <input type="texto" name="website" id="website"  placeholder="website" 
            required><br><br>

            <label>Mensagem: </labe>
            <input type="text" name="mensagem" id="mensagem" placeholder="mensagem"
             required><br><br>

             <input type="submit" value="Enviar" name="SendAddMsg">
        </form>
    </h2>
</body>
