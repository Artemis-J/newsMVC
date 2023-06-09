{extends file="index.tpl"}

{block name="content"}

    <div class="text-center">
        <form method="post" action="index.php?c=News&a=add">
            <label for="title">Title:</label>
            <input type="text" name="title" id="newsTitle"><br><br>
            <label for="content">Content:</label>
            <textarea name="content" id="content" style="width: 500px; height: 200px;"></textarea><br>
            

       
            <hr>

            <input type="submit" name="submit" value="Add Article">
        </form>
    </div>



{/block}