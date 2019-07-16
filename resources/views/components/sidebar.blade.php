<p align="center">
    <a href="/"><img src="/images/gap_logo_white.png" class="logo"></a>
</p>

<p class="left-menu-group">{{ __('sidebar.profile') }}</p>
<ul class="page-sidebar-menu">
    <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>&nbsp;{{ Auth::user()->name }}</a></li>
    <li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <a href="{{ route('logout') }}" class="logout"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>&nbsp;{{ __('sidebar.logout') }}
        </a>
    </li>
</ul>

@can('admin roles & permissions')
<p class="left-menu-group">{{ __('sidebar.admin') }}</p>
<ul class="page-sidebar-menu">
    <li><a href="{{ route('admin.dedicated_servers.index') }}"><i class="fas fa-server"></i>&nbsp;{{ __('sidebar.dedicated_servers') }}</a></li>
    <li><a href="{{ route('admin.servers.index') }}"><i class="fas fa-terminal"></i>&nbsp;{{ __('sidebar.game_servers') }}</a></li>
    <li><a href="{{ route('admin.games.index') }}"><i class="fas fa-gamepad"></i>&nbsp;{{ __('sidebar.games') }}</a></li>
    <li><a href="{{ route('admin.gdaemon_tasks.index') }}"><i class="fas fa-tasks"></i>&nbsp;{{ __('sidebar.gdaemon_tasks') }}</a></li>
    <li><a href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i>&nbsp;{{ __('sidebar.users') }}</a></li>
</ul>
@endcan

<p class="left-menu-group">{{ __('sidebar.control') }}</p>
<ul class="page-sidebar-menu">
    <li><a href="{{ route('servers') }}"><i class="fas fa-play"></i>&nbsp;{{ __('sidebar.servers') }}</a></li>
</ul>

@can('admin roles & permissions')
<p class="left-menu-group">{{ __('sidebar.gameap') }}</p>
<ul class="page-sidebar-menu">
    <li><a href="{{ route('modules') }}"><i class="fas fa-puzzle-piece"></i>&nbsp;{{ __('sidebar.modules') }}</a></li>
    <li><a href="{{ route('update') }}"><i class="fas fa-upload"></i>&nbsp;{{ __('sidebar.update') }}</a></li>
</ul>
@endcan

<p class="left-menu-group">{{ __('sidebar.support') }}</p>
<ul class="page-sidebar-menu">
    <li><a target="_blank" href="http://docs.gameap.ru"><i class="fab fa-wikipedia-w"></i>&nbsp;{{ __('sidebar.documentation') }}</a></li>
    <li><a href="{{ route('help') }}"><i class="fas fa-question"></i>&nbsp;{{ __('sidebar.help') }}</a></li>
    <li><a href="{{ route('report_bug') }}"><i class="fas fa-bug"></i>&nbsp;{{ __('sidebar.report_bug') }}</a></li>
</ul>
