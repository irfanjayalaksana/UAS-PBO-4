<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ asset('') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Home</p>
            </a>
          </li>
          @foreach ($data_menu as $category)
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>{{ $category->namamenu }}<i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              @foreach ($category->childrenCategories as $childCategory)
                  @include('layout.child_category', ['child_category' => $childCategory])
              @endforeach
              </ul>
          </li>
          @endforeach
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <li class="nav-item">
    <a class="nav-link" href="{{ asset('') }}{{ $child_category->linkmenu }}">
        <i class="far fa-circle nav-icon"></i>
        <p>{{ $child_category->namamenu }}</p>
    </a>
</li>
@if ($child_category->categories)
    <ul class="nav nav-treeview">
        @foreach ($child_category->categories as $childCategory)
            @include('layout.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
</li>


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
