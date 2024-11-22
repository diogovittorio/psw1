<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>formulario</title>
</head>

<body>

    <div id="cabecalho">

        <h1 id="titulo">FORMULÁRIO</h1>

    </div>

    <div id="navegacao">

        <a href="https://www.w3schools.com/html/html_form_input_types.asp">HTML Input Types</a>
        <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_text">HTML Input Text</a>
        <a href="https://www.w3schools.com/html/html_form_attributes.asp">HTML Input form Attributes</a>
        <a href="https://www.w3schools.com/html/html_forms.asp">HTML Forms</a>

    </div>

    <div>

        <div class="meio">
            <div id="div1"></div>


            <div id="div2">
                <br><br>
                <h2>Formulário sobre Programação</h2>
                <label for="Text">Digite seu Nome Completo:</label><br>
                <input type="text" id="nome" name="nome1" required> <br> <br>
                <label for="pwd">Crie sua senha:</label> <br>
                <input type="password" id="senha" name="senha1" required><br><br>
                <label for="email">Informe seu email:</label>
                <input type="email" id="email" name="email1" required><br><br>
                <label for="telefone">Informe seu número de telefone:</label>
                <input type="tel" name="telefone" id="tel" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                    required><br><br>
                <label for="nascimento">Coloque sua data de nascimento:</label>
                <input type="date" id="aniversario" name="data" required>
                <p>Qual sua linguagem de programação favorita?</p>
                <input type="radio" class="escolhas" name="radio" required>
                <label for="c++">C++</label>
                <input type="radio" class="escolhas" name="radio" required>
                <label for="java">JAVA</label>
                <input type="radio" class="escolhas" name="radio" required>
                <label for="pyton">PYTON</label>
                <input type="radio" class="escolhas" name="radio" required>
                <label for="C*">C*</label><br>
                <p>O que te fez se interessar por programação?</p>
                <input type="checkbox" name="int1" id="int1" value="youtube" required>
                <label for="int1">Vídeos no youtube</label><br>
                <input type="checkbox" name="int2" id="int2" value="curso" required>
                <label for="int2">Através de cursos</label>
                <input type="checkbox" name="int3" id="int3" value="sujestão" required>
                <label for="int3">Sujestão de pessoas</label>
                <input type="checkbox" name="int4" id="int4" value="sozinho" required>
                <label for="in4">Desenvolveu interesse sozinho</label><br>
                <p>Vc programa utilizando quais despositivos?</p>
                <input type="checkbox" name="disp1" id="disp1" value="celular" required>
                <label for="disp1">Celular</label>
                <input type="checkbox" name="disp2" id="disp2" value="computador" required>
                <label for="disp2">Computador</label>
                <input type="checkbox" name="disp3" id="disp3" value="notebook" required>
                <label for="disp3">Notebook</label><br><br>
                <label for="numero">Vc sabe programar em quantas linguagens diferentes?</label>
                <input type="number" id="num" name="numero" min="0" required><br>
                <input type="submit" value="submit">

            </div>


            <div id="div3"></div>

        </div>

        <div id="rodape">

            <p>&copy; 2024 - Diogo</p>

        </div>



</body>

</html>