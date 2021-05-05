<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('users') ?>">
    <title></title>
  </head>
  <body>

    <?php require_once(container('Header')) ?>

    <h1>USERS PAGE</h1>

    <form method="POST">
      <input type="text" name="users" placeholder="Search in users..">
      <button type="submit">Search</button>
    </form>

    <ul>
      <?php foreach ($users as $user): ?>
        <li><?= $user['username'] ?></li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
