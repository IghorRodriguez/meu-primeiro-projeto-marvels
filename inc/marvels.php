<h1 class="titulo">The Marvels Comunity</h1>
<img class="img" src="img/marvel2.jpg" rcset style="width: 1305px; height: 500px;">
<br><br>
<h2 class="subtitulo">By Ighor Rodri</h2>
<br>
<h2 class="inform">Fique por dentro de todo o universo da Marvel seja conteúdos dos quadrinhos ou UCM.</h2>
<div class="img">
    <img class="oi1" src="img/igor1.jpg" rcset style="width: 250px; height: 300px;" >

    <img class=foto src="img/igor2.jpg" rcset style="width: 250px; height: 300px;">

    <img class=foto src="img/igor3.jpg" rcset style="width: 250px; height: 300px;">

    <img class=foto src="img/igor4.jpg" rcset style="width: 250px; height: 300px;">

    <img class=foto src="img/igor5.jpg" rcset style="width: 250px; height: 300px;">
        </div>

    <h2 class="inform">Se inscreva em nosso site e vire membro da comunidade The Marvels!</h2><br>
    <br><br>
    <div class="comunidade">

    <a id="rolar-ate-aqui"></a>

<form action="backend/cadastrar.php" method="POST">

    <div class="campo-de-dados">
        <label for="name">Nome:</label><br>
        <input id="name" type="text" name="name" velue="" maxlength="30">
    </div>
                
    <div class="campo-de-dados">
        <label for="last_name">Sobrenome:</label><br>
        <input id="last_name" type="text" name="last_name" velue="" maxlength="15">
    </div>

    <div class="campo-de-dados">
        <label for="email">Email:</label><br>
        <input id="email" type="text" name="email" velue="" maxlength="30">
    </div>

    <div class="campo-de-dados">
        <label for="telephone">Telefone:</label><br>
        <input id="telephone" type="text" name="telephone" velue="" maxlength="30">
    </div><br>

    <div class="botao-de-confirmacao">
        <button type="submit" class="button is-block is-link is-large is-fullwidth">Inscrever</button><br><br>
    </div>
    <br>
    <?php if (isset($_GET['n']) && isset($_GET['ln']) && isset($_GET['em']) && isset($_GET['tl'])):?>

    <div class="campo-de-dados">
            Obrigado pelo seu cadastro!<br><br>
            Os dados informados são:<br><br>
                    
    <?php echo $_GET['n'] . ' ' . $_GET['ln'] . ' ' . $_GET['em'] . ' ' . $_GET['tl']; ?>
    </div>
    <?php endif; ?>
</form>

<br><br>
<div class="conteudo">
    <div class="card">
        <div class="viloes">
            <img src="img/viloes.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=viloes">Maiores Vilões</a>
        </div>
    </div>
        
    <div class="card">
        <div class="vingadores">
            <img src="img/avengers.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=avengers">os Vingadores</a>
        </div>
    </div>
        
    <div class="card">
        <div class="xmen">
            <img src="img/Xmens.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=xmen">X-Mens</a>
        </div>
    </div>
                   
    <div class="card">
        <div class="inumanos">
            <img src="img/inhumans.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=inumanos">Inumanos</a>
        </div>
    </div>
</div>
<br><br>
<div class="conteudo">
    <div class="card">
        <div class="fantastico">
            <img src="img/quarteto.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=quarteto">Quarteto Fantástico</a>
        </div>
    </div>
        
    <div class="card">
        <div class="eternos">
            <img src="img/eternos.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=eternos">Eternos</a>
        </div>
    </div>
        
    <div class="card">
        <div class="guardioes">
            <img src="img/GUARD.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=guardioes">Guardiões da Galáxia</a>
        </div>
    </div>
                   
    <div class="card">
        <div class="defensores">
            <img src="img/defenders.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=defensores">Defensores</a>
        </div>
    </div>
</div>
<br><br>
<div class="conteudo">
    <div class="card">
        <div class="sexteto">
            <img src="img/sextetosinistro.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=sexteto">Sexteto Sinistro</a>
        </div>
    </div>
        
    <div class="card">
        <div class="aranhaverso">
            <img src="img/aranhaverso.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=aranhaverso">Aranhaverso</a>
        </div>
    </div>
        
    <div class="card">
        <div class="Cabala">
            <img src="img/cabala.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=cabala">Cabala</a>
        </div>
    </div>
                   
    <div class="card">
        <div class="xforce">
            <img src="img/xforce.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=xforce">X-Force</a>
        </div>
    </div>
</div>
<br><br>
 <div class="conteudo">
    <div class="card">
        <div class="illuminati">
            <img src="img/illuminati.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=illuminati">Illuminati</a>
        </div>
    </div>

    <div class="card">
        <div class="newavengers">
            <img src="img/newavengers.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=newavengers">Novos Vingadores</a>
        </div>
    </div>
        
    <div class="card">
        <div class="thunderbolts">
            <img src="img/thunderbolts.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=thunderbolts">Thunderbolts</a>
        </div>
    </div>
                   
    <div class="card">
        <div class="cosmicos">
            <img src="img/cosmicos.jpg" rcset style="width: 300px; height: 300px;">
            <a href="?page=cosmicos">Entidades Cósmicas</a>
        </div>
    </div>
                
</div>
<br><br>

<h1 class="bonus">MARVEL COMICS COMUNITY</h1>
<img class="img" src="img/marvel.jpg" rcset style="width: 1250px; height: 500px;">