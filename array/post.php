    <div class="titulo">$_POST</div>

    <form action="#" method="post">

        <input type="text" name="nome">
        <input type="text" name="sobrenome">

        <select name="estado">
            <option value="MA">Maranhão</option>
            <option value="DF">Distrito Federal</option>
        </select>
        <button>Enviar</button>

    </form>


    <style>
        form > * {
            font-size: 1.6rem;
        }
    </style>


    <?php

    print_r($_GET);
    echo '<br>';
    print_r($_POST);
    echo '<br>' . count($_POST);
    //echo '<br>' . var_dump($_POST);


    ?>