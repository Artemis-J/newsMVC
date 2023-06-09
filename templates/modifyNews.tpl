{extends file="index.tpl"}

{block name="content"}
    <div class="text-center">
        <form action="index.php?c=News&a=update" method="POST">
            <input type="hidden" name="id" value="{$news.id}">
            <div>
                <label for="title">Title:</label>
                <input class="form-control-sm border rounded" type="text" id="title" name="title" value="{$news.titre}">
            </div>
            <br />
            <div>
                <label for="content">Content:</label>
                <textarea id="content" name="content" class="border rounded"
                    style="width: 500px; height: 200px;">{$news.contenu}</textarea>
            </div>
            <br />
            <button class="btn btn-outline-primary d-block mx-auto" type="submit">Save</button>
        </form>
    </div>
{/block}