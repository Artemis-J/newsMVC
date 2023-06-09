<h2>The news of {$newsDate}:</h2>
{foreach $newsList as $news}   
    <div class="news-item mt-3 p-2 border border-dark rounded">
        <strong>
            <h2>{$news.titre}</h2>
        </strong>
        <p class="date text-secondary">Publié le {$news.date}</p>
        <p>{$news.contenu}</p>

    </div>
{/foreach}