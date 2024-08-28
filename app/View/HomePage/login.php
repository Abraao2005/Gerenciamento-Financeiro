<style>
    main {
        text-align: center;
        
    }

   main form{
    display: flex;
    flex-direction: column;
   }
   form input{
    width: 80px;
   }
   form label{
    width: 30px;
   }
</style>

<main>
    <h3>Login</h3>
    <form action="" method="get">
        <div class="">

            <label>Username:
                <input type="text" name="username" id="username">

            </label>
        </div><br>
        <div class="">

            <label>Password:
                <input type="password" name="password" id="password">

            </label><br><br>
            <input type="submit">
        </div>

    </form>
    <p><a href="">Registrar</a></p>

</main>