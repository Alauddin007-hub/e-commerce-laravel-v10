<div id="sidebar-alt" tabindex="-1" aria-hidden="true">
    <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
    <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>

    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll-alt">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Profile -->
            <div class="sidebar-section">
                <h2 class="text-light">Profile</h2>
                <form action="index.html" method="post" class="form-control-borderless" onsubmit="return false;">
                    <div class="form-group">
                        <label for="side-profile-name">Name</label>
                        <input type="text" id="side-profile-name" name="side-profile-name" class="form-control" value="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="side-profile-email">Email</label>
                        <input type="email" id="side-profile-email" name="side-profile-email" class="form-control" value="john.doe@example.com">
                    </div>
                    <div class="form-group">
                        <label for="side-profile-password">New Password</label>
                        <input type="password" id="side-profile-password" name="side-profile-password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="side-profile-password-confirm">Confirm New Password</label>
                        <input type="password" id="side-profile-password-confirm" name="side-profile-password-confirm" class="form-control">
                    </div>
                    <div class="form-group remove-margin">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                    </div>
                </form>
            </div>
            <!-- END Profile -->

            <!-- Settings -->
            <div class="sidebar-section">
                <h2 class="text-light">Settings</h2>
                <form action="index.html" method="post" class="form-horizontal form-control-borderless" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-xs-7 control-label-fixed">Notifications</label>
                        <div class="col-xs-5">
                            <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-7 control-label-fixed">Public Profile</label>
                        <div class="col-xs-5">
                            <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-7 control-label-fixed">Enable API</label>
                        <div class="col-xs-5">
                            <label class="switch switch-success"><input type="checkbox"><span></span></label>
                        </div>
                    </div>
                    <div class="form-group remove-margin">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                    </div>
                </form>
            </div>
            <!-- END Settings -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Alternative Sidebar -->
<div id="sidebar">
    <!-- Sidebar Brand -->
    <div id="sidebar-brand" class="themed-background">
        <a href="index.html" class="sidebar-title">
            <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">App<strong>UI</strong></span>
        </a>
    </div>
    <!-- END Sidebar Brand -->

    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="index.html" class=" active"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-rocket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                    <ul>
                        <li>
                            <a href="page_ui_widgets.html">Widgets</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Elements</a>
                            <ul>
                                <li>
                                    <a href="page_ui_blocks_grid.html">Blocks &amp; Grid</a>
                                </li>
                                <li>
                                    <a href="page_ui_typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                </li>
                                <li>
                                    <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                </li>
                                <li>
                                    <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                </li>
                                <li>
                                    <a href="page_ui_tables.html">Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Forms</a>
                            <ul>
                                <li>
                                    <a href="page_forms_components.html">Components</a>
                                </li>
                                <li>
                                    <a href="page_forms_wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="page_forms_validation.html">Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Icon Packs</a>
                            <ul>
                                <li>
                                    <a href="page_ui_icons_fontawesome.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="page_ui_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-airplane sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Components</span></a>
                    <ul>
                        <li>
                            <a href="page_comp_todo.html">To-do List</a>
                        </li>
                        <li>
                            <a href="page_comp_gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="page_comp_maps.html">Google Maps</a>
                        </li>
                        <li>
                            <a href="page_comp_calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a href="page_comp_charts.html">Charts</a>
                        </li>
                        <li>
                            <a href="page_comp_animations.html">CSS3 Animations</a>
                        </li>
                        <li>
                            <a href="page_comp_tree.html">Tree View Lists</a>
                        </li>
                        <li>
                            <a href="page_comp_nestable.html">Nestable &amp; Sortable Lists</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">UI Layouts</span></a>
                    <ul>
                        <li>
                            <a href="page_layout_static.html">Static</a>
                        </li>
                        <li>
                            <a href="page_layout_static_fixed_width.html">Static Fixed Width</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_top.html">Top Header (Fixed)</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_bottom.html">Bottom Header (Fixed)</a>
                        </li>
                        <li>
                            <a href="page_layout_static_sidebar_mini.html">Sidebar Mini (Static)</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_sidebar_mini.html">Sidebar Mini (Fixed)</a>
                        </li>
                        <li>
                            <a href="page_layout_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-gift sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Extra Pages</span></a>
                    <ul>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Base</a>
                            <ul>
                                <li>
                                    <a href="page_ready_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="page_ready_error.html">Error</a>
                                </li>
                                <li>
                                    <a href="page_ready_search_results.html">Search Results (5)</a>
                                </li>
                                <li>
                                    <a href="page_ready_faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="page_ready_invoice.html">Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Web Application</a>
                            <ul>
                                <li>
                                    <a href="page_ready_profile.html">User Profile</a>
                                </li>
                                <li>
                                    <a href="page_ready_forum.html">Forum (3)</a>
                                </li>
                                <li>
                                    <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page_ready_article.html">Article</a>
                                </li>
                                <li>
                                    <a href="page_ready_timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="page_ready_contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="page_ready_tickets.html">Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                            <ul>
                                <li>
                                    <a href="page_ready_login.html">Login</a>
                                </li>
                                <li>
                                    <a href="page_ready_login2.html">Login 2</a>
                                </li>
                                <li>
                                    <a href="page_ready_reminder.html">Password Reminder</a>
                                </li>
                                <li>
                                    <a href="page_ready_register.html">Register</a>
                                </li>
                                <li>
                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
                <li>
                    <a href="page_app_email.html"><i class="gi gi-inbox sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Email Center</span></a>
                </li>
                <li>
                    <a href="page_app_social.html"><i class="fa fa-share-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social Net</span></a>
                </li>
                <li>
                    <a href="page_app_media.html"><i class="gi gi-picture sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media Box</span></a>
                </li>
                <li>
                    <a href="page_app_estore.html"><i class="gi gi-shopping_cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">eStore</span></a>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->

            <!-- Color Themes -->
            <!-- Preview a theme on a page functionality can be found in js/app.js - colorThemePreview() -->
            <div class="sidebar-section sidebar-nav-mini-hide">
                <div class="sidebar-separator push">
                    <i class="fa fa-ellipsis-h"></i>
                </div>
                <ul class="sidebar-themes clearfix">
                    <li>
                        <a href="javascript:void(0)" class="themed-background-default" data-toggle="tooltip" title="Default" data-theme="default" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-default"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-classy" data-toggle="tooltip" title="Classy" data-theme="css/themes/classy.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-classy"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-social" data-toggle="tooltip" title="Social" data-theme="css/themes/social.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-social"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-flat" data-toggle="tooltip" title="Flat" data-theme="css/themes/flat.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-flat"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-amethyst" data-toggle="tooltip" title="Amethyst" data-theme="css/themes/amethyst.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-amethyst"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-creme" data-toggle="tooltip" title="Creme" data-theme="css/themes/creme.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-creme"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-passion" data-toggle="tooltip" title="Passion" data-theme="css/themes/passion.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="">
                            <span class="section-side themed-background-dark-passion"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-default" data-toggle="tooltip" title="Default + Light Sidebar" data-theme="default" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-classy" data-toggle="tooltip" title="Classy + Light Sidebar" data-theme="css/themes/classy.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-social" data-toggle="tooltip" title="Social + Light Sidebar" data-theme="css/themes/social.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-flat" data-toggle="tooltip" title="Flat + Light Sidebar" data-theme="css/themes/flat.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-amethyst" data-toggle="tooltip" title="Amethyst + Light Sidebar" data-theme="css/themes/amethyst.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-creme" data-toggle="tooltip" title="Creme + Light Sidebar" data-theme="css/themes/creme.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-passion" data-toggle="tooltip" title="Passion + Light Sidebar" data-theme="css/themes/passion.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light">
                            <span class="section-side"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-default" data-toggle="tooltip" title="Default + Light Header" data-theme="default" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-default"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-classy" data-toggle="tooltip" title="Classy + Light Header" data-theme="css/themes/classy.css" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-classy"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-social" data-toggle="tooltip" title="Social + Light Header" data-theme="css/themes/social.css" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-social"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-flat" data-toggle="tooltip" title="Flat + Light Header" data-theme="css/themes/flat.css" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-flat"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-amethyst" data-toggle="tooltip" title="Amethyst + Light Header" data-theme="css/themes/amethyst.css" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-amethyst"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-creme" data-toggle="tooltip" title="Creme + Light Header" data-theme="css/themes/creme.css" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-creme"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-passion" data-toggle="tooltip" title="Passion + Light Header" data-theme="css/themes/passion.css" data-theme-navbar="navbar-default" data-theme-sidebar="">
                            <span class="section-header"></span>
                            <span class="section-side themed-background-dark-passion"></span>
                            <span class="section-content"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Color Themes -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->

    <!-- Sidebar Extra Info -->
    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
        <div class="push-bit">
            <span class="pull-right">
                <a href="javascript:void(0)" class="text-muted"><i class="fa fa-plus"></i></a>
            </span>
            <small><strong>78 GB</strong> / 100 GB</small>
        </div>
        <div class="progress progress-mini push-bit">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
        </div>
        <div class="text-center">
            <small>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb" target="_blank">pixelcave</a></small><br>
            <small><span id="year-copy"></span> &copy; <a href="https://1.envato.market/DXa" target="_blank">AppUI 2.9</a></small>
        </div>
    </div>
    <!-- END Sidebar Extra Info -->
</div>