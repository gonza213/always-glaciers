<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Always </b>Glaciers</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Panel de Control</p>

            <form method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?php

                $ingresar = new ControladorAdministrador();
                $ingresar->ctrIngresarUsuario();

                ?>
            </form>
            <!-- /.social-auth-links -->
            <hr>
            <p class="mb-0">
                <a href="register.html" class="text-center">Volver página principal</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>