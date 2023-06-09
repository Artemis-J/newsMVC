<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>News</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" type="text/css" href="templates/index.css">

</head>

<body>

    <h2 class="text-center m-4" id="title"> News System </h2>
    {include file="head.tpl"}

    <div class="d-flex p-2 justify-content-end">
        <a href="index.php?c=News&a=add">
            <button class="btn btn-sm btn-dark">
                <span class="fa fa-add"></span> Add Article
            </button>
        </a>
    </div>

    {block name="content"}
        <section class="p-5 mx-5" id="newsList">
            <div class="row">
                <!-- 左边栏 -->
                <div class="col-md-9" id="contentArea">
                    {* news *}
                    <div class="news-item m-3 p-2 border border-warning rounded">
                        {foreach $page_news as $news}
                            <strong>
                                <h2 id="{$news.id}">
                                    <i class="fa-solid fa-hand-point-right" style="color: #b889d4;"></i>
                                    <a href="index.php?c=News&a=detail&id={$news.id}"
                                        style="color: #412a4f;">{$news.titre|capitalize}</a>
                                </h2>
                            </strong>
                            <p class="date text-secondary">Publié le {$news.date|date_format:"%H:%M:%S %d/%m/%Y"}</p>
                            <p>{$news.preview}...</p>

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
                            <hr class="border border-secondary">
                        {/foreach}
                    </div>
                     {* pagination *}
                     <nav aria-label="Page navigation">
                     <ul class="pagination justify-content-center">
                         <li class="page-item">
                             <a class="page-link" href="index.php?c=News&a=page&page={$pre}" aria-label="Previous">
                                 &laquo;
                             </a>
                         </li>
                         {foreach $totalPages as $page}
                             <li class="page-item {if $currentPage == $page}active{/if}">
                                 <a class="page-link" href="index.php?c=News&a=page&page={$page}">{$page}</a>
                             </li>
                         {/foreach}
                         <li class="page-item">
                             <a class="page-link" href="index.php?c=News&a=page&page={$next}" aria-label="Next">
                                 &raquo;
                             </a>

                         </li>
                     </ul>
                 </nav>
                </div>

                <!-- 右边栏 -->
                <div class="col-md-3 p-3">
                    <!-- 日历 -->
                    <div id="calendar"></div>
                    <script>
                        var highlightedDates = [
                            {foreach $list_news as $news}
                                "{$news.date|date_format:'%Y-%m-%d'}",             
                            {/foreach}
                        ];
                        /*数组从小到大排列，可有可无
                    highlightedDates.sort(function(a, b) {
                        return new Date(a) - new Date(b);
                    });
                    */
                        flatpickr("#calendar", {
                            inline: true,
                            dateFormat: 'Y-m-d',
                            enable: highlightedDates,
                            onChange: function(selectedDates, dateStr, instance) {
                                // 发送 AJAX 请求
                                var xhr = new XMLHttpRequest();
                                var url = 'http://localhost/newsMVC/index.php?c=News&a=calendar&d=' + dateStr;
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // 请求成功，在选中的HTML区域显示响应内容
                                        document.getElementById("contentArea").innerHTML = xhr.responseText;
                                    }
                                }
                                xhr.open('GET', url, true);
                                xhr.send();
                            }
                        });
                    </script>
                    <br />
                    <!-- 目录 -->
                    <ul>
                        {foreach $page_news as $news}
                            <li class="title-li"><a href="#{$news.id}">{$news.titre|capitalize}</a></li>
                        {/foreach}
                    </ul>
                </div>
            {/block}
            <!-- 回到顶部 -->
            <div>
                <button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>
            </div>

            <script>
                var backToTopBtn = document.getElementById('back-to-top');
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 400) {
                        backToTopBtn.style.display = 'block';
                    } else {
                        backToTopBtn.style.display = 'none';
                    }
                });
                backToTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            </script>

    </section>

    {include file="footer.tpl"}

</body>

</html>