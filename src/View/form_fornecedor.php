<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de fornecedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-blue-400">
        <ul class="flex">
            <li class="mx-3">
                <a href="../../index.html">Home</a>
            </li>
            <li>
                <a href="#">Novo fornecedor</a>
            </li>
        </ul>
    </header>
    <main class="mt-4 ml-4">
        <form action="../controller/Provider.php" method="POST">
            <section class="columns-3">
                <article>
                    <label for="name">Nome do fornecedor: </label>
                    <input type="text" id="name" name="name" class="border border-blue-400">
                </article>
                <article>
                    <label for="phone">Telefone do fornecedor: </label>
                    <input type="yext" id="phone" name="phone" class="border border-blue-400" min=1 max=100>
                </article>
                <article>
                    <label for="cnpj">CNPJ do fornecedor: </label>
                    <input type="text" id="cnpj" name="cnpj" class="border border-blue-400" min=1 max=100>
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="rounded p-4 bg-blue-700 text-white">Cadastrar</button>
            </article>
        </form>
    </main>
</body>
</html>
