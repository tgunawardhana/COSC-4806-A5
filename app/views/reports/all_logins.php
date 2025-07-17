<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>All Logins</h1>

            </div>
        </div>
        <br>
        <div class="container">
        <div class="row" id="login-list">

            <table>
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>Total logins</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($data['logins'] as $login)
                    : ?>
                    <tr>
                      <td> <?php echo $login['username'] ?></td>
                      <td> <?php echo $login['attempt_time'] ?> </td>
   
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            
        </div>    

            <br>
        </div>

        </div>


<?php require_once 'app/views/templates/footer.php' ?>