<?php

/* SmilePlatformBundle:Default:Blocs/allPosts.html.twig */
class __TwigTemplate_8fde1606c2e9bce69fec9e531571b44b7adcaef39b2d4badb5090e22e6fa0502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305ad7cf3a23a9af1d1b341fc641c45d51aba27fd953ddb970e844dbdf9adefa = $this->env->getExtension("native_profiler");
        $__internal_305ad7cf3a23a9af1d1b341fc641c45d51aba27fd953ddb970e844dbdf9adefa->enter($__internal_305ad7cf3a23a9af1d1b341fc641c45d51aba27fd953ddb970e844dbdf9adefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig"));

        // line 1
        echo "<!-- Project One -->
<div ng-controller=\"allPostsCtrl\">
    <span id=\"smileApiGetLastPostsUrl\" hidden>";
        // line 3
        echo $this->env->getExtension('routing')->getPath("smile_api_getlastPosts");
        echo "</span>
    <span id=\"smileApiGetOlder\" hidden>";
        // line 4
        echo $this->env->getExtension('routing')->getPath("smile_api_getOlderPosts_url");
        echo "</span>
    <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 5
        echo $this->env->getExtension('routing')->getPath("smile_api_post_upvote_url");
        echo "</span>
    <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 6
        echo $this->env->getExtension('routing')->getPath("smile_api_post_downvote_url");
        echo "</span>
    <div id=\"spiningWheelAllPosts\">
        <i class=\"fa fa-spinner fa-spin fa-5x\"></i> <H3>Loading</H3>
    </div>


    <div id=\"contentAllPosts\" hidden>
        <div ng-repeat=\"post in posts | orderBy: '-creationTime'\">
            ";
        // line 189
        echo "
                <div class=\"row\" >
                    <div class=\"col-md-7\">

                            <div ng-if=\"post.type=='video_youtube'\">
                                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                            <div ng-if=\"post.type=='video_facebook'\">
                                <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"460px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                                </blockquote></div>
                            </div>
                            <div ng-if=\"post.type=='picture_facebook'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_externalUrl'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"img-responsive\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_local'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"img-responsive\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>


                    </div>
                    <div class=\"col-md-5\">
                        <h3><a ng-href=\"/platform/post/{{ post.id }}\">{{ post.title }}</a></h3>
                        <h4><a ng-href=\"/platform/post/{{ post.id }}\">{{ post.event_name }}</a></h4>
                        <span ng-if=\"post.user.firstName != '' && post.user.lastName != '' && post.user.firstName != null && post.user.lastName != null\">
                            <a ng-href=\"/platform/profile/{{ post.user.id }}\">
                                by <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong>
                                <br/>
                            </a>
                        </span>
                        <span ng-if=\"post.user.firstName == '' || post.user.lastName == '' || post.user.firstName == null || post.user.lastName == null\">
                            <a ng-href=\"/platform/profile/{{ post.user.id }}\">
                                by <strong>{{ post.user.username }}</strong>
                                <br/>
                            </a>
                        </span>
                        <span ng-if=\"post.team\">
                            <a ng-href=\"/platform/team/{{ post.team.id }}\">team: <strong>{{ post.team.name }}</strong></a>
                        </span>
                        <br/>
                        <span ng-if=\"post.eventName && post.eventName != ''\">
                            Event: {{ post.eventName }}
                        </span>
                        <p>
                            <div id=\"updownVote_{{post.id}}\">
                                <div class=\"col-md-6 col-xs-6\">
                                    <a href=\"\">
                                        <span ng-click=\"upvote(post.id)\">
                                            <img src=\"/images/upvote.png\" class=\"vote-img\">

                                        </span>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-xs-6\">
                                    <a href=\"\">
                                        <span ng-click=\"downvote(post.id)\">
                                            <img src=\"/images/downvote.png\" class=\"vote-img\">

                                        </span>
                                    </a>
                                </div>
                            </div>
                           <div id=\"upvoted_{{post.id}}\" hidden>
                                  upvoted ;)
                            </div>
                            <div id=\"downvoted_{{post.id}}\" hidden>
                                downvoted :(
                            </div>
                        </p>
                        <div>
                            <a ng-href=\"/platform/post/{{ post.id }}\">{{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments</a>
                        </div>
                        <div>
                            <div class=\"spacer-5px\">
                                <div class=\"fb-share-button\"
                                data-href=\"http://smilepaintball.com/platform/post/{{ post.id }}\"
                                data-layout=\"button_count\">
                            </div>
                            </div>
                            <div class=\"spacer-5px\">
                                <a
                        href=\"https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                            </div>
                            <div class=\"spacer-5px\">
                                <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/{{ post.id }}\" data-counter=\"right\"></script>
                            </div>
                            <div class=\"spacer-5px\">
                                Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/{{ post.id }}\">
                            </div>


                        </div>
                    </div>

                </div>
                <div ng-if=\"(\$index%5)==0\" class=\"row\">
                    <hr/>
                    <h3>Sponsors</h3>
                    <div class=\"row\">

                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://www.tippmann.com/\">
                                <img src=\"/images/sponsors/tippmann.png\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://gisportz.com/\">
                                <img src=\"/images/sponsors/gisportz.png\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://gisportz.com/vforce-goggles.php\">
                                <img src=\"/images/sponsors/vforce.png\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://www.redbull.com/be/fr\">
                                <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.kg-factory.fr/fr/\">
                                <img src=\"/images/sponsors/kgfactory.png\" width=\"50em\">
                            </a>

                        </div>


                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.patch-werk.com/index.php/en/\">
                                <img src=\"/images/sponsors/patch-werk.png\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.enolagaye.com\">
                                <img src=\"/images/sponsors/g-n.jpeg\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://maxxloader.com/\">
                                <img src=\"http://maxxloader.com/wp-content/uploads/2015/03/MaxXloader-Logo-R35.png\" width=\"50em\">
                            </a>

                        </div>

                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://shop.customgunrails.com/\">
                                <img src=\"http://shop.customgunrails.com/images/CGR_LOGOlight.png\" width=\"50em\">
                            </a>

                        </div>
                    </div>
                </div>

            ";
        echo "
            <!-- /.row -->
            <hr>
        </div>
    </div>
    <!--  end ng-repeat -->

    <div id=\"bottomOfThePage\">

    </div>

    <div ng-if=\"loadMore == true\">
        <button class=\"btn btn-primary\" ng-click=\"loadMoreBdt\">Load More</button>
    </div>

</div>

";
        
        $__internal_305ad7cf3a23a9af1d1b341fc641c45d51aba27fd953ddb970e844dbdf9adefa->leave($__internal_305ad7cf3a23a9af1d1b341fc641c45d51aba27fd953ddb970e844dbdf9adefa_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:Blocs/allPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 189,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <!-- Project One -->*/
/* <div ng-controller="allPostsCtrl">*/
/*     <span id="smileApiGetLastPostsUrl" hidden>{{ path ('smile_api_getlastPosts') }}</span>*/
/*     <span id="smileApiGetOlder" hidden>{{ path('smile_api_getOlderPosts_url') }}</span>*/
/*     <span id="smileApiUpvoteUrl" hidden>{{ path ('smile_api_post_upvote_url') }}</span>*/
/*     <span id="smileApiDownvoteUrl" hidden>{{ path ('smile_api_post_downvote_url') }}</span>*/
/*     <div id="spiningWheelAllPosts">*/
/*         <i class="fa fa-spinner fa-spin fa-5x"></i> <H3>Loading</H3>*/
/*     </div>*/
/* */
/* */
/*     <div id="contentAllPosts" hidden>*/
/*         <div ng-repeat="post in posts | orderBy: '-creationTime'">*/
/*             {% verbatim %}*/
/*                 <div class="row" >*/
/*                     <div class="col-md-7">*/
/* */
/*                             <div ng-if="post.type=='video_youtube'">*/
/*                                 <iframe  width="100%"  height="300px" ng-src="{{ trustAsResourceUrl(post.url) }}" frameborder="0" allowfullscreen></iframe>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='video_facebook'">*/
/*                                 <div class="fb-video" data-href="{{ post.url }}" data-width="460px" data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                                 </blockquote></div>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_facebook'">*/
/*                                 <a ng-href="/platform/post/{{ post.id }}">*/
/*                                     <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_externalUrl'">*/
/*                                 <a ng-href="/platform/post/{{ post.id }}">*/
/*                                     <img class="img-responsive" ng-src="{{ trustAsResourceUrl(post.url) }}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_local'">*/
/*                                 <a ng-href="/platform/post/{{ post.id }}">*/
/*                                     <img class="img-responsive" ng-src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="col-md-5">*/
/*                         <h3><a ng-href="/platform/post/{{ post.id }}">{{ post.title }}</a></h3>*/
/*                         <h4><a ng-href="/platform/post/{{ post.id }}">{{ post.event_name }}</a></h4>*/
/*                         <span ng-if="post.user.firstName != '' && post.user.lastName != '' && post.user.firstName != null && post.user.lastName != null">*/
/*                             <a ng-href="/platform/profile/{{ post.user.id }}">*/
/*                                 by <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong>*/
/*                                 <br/>*/
/*                             </a>*/
/*                         </span>*/
/*                         <span ng-if="post.user.firstName == '' || post.user.lastName == '' || post.user.firstName == null || post.user.lastName == null">*/
/*                             <a ng-href="/platform/profile/{{ post.user.id }}">*/
/*                                 by <strong>{{ post.user.username }}</strong>*/
/*                                 <br/>*/
/*                             </a>*/
/*                         </span>*/
/*                         <span ng-if="post.team">*/
/*                             <a ng-href="/platform/team/{{ post.team.id }}">team: <strong>{{ post.team.name }}</strong></a>*/
/*                         </span>*/
/*                         <br/>*/
/*                         <span ng-if="post.eventName && post.eventName != ''">*/
/*                             Event: {{ post.eventName }}*/
/*                         </span>*/
/*                         <p>*/
/*                             <div id="updownVote_{{post.id}}">*/
/*                                 <div class="col-md-6 col-xs-6">*/
/*                                     <a href="">*/
/*                                         <span ng-click="upvote(post.id)">*/
/*                                             <img src="/images/upvote.png" class="vote-img">*/
/* */
/*                                         </span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6 col-xs-6">*/
/*                                     <a href="">*/
/*                                         <span ng-click="downvote(post.id)">*/
/*                                             <img src="/images/downvote.png" class="vote-img">*/
/* */
/*                                         </span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                            <div id="upvoted_{{post.id}}" hidden>*/
/*                                   upvoted ;)*/
/*                             </div>*/
/*                             <div id="downvoted_{{post.id}}" hidden>*/
/*                                 downvoted :(*/
/*                             </div>*/
/*                         </p>*/
/*                         <div>*/
/*                             <a ng-href="/platform/post/{{ post.id }}">{{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments</a>*/
/*                         </div>*/
/*                         <div>*/
/*                             <div class="spacer-5px">*/
/*                                 <div class="fb-share-button"*/
/*                                 data-href="http://smilepaintball.com/platform/post/{{ post.id }}"*/
/*                                 data-layout="button_count">*/
/*                             </div>*/
/*                             </div>*/
/*                             <div class="spacer-5px">*/
/*                                 <a*/
/*                         href="https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                                 <button class="btn twitter-share-button">Tweet</button></a>*/
/*                             </div>*/
/*                             <div class="spacer-5px">*/
/*                                 <script type="IN/Share" data-url="http://smilepaintball.com/platform/post/{{ post.id }}" data-counter="right"></script>*/
/*                             </div>*/
/*                             <div class="spacer-5px">*/
/*                                 Share: <input class=" form-control input-lg" value="http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div ng-if="($index%5)==0" class="row">*/
/*                     <hr/>*/
/*                     <h3>Sponsors</h3>*/
/*                     <div class="row">*/
/* */
/*                         <div class="col-md-1 col-xs-2" >*/
/*                             <a href="http://www.tippmann.com/">*/
/*                                 <img src="/images/sponsors/tippmann.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2" >*/
/*                             <a href="http://gisportz.com/">*/
/*                                 <img src="/images/sponsors/gisportz.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2" >*/
/*                             <a href="http://gisportz.com/vforce-goggles.php">*/
/*                                 <img src="/images/sponsors/vforce.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2" >*/
/*                             <a href="http://www.redbull.com/be/fr">*/
/*                                 <img src="/images/sponsors/redbull-com-logo.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2">*/
/*                             <a href="http://www.kg-factory.fr/fr/">*/
/*                                 <img src="/images/sponsors/kgfactory.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/* */
/*                         <div class="col-md-1 col-xs-2">*/
/*                             <a href="http://www.patch-werk.com/index.php/en/">*/
/*                                 <img src="/images/sponsors/patch-werk.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2">*/
/*                             <a href="http://www.enolagaye.com">*/
/*                                 <img src="/images/sponsors/g-n.jpeg" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2">*/
/*                             <a href="http://maxxloader.com/">*/
/*                                 <img src="http://maxxloader.com/wp-content/uploads/2015/03/MaxXloader-Logo-R35.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-1 col-xs-2">*/
/*                             <a href="http://shop.customgunrails.com/">*/
/*                                 <img src="http://shop.customgunrails.com/images/CGR_LOGOlight.png" width="50em">*/
/*                             </a>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             {% endverbatim %}*/
/*             <!-- /.row -->*/
/*             <hr>*/
/*         </div>*/
/*     </div>*/
/*     <!--  end ng-repeat -->*/
/* */
/*     <div id="bottomOfThePage">*/
/* */
/*     </div>*/
/* */
/*     <div ng-if="loadMore == true">*/
/*         <button class="btn btn-primary" ng-click="loadMoreBdt">Load More</button>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
