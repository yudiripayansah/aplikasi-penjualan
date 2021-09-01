@php
  $menus = [
    [
      'icon'=> 'fas fa-home',
      'target'=> '/',
      'label'=> 'Dashboard',
      'key'=> 'dashboard',
    ],
    [
      'icon'=> 'fas fa-users',
      'target'=> '/user',
      'label'=> 'User',
      'key'=> 'user',
    ],
    [
      'icon'=> 'fas fa-users',
      'target'=> '/products',
      'label'=> 'Products',
      'key'=> 'products',
    ],
  ];
@endphp
<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
  <!--begin::Menu Container-->
  <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
    <!--begin::Menu Nav-->
    <ul class="menu-nav">
      @foreach ($menus as $menu)
      <li class="menu-item {{($activePage == $menu['key']) ? 'menu-item-active' : ''}}" aria-haspopup="true">
        <a href="{{$menu['target']}}" class="menu-link">
          <span class="svg-icon menu-icon">
            <i class="{{$menu['icon']}}"></i>
          </span>
          <span class="menu-text">{{$menu['label']}}</span>
        </a>
      </li>
      @endforeach
    </ul>
    <!--end::Menu Nav-->
  </div>
  <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->