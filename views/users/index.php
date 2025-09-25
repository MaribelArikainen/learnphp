<?php include __DIR__ . '/../partials/header.php'; ?>
  <main class="container">
        <a href="/register" class="btn btn-primary">New User</a>
        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?=$user->id?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->password?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/users/edit?id=<?=$user->id?>" class="btn btn-warning">Edit</a>
                                <a href="/users/delete?id=<?=$user->id?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
  </main>
<?php include __DIR__ . '/../partials/footer.php'; ?>