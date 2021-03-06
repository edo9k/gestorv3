<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">

      <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Área de Trabalho</a></li>
      <li><a href="#"><i class="fa fa-clipboard"></i> Meus Projetos</a></li>
      <li><a id="go-to-foobar" href="{!! url('/users') !!}"><i class="fa fa-users"></i>Gerenciar Usuários</a></li>
      <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i>Gerenciar Projetos</a></li>
      @is('Admin')
      <li><a href="{!! url('/admin') !!}"><i class="fa fa-shield"></i>Administrativo</a></li>
      @endis
    </ul><!-- /.sidebar-menu -->

    <!-- Horarios -->
    <div class="small-box bg-ldi">
      <div class="small-box">
        <div class="inner">
            <h3>12h30min</h3>
            <p>Fev 2016: 84h</p>
        </div>
        <div class="icon">
            <i class="ion ion-clock"></i>
        </div>
        <div class="small-box-footer">
            Saldo total: +4h
        </div>
      </div>
    </div>

  </section>
  <!-- /.sidebar -->
</aside>
