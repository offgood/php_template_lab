<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Top Menu Style - Ace Admin</title>

    <meta name="description" content="top menu &amp; navigation" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.js"></script>
</head>

<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">
        <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {}
        </script>

        <div class="navbar-container" id="navbar-container">
        </div>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
            </script>

            <!-- #section:basics/sidebar.horizontal -->
            <div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse">
                <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {}
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <!-- #section:basics/sidebar.layout.shortcuts -->
                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>

                        <!-- /section:basics/sidebar.layout.shortcuts -->
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="<?=($_GET['menu']==1)?" open":""?> hover">
                        <a href="index.php?menu=1">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=($_GET['menu']==2.1 || $_GET['menu']==2.2
                                                    || $_GET['menu']==2.3 || $_GET['menu']==2.4
                                                    || $_GET['menu']==2.5)?"open":""?> hover">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                                Data Management
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="hover">
                                <a href="index.php?menu=2.1">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Member
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="index.php?menu=2.2">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Advisor
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="index.php?menu=2.3">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Subject
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="index.php?menu=2.4">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Faculty
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="index.php?menu=2.5">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Activity Type
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="<?=($_GET['menu']==3)?" open":""?> hover">
                        <a href="index.php?menu=3">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Act Record </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=($_GET['menu']==4)?" open":""?> hover">
                        <a href="index.php?menu=4">
                            <i class="menu-icon fa fa-login"></i>
                            <span class="menu-text"> login </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul><!-- /.nav-list -->

                <!-- /section:basics/sidebar.layout.minimize -->
                <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {}
                </script>
            </div>

            <?php
                if(isset($_GET['menu'])){
                    if($_GET['menu']==1){
                        require_once('index.php');
                    }else if($_GET['menu']==2.1){
                        require_once('member.php');
                    }else if($_GET['menu']==2.2){
                        require_once('advisor.php');
                    }else if($_GET['menu']==2.3){
                        require_once('subject.php');
                    }else if($_GET['menu']==2.4){
                        require_once('faculty.php');
                    }else if($_GET['menu']==2.5){
                        require_once('act_type.php');
                    }else if($_GET['menu']==3){
                        require_once('act_record.php');
                    }else if($_GET['menu']==4){
                        require_once('login.php');
                    }
                }
            ?>

            <!-- /.main-container -->

            <!-- basic scripts -->

            <!--[if !IE]> -->
            <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery.js'>" + "<" + "/script>");
            </script>

            <!-- <![endif]-->

            <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
            <script type="text/javascript">
            if ('ontouchstart' in document.documentElement) document.write(
                "<script src='assets/js/jquery.mobile.custom.js'>" +
                "<" + "/script>");
            </script>
            <script src="assets/js/bootstrap.js"></script>

            <!-- page specific plugin scripts -->

            <!-- ace scripts -->
            <script src="assets/js/ace/elements.scroller.js"></script>
            <script src="assets/js/ace/elements.colorpicker.js"></script>
            <script src="assets/js/ace/elements.fileinput.js"></script>
            <script src="assets/js/ace/elements.typeahead.js"></script>
            <script src="assets/js/ace/elements.wysiwyg.js"></script>
            <script src="assets/js/ace/elements.spinner.js"></script>
            <script src="assets/js/ace/elements.treeview.js"></script>
            <script src="assets/js/ace/elements.wizard.js"></script>
            <script src="assets/js/ace/elements.aside.js"></script>
            <script src="assets/js/ace/ace.js"></script>
            <script src="assets/js/ace/ace.ajax-content.js"></script>
            <script src="assets/js/ace/ace.touch-drag.js"></script>
            <script src="assets/js/ace/ace.sidebar.js"></script>
            <script src="assets/js/ace/ace.sidebar-scroll-1.js"></script>
            <script src="assets/js/ace/ace.submenu-hover.js"></script>
            <script src="assets/js/ace/ace.widget-box.js"></script>
            <script src="assets/js/ace/ace.settings.js"></script>
            <script src="assets/js/ace/ace.settings-rtl.js"></script>
            <script src="assets/js/ace/ace.settings-skin.js"></script>
            <script src="assets/js/ace/ace.widget-on-reload.js"></script>
            <script src="assets/js/ace/ace.searchbox-autocomplete.js"></script>

            <!-- inline scripts related to this page -->
            <script type="text/javascript">
            jQuery(function($) {
                var $sidebar = $('.sidebar').eq(0);
                if (!$sidebar.hasClass('h-sidebar')) return;

                $(document).on('settings.ace.top_menu', function(ev, event_name, fixed) {
                    if (event_name !== 'sidebar_fixed') return;

                    var sidebar = $sidebar.get(0);
                    var $window = $(window);

                    //return if sidebar is not fixed or in mobile view mode
                    var sidebar_vars = $sidebar.ace_sidebar('vars');
                    if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
                        $sidebar.removeClass('lower-highlight');
                        //restore original, default marginTop
                        sidebar.style.marginTop = '';

                        $window.off('scroll.ace.top_menu')
                        return;
                    }


                    var done = false;
                    $window.on('scroll.ace.top_menu', function(e) {

                        var scroll = $window.scrollTop();
                        scroll = parseInt(scroll /
                            4); //move the menu up 1px for every 4px of document scrolling
                        if (scroll > 17) scroll = 17;


                        if (scroll > 16) {
                            if (!done) {
                                $sidebar.addClass('lower-highlight');
                                done = true;
                            }
                        } else {
                            if (done) {
                                $sidebar.removeClass('lower-highlight');
                                done = false;
                            }
                        }

                        sidebar.style['marginTop'] = (17 - scroll) + 'px';
                    }).triggerHandler('scroll.ace.top_menu');

                }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass(
                    'sidebar-fixed')]);

                $(window).on('resize.ace.top_menu', function() {
                    $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar
                        .hasClass(
                            'sidebar-fixed')
                    ]);
                });


            });
            </script>

            <!-- the following scripts are used in demo only for onpage help and you don't need them -->
            <link rel="stylesheet" href="assets/css/ace.onpage-help.css" />
            <link rel="stylesheet" href="docs/assets/js/themes/sunburst.css" />

            <script type="text/javascript">
            ace.vars['base'] = '..';
            </script>
            <script src="assets/js/ace/elements.onpage-help.js"></script>
            <script src="assets/js/ace/ace.onpage-help.js"></script>
            <script src="docs/assets/js/rainbow.js"></script>
            <script src="docs/assets/js/language/generic.js"></script>
            <script src="docs/assets/js/language/html.js"></script>
            <script src="docs/assets/js/language/css.js"></script>
            <script src="docs/assets/js/language/javascript.js"></script>
</body>

</html>