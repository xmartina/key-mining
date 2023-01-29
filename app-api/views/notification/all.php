<?php
require_once "../controllers/notification.php";
$notification = new Notification();
?>
<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Notification</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Notification</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">List Notification</h6>

        <a href="?page=notification_send" class="btn btn-success btn-icon-split btn-sm">
          <span class="icon text-white-50">
            <i class="fas fa-paper-plane"></i>
          </span>
          <span class="text">Send</span>
        </a>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Title</th>
              <th>Content</th>
              <th>Url</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($notification->getAll() as $n) {
            ?>
              <tr>
                <td><?= $n['title'] ?></td>
                <td><?= $n['content'] ?></td>
                <td><a href="<?= $n['url'] ?>" target="_blank"><?= $n['url'] ?></a></td>

              </tr>

            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Icon</th>
              <th>Title</th>
              <th>Type</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

</div>