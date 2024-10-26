 <!-- Left side column. contains the logo and sidebar -->
  <style>
    .active-blue a {
    color: blue !important; /* Force the color to change to blue */
    }

    .active-blue i {
        color: blue !important; /* Ensure icons also change to blue */
    }
  </style>
 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar" style="">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="{{ url('/') }}/resource/img/avatar5.png" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <p>{{ session()->get('user_name') }}</p>
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
             </div>
         </div>
         @php
            $currentRoute = Route::currentRouteName();
        @endphp
         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">`
             {{-- class="active treeview" --}}
             <li>
                 <a href="">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                 </a>
             </li>
             <li class="treeview {{ $is_active == 'create_blog' || $is_active == 'blog_index' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i> 
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $is_active == 'blog_index' ? 'active active-blue' : '' }}">
                        <a href="{{ route('article.index') }}">
                            <i class="fa fa-users"></i> Blog List
                        </a>
                    </li>
                    <li class="{{ $is_active == 'create_blog' ? 'active active-blue' : '' }}">
                        <a href="{{ route('article.create') }}">
                            <i class="fa fa-user-plus"></i> Create Blog
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ $is_active == 'create_category' || $is_active == 'category_list' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i> 
                    </span>
                </a>
                <ul class="treeview-menu">
                   <li class="{{ $is_active == 'category_list' ? 'active active-blue' : '' }}">
                        <a href="{{ route('category.index') }}">
                            <i class="fa fa-user-plus"></i> Category List
                        </a>
                    </li>
                    <li class="{{ $is_active == 'create_category' ? 'active active-blue' : '' }}">
                        <a href="{{ route('category.create') }}">
                            <i class="fa fa-user-plus"></i> Create Category
                        </a>
                    </li>
                </ul>
            </li>

                
                 
     </section>
     <!-- /.sidebar -->
 </aside>
