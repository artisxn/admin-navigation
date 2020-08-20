@foreach($navigation as $resource)

    <admin-navigation :data='@json($resource)'
                                  :remember-menu-state="@json($rememberMenuState)">
    </admin-navigation>

@endforeach
