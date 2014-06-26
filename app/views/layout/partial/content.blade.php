<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @yield('content-header')
    </section>

    <!-- Main content -->
    <section class="content">
        @if(Session::has('flash_message'))
        <box>
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-info alert-dismissable">
                    <i class="fa fa-info"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Notification!</b> {{ Session::get('flash_message') }}
                </div>
            </div>
        </box>
        @endif

        @yield('content')
    </section><!-- /.content -->
</aside><!-- /.right-side -->