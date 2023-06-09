{extends file="index.tpl"}

{block name="content"}
    <div class="text-center">
        <form method="post" action="index.php?c=User&a=login">
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" name="username" id="user">
            </div>
            <div class="mb-5">
                <label for="password">Password:</label>
                <input type="password" name="password" id="pw">
            </div>
            <div>
                <input type="submit" name="submit" value="Login">
            </div>
            <a class="nav-link" href="index.php?c=User&a=register">create a new account</a>
        </form>
    </div>
{{/block}}