<?php
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        $name = $_FILES["pictures"]["name"][$key];
        move_uploaded_file($tmp_name, "data/$name");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Fale conosco</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Inscreva-se</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation' style='height:30px;'>* Campos obrigatórios</div>
                <!-- <input type='text' class='spmhidip' name='' /> -->

                <div class='container' style='height:80px;'> 
                   <!-- Aqui é o input da imagem de perfil -->
                <label>Inclua sua foto de perfil!</label><br/>
                <input type="file" name="pictures[]" />
                
                </div>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nome completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >E-mail:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nome de usuário*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Senha*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container' style='height:80px;'> 
                   <!-- Aqui é o input do Curriculo -->
                <label>Envie seu Curriculo!</label><br/>
                <input type="file" name="" />
                
                </div>

                <div class='container' >
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
