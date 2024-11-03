<?php

include_once "include/header.php";

$arNotes = getDataFromAPI(PATH_MAIN_API . "notes/get_all_notes.php");

if(empty($arNotes)){
    echo "<p>Не найдены записи</p>";
    exit;
}
?>
<div class="book">
    <div id="pages" class="pages">
        <?php foreach($arNotes as $arNote): ?>
            <?php $arCategory = getCategoryForNote($arNote["note_id_category"]); ?>
            <div class="page">
                <article>
                    <div class="article-header">
                        <time datetime="<?=date("Y-m-d", strtotime($arNote["note_date"]))?>"><?=date("d", strtotime($arNote["note_date"])) . " " . RUSSIAN_MONTH[date("n", strtotime($arNote["note_date"])) - 1] . " " . date("Y", strtotime($arNote["note_date"]))?> года</time>
                        <?php if(!empty($arCategory["category_name"])): ?>
                            <a href="/category/<?=$arCategory["category_alias"]?>/" class="article-header__category"><?=$arCategory["category_name"]?></a>
                        <?php endif; ?>
                    </div>
                    <h1><?=$arNote["note_title"]?></h1>
                    <?php if(isset($arNote["note_filename_image"]) && !empty($arNote["note_filename_image"])): ?>
                        <figure>
                            <img src="/upload/pictures/<?=$arNote["note_filename_image"]?>" alt="Картинка <?=$arNote["note_title"]?>">
                            <figcaption><?=$arNote["note_subtitle_image"]?></figcaption>
                        </figure>
                    <?php endif; ?>
                    <section>
                        <?=$arNote["note_content"]?>
                    </section>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<section class="section-comment" style="display: none">
    <div class="container">
        <section>
            <h2>Комментарии</h2>
            <article>
                <header>
                    <p><strong>Аноним</strong> -
                        <time datetime="2024-09-21T14:00">21 сен 2024, 14:00</time>
                    </p>
                </header>
                <p>Очень полезная статья, спасибо!</p>
            </article>

            <article>
                <header>
                    <p><strong>Ольга</strong> -
                        <time datetime="2024-09-21T15:30">21 сен 2024, 15:30</time>
                    </p>
                </header>
                <p>Хотелось бы увидеть больше информации о данном вопросе.</p>
            </article>
        </section>
        <section>
            <h2>Оставить комментарий</h2>
            <form action="#" method="post">
                <div class="group-input">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="group-input">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="group-input">
                    <label for="comment">Комментарий:</label>
                    <textarea id="comment" name="comment" required></textarea>
                </div>

                <button type="submit">Отправить</button>
            </form>
        </section>
    </div>
</section>

<?php include_once "include/footer.php"; ?>
