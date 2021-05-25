<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="cards">
        <div class="card">
            <h1>Регистрация</h1>
            <form action="register.php" method="post" style="padding: 10px">

                <div>
                    <div style="display: none">
                        <label for="id">Номер пользователя</label><br>
                        <input type="text" id="id" name="id" value="<?= $_SESSION['id'] ?>">
                    </div>
                </div>

                <div>
                    <label for="name">Имя:</label><br>
                    <input type="text" id="name" name="name" value="<?= $_SESSION['name'] ?? '' ?>">
                    <span class="error" style="display: <?= $_SESSION['errors']['name'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['name'] ?>
            </span>
                </div>


                <div>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" value="<?= $_SESSION['email'] ?? '' ?>">
                    <span class="error" style="display: <?= $_SESSION['errors']['email'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['email'] ?>
            </span>
                </div>


                <div>
                    <label for="password">Пароль:</label><br>
                    <input type="password" id="password" name="password" value="<?= $_SESSION['password'] ?? '' ?>">
                    <span class="error" style="display: <?= $_SESSION['errors']['password'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['password'] ?>
            </span>
                </div>


                <p><span class="error" style="display: <?= $_SESSION['errors']['register'] ? 'block' : 'none' ?>">
                    <?= $_SESSION['errors']['register'] ?? '' ?>
                </span>
                </p>


                <button class="btn" type="submit" name="submit">Зарегистрироваться</button>
                <a href="/index.php">Назад</a>
            </form>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>