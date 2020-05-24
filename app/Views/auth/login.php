<div class="container mt-5">

    <div class="col-sm-4 mx-auto">  
        <div class="card">
            <div class="card-body"> 
                <h4 class="text-secondary text-center mt-2 mb-2">Perpus Login</h4>
                <form action="<?= base_url('auth/do_login')?>" method="post">
                    <div class="form-group">    
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-info">Login</button>
                    </div>
                    <div class="text-center mt-4">  
                        <a href="<?=base_url('auth/register')?>" class="">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
