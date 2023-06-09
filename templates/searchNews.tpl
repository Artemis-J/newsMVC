{extends file="index.tpl"}

{block name="content"}
{if $newsList}
  <h2>Search Result:</h2>
  {foreach $newsList as $news}
    <div id="search-results" class="news-item mt-3 p-2 border border-dark rounded">
      <h3>{$news.titre}</h3>
      <p>{$news.contenu}</p>
    </div>
  {/foreach}
{else}
  <p>No Result</p>
{/if}
{{/block}}