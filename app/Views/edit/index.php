<?= $this->extend('/templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <form action="<?= base_url('admin/update/' . $user->id); ?>" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user->email; ?>" required>
        </div>
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user->fullname; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>

</div>

<?= $this->endSection('page-content'); ?>