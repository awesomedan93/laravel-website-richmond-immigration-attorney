<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>


            <li class="{{ Request::segment(2) == 'seo'?'active ':'' }}treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>SEO</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(3) == 'pages.home'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.home') }}"><i class="fa fa-circle-o"></i>Home</a></li>
                    <li class="{{ Request::segment(3) == 'pages.about'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.about') }}"><i class="fa fa-circle-o"></i>About</a></li>
                    <li class="{{ activeMenuCases(Request::segment(3)) }}">
                        <a href="{{ url('dashboard/seo/pages.cases') }}"><i class="fa fa-circle-o"></i>Cases We Handle
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ Request::segment(3) == 'pages.cases.criminal_defense'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.cases.criminal_defense') }}"><i class="fa fa-circle-o"></i>Criminal Defense</a></li>
                            <li class="{{ Request::segment(3) == 'pages.cases.immigration_law'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.cases.immigration_law') }}"><i class="fa fa-circle-o"></i>Immigration Law</a></li>
                            <li class="{{ Request::segment(3) == 'pages.cases.traffic_law'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.cases.traffic_law') }}"><i class="fa fa-circle-o"></i>Traffic Law</a></li>
                            <li class="{{ Request::segment(3) == 'pages.cases.dui_law'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.cases.dui_law') }}"><i class="fa fa-circle-o"></i>DUI Law</a></li>
                        </ul>
                    </li>
                    <li class="{{ activeMenuAttorneys(Request::segment(3)) }}">
                        <a href="{{ url('dashboard/seo/pages.attorneys') }}"><i class="fa fa-circle-o"></i>Attorneys
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ Request::segment(3) == 'pages.raul_novo'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.raul_novo') }}"><i class="fa fa-circle-o"></i>Raul Novo</a></li>
                            <li class="{{ Request::segment(3) == 'pages.soulmaz_taghavi'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.soulmaz_taghavi') }}"><i class="fa fa-circle-o"></i>Soulmaz Taghavi</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(3) == 'pages.opinions'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.opinions') }}"><i class="fa fa-circle-o"></i>Opinions</a></li>
                    <li class="{{ Request::segment(3) == 'pages.blog'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.blog') }}"><i class="fa fa-circle-o"></i>Blog</a></li>
                    <li class="{{ Request::segment(3) == 'pages.contact'?'active ':'' }}"><a href="{{ url('dashboard/seo/pages.contact') }}"><i class="fa fa-circle-o"></i>Contact</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(2) == 'blog'?'active ':'' }}"><a href="{{ route('blog.index') }}"><i class="fa fa-book"></i> <span>Blog</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>