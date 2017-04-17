<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>SEO</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('dashboard/seo/home') }}"><i class="fa fa-circle-o"></i>Home</a></li>
                    <li><a href="{{ url('dashboard/seo/about') }}"><i class="fa fa-circle-o"></i>About</a></li>
                    <li>
                        <a href="{{ url('dashboard/seo/cases') }}"><i class="fa fa-circle-o"></i>Cases We Handle
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('dashboard/seo/cases-criminal-defense') }}"><i class="fa fa-circle-o"></i>Criminal Defense</a></li>
                            <li><a href="{{ url('dashboard/seo/cases-immigration-law') }}"><i class="fa fa-circle-o"></i>Immigration Law</a></li>
                            <li><a href="{{ url('dashboard/seo/cases-traffic-law') }}"><i class="fa fa-circle-o"></i>Traffic Law</a></li>
                            <li><a href="{{ url('dashboard/seo/cases-dui-law') }}"><i class="fa fa-circle-o"></i>DUI Law</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/seo/attorneys') }}"><i class="fa fa-circle-o"></i>Attorneys
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('dashboard/seo/attorneys-raul-novo') }}"><i class="fa fa-circle-o"></i>Raul Novo</a></li>
                            <li><a href="{{ url('dashboard/seo/attorneys-soulmaz-taghavi') }}"><i class="fa fa-circle-o"></i>Soulmaz Taghavi</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('dashboard/seo/testimonials') }}"><i class="fa fa-circle-o"></i>Testimonials</a></li>
                    <li><a href="{{ url('dashboard/seo/blog') }}"><i class="fa fa-circle-o"></i>Blog</a></li>
                    <li><a href="{{ url('dashboard/seo/contact') }}"><i class="fa fa-circle-o"></i>Contact</a></li>
                </ul>
            </li>
            <li><a href="{{ route('blog.index') }}"><i class="fa fa-book"></i> <span>Blog Posts</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>