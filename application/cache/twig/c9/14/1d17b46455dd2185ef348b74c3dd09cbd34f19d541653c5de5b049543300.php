<?php

/* layout-private.html */
class __TwigTemplate_c9141d17b46455dd2185ef348b74c3dd09cbd34f19d541653c5de5b049543300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "images/icons/css/font-awesome.css\" rel=\"stylesheet\">
        ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "        ";
        echo (isset($context["comp_css"]) ? $context["comp_css"] : null);
        echo "
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
    </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
                        <i class=\"icon-reorder shaded\"></i>
                    </a>
                    <a class=\"brand\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["logo_url_medium"]) ? $context["logo_url_medium"] : null), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "
                    </a>
                    <div class=\"nav-collapse collapse navbar-inverse-collapse\">
                        <form class=\"navbar-search pull-left input-append\" action=\"#\">
                        <input type=\"text\" class=\"span3\">
                        <button class=\"btn\" type=\"button\">
                            <i class=\"icon-search\"></i>
                        </button>
                        </form>
                        <ul class=\"nav pull-right\">
                            <li class=\"nav-user dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                ";
        // line 34
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "

                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, get_url_image_pengajar(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"nav-avatar img-polaroid\" />

                                <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    ";
        // line 40
        if (is_admin()) {
            // line 41
            echo "                                    <li>";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), "Detail Profil", array("title" => "Detail Profil"));
            echo "</li>
                                    ";
        }
        // line 43
        echo "
                                    ";
        // line 44
        if (is_pengajar()) {
            // line 45
            echo "                                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>
                                    ";
        }
        // line 47
        echo "
                                    ";
        // line 48
        if (is_siswa()) {
            // line 49
            echo "                                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>
                                    ";
        }
        // line 51
        echo "
                                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
        echo "\">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>

        <!-- /navbar -->
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span3\">
                        <div class=\"sidebar\">
                            ";
        // line 69
        if (is_admin()) {
            // line 70
            echo "                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "\"><i class=\"menu-icon icon-home\"></i>Beranda</a></li>
                                <li><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-wrench\"></i>Pengaturan</a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, site_url("tugas?clear_filter=true"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Tugas </a></li>
                                <li><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, site_url("materi?clear_filter=true"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-book\"></i>Materi </a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, site_url("siswa"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Siswa </a></li>
                                <li><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, site_url("pengajar"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-book\"></i>Pengajar </a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-paste\"></i>Matapelajaran Kelas </a></li>
                                <li><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Manajemen Kelas </a></li>
                                <li><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-book\"></i>Manajemen Matapelajaran </a></li>
                            </ul>
                            ";
        }
        // line 91
        echo "
                            ";
        // line 92
        if (is_pengajar()) {
            // line 93
            echo "                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "\"><i class=\"menu-icon icon-home\"></i>Beranda
                                <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, site_url("login/pp"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-user\"></i>Profilku</a></li>
                                <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, site_url("pengajar/jadwal"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Jadwal Mengajar </a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, site_url("tugas?clear_filter=true"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Tugas </a></li>
                                <li><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, site_url("materi?clear_filter=true"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-book\"></i>Materi </a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, site_url("pengajar/filter"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-search\"></i>Filter Pengajar </a></li>
                                <li><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, site_url("siswa/filter"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-search\"></i>Filter Siswa </a></li>
                            </ul>
                            ";
        }
        // line 109
        echo "
                            ";
        // line 110
        if (is_siswa()) {
            // line 111
            echo "                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "\"><i class=\"menu-icon icon-home\"></i>Beranda
                                <li><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, site_url("login/pp"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-user\"></i>Profilku</a></li>
                                <li><a href=\"";
            // line 114
            echo twig_escape_filter($this->env, site_url("siswa/jadwal_mapel"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Jadwal Matapelajaran</a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 118
            echo twig_escape_filter($this->env, site_url("tugas?clear_filter=true"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-tasks\"></i>Tugas </a></li>
                                <li><a href=\"";
            // line 119
            echo twig_escape_filter($this->env, site_url("materi?clear_filter=true"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-book\"></i>Materi </a></li>
                            </ul>

                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, site_url("pengajar/filter"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-search\"></i>Filter Pengajar </a></li>
                                <li><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, site_url("siswa/filter"), "html", null, true);
            echo "\"><i class=\"menu-icon icon-search\"></i>Filter Siswa </a></li>
                            </ul>
                            ";
        }
        // line 127
        echo "
                            <!--/.widget-nav-->
                            <ul class=\"widget widget-menu unstyled\">
                                <li><a href=\"";
        // line 130
        echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
        echo "\"><i class=\"menu-icon icon-signout\"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class=\"span9\">
                        <div class=\"content\">
                            ";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "                        </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b class=\"copyright\">";
        // line 150
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.<br>
                    ";
        // line 151
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " | Page loaded in ";
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo " seconds.
                </center>
            </div>
        </div>
        <script type=\"text/javascript\">
        var site_url = \"";
        // line 156
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\";
        var base_url = \"";
        // line 157
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
        </script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/jquery-1.9.1.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/jquery-ui-1.10.1.custom.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        ";
        // line 162
        echo (isset($context["comp_js"]) ? $context["comp_js"] : null);
        echo "
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/script.js\" type=\"text/javascript\"></script>
        ";
        // line 164
        $this->displayBlock('js', $context, $blocks);
        // line 165
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
    }

    // line 164
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-private.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 164,  387 => 138,  382 => 11,  376 => 6,  370 => 165,  368 => 164,  364 => 163,  360 => 162,  356 => 161,  352 => 160,  348 => 159,  343 => 157,  339 => 156,  329 => 151,  325 => 150,  312 => 139,  310 => 138,  299 => 130,  294 => 127,  288 => 124,  284 => 123,  277 => 119,  273 => 118,  266 => 114,  262 => 113,  258 => 112,  255 => 111,  253 => 110,  250 => 109,  244 => 106,  240 => 105,  233 => 101,  229 => 100,  222 => 96,  218 => 95,  214 => 94,  211 => 93,  209 => 92,  206 => 91,  200 => 88,  196 => 87,  192 => 86,  185 => 82,  181 => 81,  174 => 77,  170 => 76,  163 => 72,  159 => 71,  156 => 70,  154 => 69,  134 => 52,  131 => 51,  125 => 49,  123 => 48,  120 => 47,  114 => 45,  112 => 44,  109 => 43,  103 => 41,  101 => 40,  94 => 36,  89 => 34,  73 => 23,  69 => 22,  57 => 13,  52 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
