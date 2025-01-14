<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @yield('content.title')
                </div>
                <div class="col-sm-6">
                    @yield('breadcrumb')
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @include('panel.parts.alert')
        @yield('content')
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
