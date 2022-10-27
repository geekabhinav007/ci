
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>
<!-- Default form subscription -->
<form class="text-center border border-light p-5" action="/news/create" method="post">
<?= csrf_field() ?>
    <p class="h4 mb-4">Create Notice</p>

    <p>You can create notice hear using HTML syntax.</p>

    <!-- Name -->
    <input name="title" type="input" id="defaultSubscriptionFormPasswo/news/createrd" class="form-control mb-4" placeholder="Title of Notice">

    <!-- Email -->
    <textarea name="body" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Body of Notice"></textarea>

    <!-- Sign in button -->
    <button name="submit" class="btn btn-info btn-block" type="submit">Create New Notice</button>

</form>
<!-- Default form subscription -->

