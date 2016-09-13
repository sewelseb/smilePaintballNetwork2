<?php

/* SmilePlatformBundle:Default:profile.html.twig */
class __TwigTemplate_82cdacc247398fcbc88c164f6d2772c86dbfc3e4715693e382ccd9f07cd211ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:profile.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7b704aa4a5c6a6ee99c927f2076fae3472de34de752ae17dd3b0d21f23715a5 = $this->env->getExtension("native_profiler");
        $__internal_d7b704aa4a5c6a6ee99c927f2076fae3472de34de752ae17dd3b0d21f23715a5->enter($__internal_d7b704aa4a5c6a6ee99c927f2076fae3472de34de752ae17dd3b0d21f23715a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b704aa4a5c6a6ee99c927f2076fae3472de34de752ae17dd3b0d21f23715a5->leave($__internal_d7b704aa4a5c6a6ee99c927f2076fae3472de34de752ae17dd3b0d21f23715a5_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_3ea8e57eaabe7b7e390efab2fc55a9f156740410767b54d63bd28fd9c0e7ac08 = $this->env->getExtension("native_profiler");
        $__internal_3ea8e57eaabe7b7e390efab2fc55a9f156740410767b54d63bd28fd9c0e7ac08->enter($__internal_3ea8e57eaabe7b7e390efab2fc55a9f156740410767b54d63bd28fd9c0e7ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_3ea8e57eaabe7b7e390efab2fc55a9f156740410767b54d63bd28fd9c0e7ac08->leave($__internal_3ea8e57eaabe7b7e390efab2fc55a9f156740410767b54d63bd28fd9c0e7ac08_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_b6942d9155e8e28262340c297840fe1aae397cd99beff2009793d9e8cc83db51 = $this->env->getExtension("native_profiler");
        $__internal_b6942d9155e8e28262340c297840fe1aae397cd99beff2009793d9e8cc83db51->enter($__internal_b6942d9155e8e28262340c297840fe1aae397cd99beff2009793d9e8cc83db51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        <div class=\"row\" >
            <span id=\"smileApiUpvoteUrl\" hidden>";
            // line 10
            echo $this->env->getExtension('routing')->getPath("smile_api_post_upvote_url");
            echo "</span>
            <span id=\"smileApiDownvoteUrl\" hidden>";
            // line 11
            echo $this->env->getExtension('routing')->getPath("smile_api_post_downvote_url");
            echo "</span>
            <div class=\"col-md-7\">
                ";
            // line 13
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 14
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 16
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 17
                echo "                    <div class=\"fb-video\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></a>
                        </blockquote></div>
                ";
            }
            // line 20
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 21
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                    </a>
                ";
            }
            // line 25
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 26
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 30
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 31
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                            <img class=\"img-responsive\" src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 35
            echo "            </div>
            <div class=\"col-md-5 \">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                        <h3>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                        <h4>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                    </a>
                    <div>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            by
                            <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                    </div>
                    <p>
                    <div id=\"updownVote_";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                    </div>
                    <div id=\"upvoted_";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        upvoted ;)
                    </div>
                    <div id=\"downvoted_";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        downvoted :(
                    </div>
                    </p>

                    <div>
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                            ";
            // line 70
            echo twig_escape_filter($this->env, ($this->getAttribute($context["post"], "upvotes", array()) - $this->getAttribute($context["post"], "downvotes", array())), "html", null, true);
            echo " points, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "comments", array()), "html", null, true);
            echo " comments
                        </a>
                    </div>

                    <div>
                        <div class=\"spacer-5px\">
                            <div class=\"fb-share-button\"
                                 data-href=\"http://smilepaintball.com/platform/post/";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                                 data-layout=\"button_count\">
                            </div>
                        </div>
                        <div class=\"spacer-5px\">
                            <a
                                    href=\"https://twitter.com/intent/tweet?text=";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                        </div>
                        <div class=\"spacer-5px\">
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                        </div>
                        <div class=\"spacer-5px\">
                            Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        </div>


                    </div>
            </div>


        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b6942d9155e8e28262340c297840fe1aae397cd99beff2009793d9e8cc83db51->leave($__internal_b6942d9155e8e28262340c297840fe1aae397cd99beff2009793d9e8cc83db51_prof);

    }

    // line 103
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_53312b70a06c6d0bfdf455388e06074155c12adfc09d3a4fa76e7f63cfd73ee1 = $this->env->getExtension("native_profiler");
        $__internal_53312b70a06c6d0bfdf455388e06074155c12adfc09d3a4fa76e7f63cfd73ee1->enter($__internal_53312b70a06c6d0bfdf455388e06074155c12adfc09d3a4fa76e7f63cfd73ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 104
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 105
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 107
            echo "
    ";
        }
        // line 109
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 110
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 111
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 113
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 114
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 115
        echo "<br/>
    <div>
        ";
        // line 117
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 118
            echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
        ";
        }
        // line 120
        echo "    </div>
    <H3>Teams:</H3>
    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 123
            echo "        <div class=\"row\">
            <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_team", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 125
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 126
                echo "                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 128
            echo "                <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "

    ";
        // line 135
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 136
            echo "        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 137
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array())) != 0)) {
            // line 138
            echo "        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
    ";
        }
        // line 140
        echo "


    <div class=\"modal fade\" id=\"addToTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addToTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add to a team</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 152
            echo "                        <div class=\"row\">
                            <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_add_to_team", array("teamId" => $this->getAttribute($context["team"], "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 154
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 155
                echo "                                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 157
            echo "                                <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
            echo "</span>
                            </a>
                        </div>
                        <div class=\"clearfix\"></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"editProfileModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edotProfileModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit profile</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 176
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"CreateTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"CreateTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Create a team</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 192
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Team:createTeam", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_53312b70a06c6d0bfdf455388e06074155c12adfc09d3a4fa76e7f63cfd73ee1->leave($__internal_53312b70a06c6d0bfdf455388e06074155c12adfc09d3a4fa76e7f63cfd73ee1_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 192,  440 => 176,  424 => 162,  412 => 157,  402 => 155,  400 => 154,  396 => 153,  393 => 152,  389 => 151,  376 => 140,  372 => 138,  370 => 137,  367 => 136,  365 => 135,  361 => 133,  349 => 128,  339 => 126,  337 => 125,  333 => 124,  330 => 123,  326 => 122,  322 => 120,  318 => 118,  316 => 117,  312 => 115,  306 => 114,  303 => 113,  297 => 111,  295 => 110,  290 => 109,  286 => 107,  276 => 105,  273 => 104,  267 => 103,  245 => 90,  239 => 87,  230 => 83,  221 => 77,  209 => 70,  205 => 69,  196 => 63,  190 => 60,  183 => 56,  175 => 51,  169 => 48,  162 => 44,  157 => 42,  151 => 39,  147 => 38,  143 => 37,  139 => 35,  131 => 32,  126 => 31,  123 => 30,  117 => 27,  112 => 26,  109 => 25,  103 => 22,  98 => 21,  95 => 20,  84 => 17,  81 => 16,  75 => 14,  73 => 13,  68 => 11,  64 => 10,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block pageHeader %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block leftCollumn %}*/
/*     {% for post in posts %}*/
/*         <div class="row" >*/
/*             <span id="smileApiUpvoteUrl" hidden>{{ path ('smile_api_post_upvote_url') }}</span>*/
/*             <span id="smileApiDownvoteUrl" hidden>{{ path ('smile_api_post_downvote_url') }}</span>*/
/*             <div class="col-md-7">*/
/*                 {% if post.type=='video_youtube' %}*/
/*                     <iframe  width="100%"  height="300px" ng-src="{{ post.url }}" frameborder="0" allowfullscreen></iframe>*/
/*                 {% endif %}*/
/*                 {% if post.type=='video_facebook' %}*/
/*                     <div class="fb-video" data-href="{{ post.url }}" data-width="700px" data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                         </blockquote></div>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_facebook' %}*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                         <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_externalUrl' %}*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                         <img class="img-responsive" src="{{ post.url }}" alt="">*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_local' %}*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                             <img class="img-responsive" src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-md-5 ">*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                         <h3>{{ post.title }}</h3>*/
/*                         <h4>{{ post.eventName }}</h4>*/
/*                     </a>*/
/*                     <div>*/
/*                         <a href="{{ path('smile_platform_profile', {'userId': post.user.getId })  }}">*/
/*                             by*/
/*                             <strong>{{ post.user.username }}</strong><br>*/
/*                         </a>*/
/*                     </div>*/
/*                     <p>*/
/*                     <div id="updownVote_{{post.id}}">*/
/*                         <div class="col-md-6 col-sm-6 col-xs-6">*/
/*                             <a href="">*/
/*                                 <span onclick="upvote({{ post.id }})"><img src="/images/upvote.png" class="vote-img"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-6">*/
/*                             <a href="">*/
/*                                 <span onclick="downvote({{ post.id }})"><img src="/images/downvote.png" class="vote-img"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="upvoted_{{post.id}}" hidden>*/
/*                         upvoted ;)*/
/*                     </div>*/
/*                     <div id="downvoted_{{post.id}}" hidden>*/
/*                         downvoted :(*/
/*                     </div>*/
/*                     </p>*/
/* */
/*                     <div>*/
/*                         <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                             {{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div>*/
/*                         <div class="spacer-5px">*/
/*                             <div class="fb-share-button"*/
/*                                  data-href="http://smilepaintball.com/platform/post/{{ post.id }}"*/
/*                                  data-layout="button_count">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="spacer-5px">*/
/*                             <a*/
/*                                     href="https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                                 <button class="btn twitter-share-button">Tweet</button></a>*/
/*                         </div>*/
/*                         <div class="spacer-5px">*/
/*                             <script type="IN/Share" data-url="http://smilepaintball.com/platform/post/{{ post.id }}" data-counter="right"></script>*/
/*                         </div>*/
/*                         <div class="spacer-5px">*/
/*                             Share: <input class=" form-control input-lg" value="http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         <hr/>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block rightCollumn %}*/
/*     {% if user.picture != null %}*/
/*         <img class="img-responsive" src="{{user.picture.uploadDir}}/{{user.picture.url}}" alt="{{ user.username }}">*/
/*     {% else %}*/
/* */
/*     {% endif %}*/
/*     {{ user.username }}<br/>*/
/*     {% if user.firstname%}*/
/*         {{ user.firstname }}*/
/*     {% endif %}*/
/*     {% if user.lastname %}*/
/*         {{ user.lastname }}*/
/*     {% endif %}<br/>*/
/*     <div>*/
/*         {% if user.id == app.user.id %}*/
/*             <button class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">Edit my profile</button>*/
/*         {% endif %}*/
/*     </div>*/
/*     <H3>Teams:</H3>*/
/*     {% for team in user.teams %}*/
/*         <div class="row">*/
/*             <a href="{{ path('smile_platform_team', {'id': team.id}) }}">*/
/*                 {%  if team.teamPicture  %}*/
/*                     <img width="16px" class="img-responsive pull-left" src="{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}" alt="{{ team.name }}">*/
/*                 {%  endif %}*/
/*                 <span> {{ team.name }}</span>*/
/*             </a>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     {% endfor %}*/
/* */
/* */
/*     {% if user.id == app.user.id %}*/
/*         <button class="btn btn-primary" data-toggle="modal" data-target="#CreateTeamModal">Create a team</button>*/
/*     {% elseif app.user.teams|length !=0 %}*/
/*         <button class="btn btn-primary" data-toggle="modal" data-target="#addToTeamModal">Add to a team</button>*/
/*     {% endif %}*/
/* */
/* */
/* */
/*     <div class="modal fade" id="addToTeamModal" tabindex="-1" role="dialog" aria-labelledby="addToTeamModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Add to a team</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {% for team in app.user.teams %}*/
/*                         <div class="row">*/
/*                             <a href="{{ path('smile_platform_add_to_team', {'teamId': team.id, 'userId': user.id}) }}">*/
/*                                 {%  if team.teamPicture  %}*/
/*                                     <img width="16px" class="img-responsive pull-left" src="{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}" alt="{{ team.name }}">*/
/*                                 {%  endif %}*/
/*                                 <span> {{ team.name }}</span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     {% endfor %}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="edotProfileModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Edit profile</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ render(controller('SmilePlatformBundle:User:editMyProfile', {'request': app.request})) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="CreateTeamModal" tabindex="-1" role="dialog" aria-labelledby="CreateTeamModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Create a team</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ render(controller('SmilePlatformBundle:Team:createTeam', {'request': app.request})) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
