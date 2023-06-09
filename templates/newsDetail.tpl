{extends file="index.tpl"}

{block name="content"}
    <section class="p-5 mx-5" id="newsList">
        <div class="news-item mt-3 p-2 border border-dark rounded">
            <h2>
                {$news.titre|capitalize}
            </h2>
            <p>
                {$news.contenu}
            </p>
            <div class="row">
                <div class="d-flex  justify-content-end">
                    <div class="mx-2">
                        <form action="index.php?c=News&a=modify" method="POST">
                            <input type="hidden" name="id" value="{$news.id}">
                            <button type="submit" class="btn btn-sm btn-outline-success">
                                <span class="fa fa-pen"></span> Modify
                            </button>
                        </form>
                    </div>
                    <div>
                        <a href="index.php?c=News&a=delete&id={$news.id}">
                            <button type="submit"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')"
                                class="btn btn-sm btn-outline-danger">
                                <span class="fas fa-trash-alt"></span> Supprimer
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <label for="comment">Comment:</label>
                <hr>
                <textarea name="comment" id="content" style="width: 500px; height: 200px;"></textarea><br>
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
    </section>
{/block}