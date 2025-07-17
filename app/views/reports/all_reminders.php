<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>All Reminders</h1>
            </div>
        </div>
      </div>
        <br>
      <div class="container"> 
        <div class="row" id="reminders-list">

          <table>
            <thead>
              <tr>
                <th>Subject</th>
                <th>User Name</th>
                <th>Time Stamp</th>
                <th>Completed</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($data['reminders'] as $reminder): ?>
                <tr>
                  <td> <?php echo $reminder['subject'] ?></td>
                  <td> <?php echo $reminder['user_name'] ?> </td>
                  <td> <?php echo $reminder['created_at'] ?> </td>
                  <td class="text-center">
                    <input type="checkbox" name="completed" disabled <?php echo $reminder['completed'] ? 'checked' : '' ?> > 
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </div>

    <br>
        </div>



<?php require_once 'app/views/templates/footer.php' ?>