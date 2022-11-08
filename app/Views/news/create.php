

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="news/create" method="post">
    <?= csrf_field() ?>

    
                                      <label class="form-label" style="color: white;">Email Address</label>
                                      <input type="text" class="form-control" id="username" name="email" placeholder="Username" />
                                  
                                      <label class="form-label" style="color: white;">Password</label>
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                 

                                  
                                    <label class="form-label" style="color: white;">Confirm Password</label>
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" />
                               

                                  
                                      <button type="submit">Submit</button>
                                 
</form>
