<style>
    main {
        text-align: center;

    }

    main form {
        display: flex;
        flex-direction: column;
    }

    form input {
        width: 80px;
    }

    form label {
        width: 30px;
    }
</style>

<main>
    <h3>Register</h3>
    <form action="" method="post">
        <div class="">

            <label>Username:
                <input type="text" name="username" id="username">

            </label>
        </div><br>
        <div class="">

            <label>Password:
                <input type="password" name="password" id="password">

            </label><br><br>
            <input type="submit" >
        </div>

    </form>

    <script>
        let serverName = "<?php echo $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']; ?>";
        let inputSubmit = document.querySelector("input[type='submit']");
        console.log(serverName);

        if (inputSubmit) {
            inputSubmit.addEventListener("click", function(event) {
                event.preventDefault();

                let username = document.querySelector("#username").value;
                let password = document.querySelector("#password").value;

                fetch("register/" + username + "/" + password, {
                        method: "GET", // Método HTTP, pode ser "GET", "POST", etc.
                        headers: {
                            "Accept": "application/json", // Indica que espera receber JSON
                            "Content-Type": "application/json" // Indica que o conteúdo enviado é JSON
                        },
                
                    })
                    .then(response => {
                        // Verifica se a resposta está ok (status 200-299)
                        if (!response.ok) {
                            throw new Error('Erro na requisição: ' + response.statusText);
                        }
                        console.log(response);
                    })
                    .then(data => {
                        // Manipula o dado JSON recebido
                        console.log(data);
                    })
                    .catch(error => {
                        // Lida com qualquer erro que tenha ocorrido durante o processo
                        console.error('Erro:', error);
                    });

                // `result` agora é processado dentro da cadeia de promessas
            });
        }
    </script>


    function click(event) {

    }
    </script>

</main>