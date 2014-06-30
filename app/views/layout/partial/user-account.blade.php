<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span>{{ Auth::user()->username; }} <i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header bg-light-blue">
            <img src="assets/img/avatar3.png" class="img-circle" alt="User Image" />
            <p>
                {{ Auth::user()->username }} - {{ Auth::user()->occupation }}
                <small>Member since - {{ Auth::user()->created_at->diffForHumans() }}</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="{{ Auth::user()->username }}/projects">Projects</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="{{ Auth::user()->username }}/summaries">Summaries</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="{{ Auth::user()->username }}/tasks">Tasks</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">

            <div class="pull-left">
                <a href="{{ Auth::user()->username }}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
            </div>
            
        </li>
    </ul>
</li>