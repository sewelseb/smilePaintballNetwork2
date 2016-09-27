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
        $__internal_c49735c06edabe27540ba8107f749f9ebd2c6197530f4a783e46b5de12f01c67 = $this->env->getExtension("native_profiler");
        $__internal_c49735c06edabe27540ba8107f749f9ebd2c6197530f4a783e46b5de12f01c67->enter($__internal_c49735c06edabe27540ba8107f749f9ebd2c6197530f4a783e46b5de12f01c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49735c06edabe27540ba8107f749f9ebd2c6197530f4a783e46b5de12f01c67->leave($__internal_c49735c06edabe27540ba8107f749f9ebd2c6197530f4a783e46b5de12f01c67_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_2144a63b422d86c9308889942a59d75c6557d55b915913e6cc28778c92a7d387 = $this->env->getExtension("native_profiler");
        $__internal_2144a63b422d86c9308889942a59d75c6557d55b915913e6cc28778c92a7d387->enter($__internal_2144a63b422d86c9308889942a59d75c6557d55b915913e6cc28778c92a7d387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_2144a63b422d86c9308889942a59d75c6557d55b915913e6cc28778c92a7d387->leave($__internal_2144a63b422d86c9308889942a59d75c6557d55b915913e6cc28778c92a7d387_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_4a84445481559dda176231cf25ec914f6708b779c345d25550e70ad5f0a56d12 = $this->env->getExtension("native_profiler");
        $__internal_4a84445481559dda176231cf25ec914f6708b779c345d25550e70ad5f0a56d12->enter($__internal_4a84445481559dda176231cf25ec914f6708b779c345d25550e70ad5f0a56d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
                            ";
            // line 44
            if (($this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()))) {
                // line 45
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()), "html", null, true);
                echo "</strong><br>
                            ";
            } else {
                // line 47
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "</strong><br>
                            ";
            }
            // line 49
            echo "                        </a>
                    </div>

                    <div>
                        ";
            // line 53
            if ($this->getAttribute($context["post"], "team", array())) {
                // line 54
                echo "                            <a href=\"/platform/team/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "id", array()), "html", null, true);
                echo "\">team: <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "name", array()), "html", null, true);
                echo "</strong></a>
                        ";
            }
            // line 56
            echo "                    </div>


                    <p>
                    <div id=\"updownVote_";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                    </div>
                    <div id=\"upvoted_";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        upvoted ;)
                    </div>
                    <div id=\"downvoted_";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        downvoted :(
                    </div>
                    </p>

                    <div>
                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                            ";
            // line 82
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
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                                 data-layout=\"button_count\">
                            </div>
                        </div>
                        <div class=\"spacer-5px\">
                            <a
                                    href=\"https://twitter.com/intent/tweet?text=";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                        </div>
                        <div class=\"spacer-5px\">
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                        </div>
                        <div class=\"spacer-5px\">
                            Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
            // line 102
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
        
        $__internal_4a84445481559dda176231cf25ec914f6708b779c345d25550e70ad5f0a56d12->leave($__internal_4a84445481559dda176231cf25ec914f6708b779c345d25550e70ad5f0a56d12_prof);

    }

    // line 115
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_634483fec1c89d291184bba3263d05c19f08261ac7d4edf4e9322c24851a2ed0 = $this->env->getExtension("native_profiler");
        $__internal_634483fec1c89d291184bba3263d05c19f08261ac7d4edf4e9322c24851a2ed0->enter($__internal_634483fec1c89d291184bba3263d05c19f08261ac7d4edf4e9322c24851a2ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 116
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 117
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 119
            echo "
    ";
        }
        // line 121
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 122
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 123
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 125
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 126
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 127
        echo "<br/>
    <div>
        ";
        // line 129
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 130
            echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
        ";
        }
        // line 132
        echo "    </div>
    <H3>Teams:</H3>
    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 135
            echo "        <div class=\"row\">
            <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_team", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 137
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 138
                echo "                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 140
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
        // line 145
        echo "

    ";
        // line 147
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 148
            echo "        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 149
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array())) != 0)) {
            // line 150
            echo "        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
    ";
        }
        // line 152
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
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 164
            echo "                        <div class=\"row\">
                            <a href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_add_to_team", array("teamId" => $this->getAttribute($context["team"], "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 166
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 167
                echo "                                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 169
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
        // line 174
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
        // line 188
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
        // line 204
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Team:createTeam", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_634483fec1c89d291184bba3263d05c19f08261ac7d4edf4e9322c24851a2ed0->leave($__internal_634483fec1c89d291184bba3263d05c19f08261ac7d4edf4e9322c24851a2ed0_prof);

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
        return array (  490 => 204,  471 => 188,  455 => 174,  443 => 169,  433 => 167,  431 => 166,  427 => 165,  424 => 164,  420 => 163,  407 => 152,  403 => 150,  401 => 149,  398 => 148,  396 => 147,  392 => 145,  380 => 140,  370 => 138,  368 => 137,  364 => 136,  361 => 135,  357 => 134,  353 => 132,  349 => 130,  347 => 129,  343 => 127,  337 => 126,  334 => 125,  328 => 123,  326 => 122,  321 => 121,  317 => 119,  307 => 117,  304 => 116,  298 => 115,  276 => 102,  270 => 99,  261 => 95,  252 => 89,  240 => 82,  236 => 81,  227 => 75,  221 => 72,  214 => 68,  206 => 63,  200 => 60,  194 => 56,  186 => 54,  184 => 53,  178 => 49,  172 => 47,  164 => 45,  162 => 44,  157 => 42,  151 => 39,  147 => 38,  143 => 37,  139 => 35,  131 => 32,  126 => 31,  123 => 30,  117 => 27,  112 => 26,  109 => 25,  103 => 22,  98 => 21,  95 => 20,  84 => 17,  81 => 16,  75 => 14,  73 => 13,  68 => 11,  64 => 10,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                             {% if post.user.firstName and post.user.lastName %}*/
/*                                 <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong><br>*/
/*                             {% else %}*/
/*                                 <strong>{{ post.user.username }}</strong><br>*/
/*                             {% endif %}*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div>*/
/*                         {% if post.team  %}*/
/*                             <a href="/platform/team/{{ post.team.id }}">team: <strong>{{ post.team.name }}</strong></a>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/* */
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
