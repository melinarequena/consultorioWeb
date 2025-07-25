<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Web</title>
    <link rel="stylesheet" href="./../../src/css/output.css">
</head>
<body class="bg-stone-100" style="margin: auto;">
    <div class="flex min-h-full flex-col justify-center px-6 py-20 lg:px-8 ">
        <div>
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-20 w-auto" src="../../public/img/logo.png"></img>
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-slate-800">Iniciar Sesión</h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form method="POST" action="" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-slate-900">Email</label>
                        <input class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-slate-600 sm:text-sm/6" type="text" name="user" required> </input>
                    </div>
                    <div>
                        <label for="password" class="block text-sm/6 font-medium text-slate-900">Contraseña</label>
                        <input class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-slate-600 sm:text-sm/6" type="password" name="pass" required> </input>
                    </div>
                    <button class="flex w-full justify-center rounded-md bg-slate-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-slate-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type='submit'>Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        require_once "./../Controllers/login-controller.php";
        if (isset($error) && $error == '!U') {
    ?>
            <div role="alert" class="flex items-start bg-red-300 border-l-4 border-red-500 p-4 rounded-md justify-center mx-auto" style="display:flex; justify-content:center; width:30%; padding:5px; background-color: #FFC3C3; border-radius:10px">
                <!-- Icono de advertencia / error -->
                <img class="w-5 h-5" src="https://www.svgrepo.com/show/379925/alert-error.svg" style="margin-top: 10px; width: 40px; margin-right:10px" viewBox="0 0 24 24" stroke="currentColor">

                <div class="ml-3 flex-1">
                    <p class="font-semibold text-red-800">Error</p>
                    <p class="mt-1 text-sm text-red-700">
                        Usuario inexistente. Por favor, inténtalo de nuevo más tarde.
                    </p>
                </div>
            </div>
            <?php
        } else {
            if (isset($error) && $error == '!HP') {
            ?>
                <div role="alert" class="flex items-start bg-red-300 border-l-4 border-red-500 p-4 rounded-md justify-center mx-auto" style="display:flex; justify-content:center; width:30%; padding:5px; background-color: #FFC3C3; border-radius:10px">
                    <!-- Icono de advertencia / error -->
                    <img class="w-5 h-5" src="https://www.svgrepo.com/show/379925/alert-error.svg" style="margin-top: 10px; width: 40px; margin-right:10px" viewBox="0 0 24 24" stroke="currentColor">
                    <div class="ml-3 flex-1">
                        <p class="font-semibold text-red-800">Error</p>
                        <p class="mt-1 text-sm text-red-700">
                            Contraseña incorrecta. Por favor, inténtalo de nuevo más tarde.
                        </p>
                    </div>
                </div>
    <?php
            }
        }
    }
    ?>
</body>
</html>