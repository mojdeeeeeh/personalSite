<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('theme/img/sidebar-1.jpg') }}">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('theme/img/faces/avatar.jpg') }}" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Tania Andrew
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                  
                    <li class="{{ Request::path() ==  'dashboard' ? 'active' : ''  }}">
                        <a href="{{ url('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">perm_identity</i>
                            <p>Pages
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li class="{{ Request::path() ==  'home' ? 'active' : ''  }}">
                                    <a href="{{ url('login') }}">
                                        <span class="sidebar-mini"><i class="material-icons">account_circle</i></span>
                                        <span class="sidebar-normal">Login Page</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() ==  'register' ? 'active' : ''  }}">
                                    <a href="{{ url('register') }}">
                                        <span class="sidebar-mini"><i class="material-icons">add_circle</i></span>
                                        <span class="sidebar-normal">Register Page</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() ==  'lock' ? 'active' : ''  }}">
                                    <a href="{{ url('lock') }}">
                                        <span class="sidebar-mini"><i class="material-icons">block</i></span>
                                        <span class="sidebar-normal">Lock Screen Page</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() ==  'user' ? 'active' : ''  }}">
                                    <a href="{{ url('user') }}">
                                        <span class="sidebar-mini"><i class="material-icons">face</i></span>
                                        <span class="sidebar-normal">User Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                  
                    <li class="{{ Request::path() ==  'comments | cards' ? 'active' : ''  }}">
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="material-icons">forum</i>
                            <p>Post
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li class="{{ Request::path() ==  'comments' ? 'active' : ''  }}">
                                    <a href="{{ url('comments') }}">
                                        <span class="sidebar-mini"><i class="material-icons">archive</i></span>
                                        <span class="sidebar-normal">Posts</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() ==  'cards' ? 'active' : ''  }}">
                                    <a href="{{ url('cards') }}">
                                        <span class="sidebar-mini"><i class="material-icons">check_box</i></span>
                                        <span class="sidebar-normal"> M/D Posts</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() ==  'cards/create' ? 'active' : ''  }}">
                                    <a href="{{ url('cards/create') }}">
                                        <span class="sidebar-mini"><i class="material-icons">move_to_inbox</i></span>
                                        <span class="sidebar-normal">Create post</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                     <li class="{{ Request::path() ==  'tags' ? 'active' : ''  }}">
                        <a data-toggle="collapse" href="#tagExamples">
                            <i class="material-icons">bubble_chart</i>
                            <p>Tags
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tagExamples">
                            <ul class="nav">
                                <li class="{{ Request::path() ==  'tags' ? 'active' : ''  }}">
                                    <a href="{{ url('tags') }}">
                                        <span class="sidebar-mini"><i class="material-icons">hdr_weak</i></span>
                                        <span class="sidebar-normal">M/D Tags</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() ==  'tags/create' ? 'active' : ''  }}">
                                    <a href="{{ url('tags/create') }}">
                                        <span class="sidebar-mini"><i class="material-icons">loupe</i></span>
                                        <span class="sidebar-normal">Create Tags</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                  
                    <li class="{{ Request::path() ==  'contact' ? 'active' : ''  }}">
                        <a href="{{ url('contact') }}">
                            <i class="material-icons">call</i>
                            <p>Contact us</p>
                        </a>
                    </li>
                    <li class="{{ Request::path() ==  '#' ? 'active' : ''  }}">
                        <a href="#">
                            <i class="material-icons">timeline</i>
                            <p>Charts</p>
                        </a>
                    </li>
                
                </ul>
            </div>
</div>
