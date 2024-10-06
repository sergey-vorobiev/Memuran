<?php include_once "include/header.php"; ?>
<section class="section-article">
    <div class="container">
        <article>
            <div class="article-header">
                <time datetime="2024-09-21">21 сен 2024 года</time>
                <a href="#" class="article-header__category">#Категория</a>
            </div>
            <h1>Заголовок статьи блога123qwdw123321qwd3dqw32dqwdqwdqwdd</h1>

            <figure>
                <img src="<?=PATH_UPLOAD_PICTURES . "test-image.jpg"?>" alt="Описание изображения">
                <figcaption>Подпись к изображению</figcaption>
            </figure>

            <section>
                <h2>Введение</h2>
                <p>Это вводный абзац статьи. Он может содержать краткое описание того, о чем будет идти речь в статье.</p>

                <h2>Основная часть</h2>
                <p>Здесь идет основной текст статьи. Можно добавлять цитаты:</p>
                <blockquote>
                    <p>"Это пример цитаты, которую можно использовать для выделения важных мыслей."</p>
                    <cite>— Имя Цитируемого</cite>
                </blockquote>
                <p>А также списки:</p>

                <ol>
                    <li>Первый уровень
                        <ol>
                            <li>Второй уровень
                                <ol>
                                    <li>Третий уровень</li>
                                    <li>Третий уровень</li>
                                </ol>
                            </li>
                            <li>Второй уровень</li>
                        </ol>
                    </li>
                    <li>Первый уровень
                        <ol>
                            <li>Второй уровень</li>
                            <li>Второй уровень</li>
                        </ol>
                    </li>
                </ol>


                <ul>
                    <li>Первый элемент маркированного списка.</li>
                    <li>Второй элемент.</li>
                    <li>Третий элемент.</li>
                </ul>
            </section>

            <section>
                <h2>Таблица данных</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Товар 1</td>
                        <td>Описание товара 1</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td>Товар 2</td>
                        <td>Описание товара 2</td>
                        <td>$20</td>
                    </tr>
                    </tbody>

                    <section>
                        <h2>Заключение</h2>
                        <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.</p>
                        <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.</p>
                        <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.</p>
                        <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.</p>
                        <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                            ресурсы.</p>
                    </section>
                </table>
            </section>

            <section class="article__gallery">
                <div class="article__gallery-item" style="background: url("<?=PATH_UPLOAD_PICTURES . "test-image.jpg"?>")"></div>
                <div class="article__gallery-item" style="background: url("<?=PATH_UPLOAD_PICTURES . "test-image.jpg"?>")"></div>
                <div class="article__gallery-item" style="background: url("<?=PATH_UPLOAD_PICTURES . "test-image.jpg"?>")"></div>
            </section>
        </article>
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
