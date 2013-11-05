(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcHeader",o);
function o(s,r){return s.write('<div class="cmpt-ptc-header"><div class="edu-header-wrapper"><div class="edu-header').notexists(r.get("subtitle"),r,{"block":m},null).write('"><div class="sharing-module"><span class="share-label">').reference(r.get("i18n_college_pt_share_label"),r,"h").write('</span><ul class="share-providers"><li><a href="').reference(r.get("link_linkedin_sharer"),r,"h").write('" class="share-icon linkedin">').reference(r.get("i18n_college_pt_share_on_linkedin"),r,"h").write("</a></li>").exists(r.get("isLixTwitterSharingOn"),r,{"block":i},null).exists(r.get("isLixFacebookSharingOn"),r,{"block":g},null).exists(r.get("isLixWeiboSharingOn"),r,{"block":e},null).exists(r.get("isLixTencentSharingOn"),r,{"block":d},null).write("</ul></div>").exists(r.get("collegeLogo"),r,{"block":c},null).write('<div class="header-title"><h2 class="title').exists(r.get("isLixCollegeAdminPilotOn"),r,{"block":b},null).write('">').exists(r.get("isLixCollegeAdminPilotOn"),r,{"else":a,"block":q},null).write("</h2>").exists(r.get("subtitle"),r,{"block":l},null).write("</div></div></div>").exists(r.get("isAdmin"),r,{"block":f},null).write("</div>")
}function m(s,r){return s.notexists(r.get("college_logo"),r,{"block":k},null)
}function k(s,r){return s.write(" mini-header")
}function i(s,r){return s.write('<li><a href="http://twitter.com/intent/tweet" class="share-icon twitter">').reference(r.get("i18n_college_pt_share_on_twitter"),r,"h").write("</a></li>")
}function g(s,r){return s.write('<li><a href="http://www.facebook.com/sharer.php" class="share-icon facebook">').reference(r.get("i18n_college_pt_share_on_facebook"),r,"h").write("</a></li>")
}function e(s,r){return s.write('<li><a href="http://service.weibo.com/share/share.php" class="share-icon weibo">').reference(r.get("i18n_college_pt_share_on_weibo"),r,"h").write("</a></li>")
}function d(s,r){return s.write('<li><a href="http://v.t.qq.com/share/share.php" class="share-icon tencent">').reference(r.get("i18n_college_pt_share_on_tencent"),r,"h").write("</a></li>")
}function c(s,r){return s.write('<img src="').reference(r.get("collegeLogo"),r,"h").write('" alt="').reference(r.get("title"),r,"h").write('" class="header-logo" width="80" height="80" />')
}function b(s,r){return s.write(" breadcrumb")
}function a(s,r){return s.reference(r.get("title"),r,"h")
}function q(s,r){return s.exists(r.get("linkCollegePage"),r,{"else":p,"block":n},null).write('<span class="separator"></span><strong>').reference(r.get("i18n_college_pt_header_breadcrumb_text"),r,"h",["s"]).write("</strong>")
}function p(s,r){return s.reference(r.get("title"),r,"h")
}function n(s,r){return s.write('<a href="').reference(r.get("linkCollegePage"),r,"h").write('">').reference(r.get("title"),r,"h").write("</a>")
}function l(s,r){return s.write('<h4 class="subtitle">').exists(r.get("fmtSubtitle"),r,{"else":j,"block":h},null).write("</h4>")
}function j(s,r){return s.reference(r.get("subtitle"),r,"h")
}function h(s,r){return s.reference(r.get("fmtSubtitle"),r,"h")
}function f(s,r){return s.write('<p class="college-admin-message">').reference(r.get("i18n_college_pt_admin_access_message"),r,"h").write("</p>")
}return o
})();
(function(){dust.register("college_PtcHeader",dust.cache["tl/apps/college/embed/cmpt/college_PtcHeader"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcControlBar",I);
function I(R,Q){return R.write('<div class="cmpt-ptc-control-bar"><div class="date-wrapper ').exists(Q.get("selectedSearchType"),Q,{"block":H},null).write('"><div class="select-wrapper"><div class="action-menu styled-dropdown year"><select class="date-type"><option value="attended" ').exists(Q.get("selectedSearchType"),Q,{"block":A},null).write(">").reference(Q.get("i18n_college_pt_dates_label_attended"),Q,"h").write('</option><option value="graduated" ').exists(Q.get("selectedSearchType"),Q,{"block":v},null).write(">").reference(Q.get("i18n_college_pt_dates_label_graduated"),Q,"h").write('</option></select></div></div><span class="date-dropdown attended"><select class="start-date date-input">').section(Q.get("attendedStartYears"),Q,{"block":l},null).write('</select><span class="date-separator">').reference(Q.get("i18n_college_pt_dates_separator"),Q,"h").write('</span><select class="end-date date-input">').section(Q.get("attendedEndYears"),Q,{"block":g},null).write('</select></span><span class="date-dropdown graduated"><select class="grad-date date-input">').section(Q.get("graduatedYears"),Q,{"block":b},null).write('</select></span><span class="no-date-wrapper"><input type="checkbox" id="show-with-no-date" name="show-with-no-date" ').exists(Q.get("includeNoDate"),Q,{"block":M},null).write('><label for="show-with-no-date">').reference(Q.get("i18n_college_pt_include_people_with_no_dates"),Q,"h").write('</label></span></div><div class="more-schools-wrapper"><div class="more-schools"><a href="#" class="btn-quaternary" data-li-action="show-more-schools">').reference(Q.get("i18n_college_pt_change_school"),Q,"h").write('<span class="drop-down-arrow"></span></a><div class="content"><ul>').exists(Q.get("showMySchools"),Q,{"block":L},null).exists(Q.get("showSimilarSchools"),Q,{"block":p},null).write('<li class="section"><ul class="group"><li><form action="#" id="school-seach-form"><label for="cmpt-ptc-header-school-typeahead" class="ghost">').reference(Q.get("i18n_college_pt_browse_any_school"),Q,"h").write('</label><div class="search-box-wrapper"><div class="search-box-input-wrapper"><input type="text" id="cmpt-ptc-header-school-typeahead" class="typeahead"/></div><button type="submit" class="search-box-submit active"></button><button type="reset" class="search-box-reset"></button></div></form></li></ul></li></ul></div></div></div></div>')
}function H(R,Q){return R.helper("eq",Q,{"else":G,"block":E},{"key":C,"value":"a"})
}function G(R,Q){return R.write("graduated")
}function E(R,Q){return R.write("attended")
}function C(R,Q){return R.reference(Q.get("selectedSearchType"),Q,"h")
}function A(R,Q){return R.helper("eq",Q,{"block":y},{"key":w,"value":"a"})
}function y(R,Q){return R.write("selected")
}function w(R,Q){return R.reference(Q.get("selectedSearchType"),Q,"h")
}function v(R,Q){return R.helper("eq",Q,{"block":t},{"key":m,"value":"g"})
}function t(R,Q){return R.write("selected")
}function m(R,Q){return R.reference(Q.get("selectedSearchType"),Q,"h")
}function l(R,Q){return R.write('<option value="').reference(Q.getPath(true,[]),Q,"h").write('" ').exists(Q.get("selectedAttendedStartYear"),Q,{"block":k},null).write(">").reference(Q.getPath(true,[]),Q,"h").write("</option>")
}function k(R,Q){return R.helper("eq",Q,{"block":j},{"key":i,"value":h})
}function j(R,Q){return R.write("selected")
}function i(R,Q){return R.reference(Q.get("selectedAttendedStartYear"),Q,"h")
}function h(R,Q){return R.reference(Q.getPath(true,[]),Q,"h")
}function g(R,Q){return R.write('<option value="').reference(Q.getPath(true,[]),Q,"h").write('" ').exists(Q.get("selectedAttendedEndYear"),Q,{"block":f},null).write(">").reference(Q.getPath(true,[]),Q,"h").write("</option>")
}function f(R,Q){return R.helper("eq",Q,{"block":e},{"key":d,"value":c})
}function e(R,Q){return R.write("selected")
}function d(R,Q){return R.reference(Q.get("selectedAttendedEndYear"),Q,"h")
}function c(R,Q){return R.reference(Q.getPath(true,[]),Q,"h")
}function b(R,Q){return R.write('<option value="').reference(Q.getPath(true,[]),Q,"h").write('" ').exists(Q.get("selectedGraduatedYear"),Q,{"block":a},null).write(">").reference(Q.getPath(true,[]),Q,"h").write("</option>")
}function a(R,Q){return R.helper("eq",Q,{"block":P},{"key":O,"value":N})
}function P(R,Q){return R.write("selected")
}function O(R,Q){return R.reference(Q.get("selectedGraduatedYear"),Q,"h")
}function N(R,Q){return R.reference(Q.getPath(true,[]),Q,"h")
}function M(R,Q){return R.write('checked="checked"')
}function L(R,Q){return R.write('<li class="section first"><ul class="my-schools group"><li>').reference(Q.get("i18n_college_pt_my_schools"),Q,"h").write("</li>").section(Q.get("mySchools"),Q,{"block":K},null).write("</ul></li>")
}function K(R,Q){return R.write('<li class="option" data-li-change-school=\'').reference(Q.get("json_schoolData"),Q,"h").write("'>").exists(Q.get("startDate"),Q,{"else":J,"block":x},null).write("</li>")
}function J(R,Q){return R.exists(Q.get("endDate"),Q,{"else":F,"block":B},null)
}function F(R,Q){return R.write('<a href="#" title="').reference(Q.get("schoolName"),Q,"h").write('">').helper("college.fmt.str_limitter",Q,{},{"str":D,"len":"40"}).write("</a>")
}function D(R,Q){return R.reference(Q.get("schoolName"),Q,"h")
}function B(R,Q){return R.write('<a href="#" title="').reference(Q.get("schoolName"),Q,"h").write(", ").reference(Q.get("endDate"),Q,"h").write('">').helper("college.fmt.str_limitter",Q,{},{"str":z,"len":"40"}).write(", ").reference(Q.get("endDate"),Q,"h").write("</a>")
}function z(R,Q){return R.reference(Q.get("schoolName"),Q,"h")
}function x(R,Q){return R.exists(Q.get("endDate"),Q,{"else":u,"block":r},null)
}function u(R,Q){return R.write('<a href="#" title="').reference(Q.get("schoolName"),Q,"h").write(", ").reference(Q.get("startDate"),Q,"h").write('-">').helper("college.fmt.str_limitter",Q,{},{"str":s,"len":"40"}).write(", ").reference(Q.get("startDate"),Q,"h").write("-</a>")
}function s(R,Q){return R.reference(Q.get("schoolName"),Q,"h")
}function r(R,Q){return R.write('<a href="#" title="').reference(Q.get("schoolName"),Q,"h").write(", ").reference(Q.get("startDate"),Q,"h").write("-").reference(Q.get("endDate"),Q,"h").write('">').helper("college.fmt.str_limitter",Q,{},{"str":q,"len":"40"}).write(", ").reference(Q.get("startDate"),Q,"h").write("-").reference(Q.get("endDate"),Q,"h").write("</a>")
}function q(R,Q){return R.reference(Q.get("schoolName"),Q,"h")
}function p(R,Q){return R.write('<li class="section first"><ul class="similar-schools group"><li>').reference(Q.get("i18n_college_pt_similar_schools"),Q,"h").write("</li>").section(Q.get("similarSchools"),Q,{"block":o},null).write("</ul></li>")
}function o(R,Q){return R.write('<li class="option" data-li-change-school=\'').reference(Q.get("json_schoolData"),Q,"h").write('\'><a href="#" title="').reference(Q.get("schoolName"),Q,"h").write('">').helper("college.fmt.str_limitter",Q,{},{"str":n,"len":"40"}).write("</a></li>")
}function n(R,Q){return R.reference(Q.get("schoolName"),Q,"h")
}return I
})();
(function(){dust.register("college_PtcControlBar",dust.cache["tl/apps/college/embed/cmpt/college_PtcControlBar"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcFacetBar",a);
function a(c,b){return c.write('<div class="cmpt-ptc-facet-bar cf"><div class="container-cmpt-bucket-bar cf"></div><div class="top-shadow"></div><div class="carousel"><button class="carousel-button carousel-previous" title="').reference(b.get("i18n_college_pt_carousel_previous_tooltip"),b,"h").write('"><span class="alumni-icon carousel-previous">&lt;</span></button><div class="carousel-viewport"><ul class="facets"></ul></div><button class="carousel-button carousel-next" title="').reference(b.get("i18n_college_pt_carousel_next_tooltip"),b,"h").write('"><span class="alumni-icon carousel-next">&gt;</span></button></div></div>')
}return a
})();
(function(){dust.register("college_PtcFacetBar",dust.cache["tl/apps/college/embed/cmpt/college_PtcFacetBar"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcFacet",d);
function d(f,e){return f.write('<li class="cmpt-ptc-facet facet ').reference(e.get("typeaheadClasses"),e,"h").write('"><h2>').reference(e.get("title"),e,"h").write("</h2><ul>").section(e.getPath(false,["buckets","values"]),e,{"block":c},{"facet_type":e.get("code")}).write('</ul><p class="no-results">').reference(e.get("i18n_college_pt_no_facet_results_found"),e,"h").write("</p>").exists(e.get("hasTypeahead"),e,{"block":b},null).write('<span class="collapse-facet-wrapper"><a class="more" href="#">').reference(e.get("i18n_college_pt_more"),e,"h").write('</a><a class="less" href="#">').reference(e.get("i18n_college_pt_less"),e,"h").write("</a>").exists(e.get("hasTypeahead"),e,{"block":a},null).write("</span></li>")
}function c(f,e){return f.write('<li class="bucket" data-li-facet-action="" title=""><a class="facet-item" href="#"><span class="count"></span><label></label></a><div class="bar-graph"></div><div class="bar-bg"></div></li>')
}function b(f,e){return f.write('<label for="cmpt-ptc-facet-typeahead-').reference(e.get("code"),e,"h").write('" class="ghost">').reference(e.getPath(false,["typeahead","label"]),e,"h").write('</label><div class="search-box-wrapper"><div class="search-box-input-wrapper"><input type="text" id="cmpt-ptc-facet-typeahead-').reference(e.get("code"),e,"h").write('" class="typeahead"></div><button type="submit" class="search-box-submit active"></button><button type="reset" class="search-box-reset"></button></div>')
}function a(f,e){return f.write('<button class="search-facet" type="button"></button>')
}return d
})();
(function(){dust.register("college_PtcFacet",dust.cache["tl/apps/college/embed/cmpt/college_PtcFacet"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcFindAlumniGroup",a);
function a(c,b){return c.write('<div id="cmpt-ptc-find-alumni-group"><div class="wrapper"><div class="pin"></div><div class="gradcap alumni-icon"></div><h1>').reference(b.get("i18n_college_pt_join_alumni_group"),b,"h").write("</h1><h2>").reference(b.get("i18n_college_pt_join_alumni_group_tagline"),b,"h").write('</h2><a href="#" id="find-group-link" class="btn-primary">').reference(b.get("i18n_college_pt_find_group"),b,"h",["s"]).write("</a></div></div>")
}return a
})();
(function(){dust.register("college_PtcFindAlumniGroup",dust.cache["tl/apps/college/embed/cmpt/college_PtcFindAlumniGroup"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcNextQuestion",a);
function a(c,b){return c.write('<div id="cmpt-ptc-next-question"><div class="wrapper"><div class="pin"></div><div class="corner"><div class="arrow"></div></div><div class="content"><a href="').reference(b.getPath(false,["question","url"]),b,"h").write('" data-li-next-question="').reference(b.get("json_question"),b,"h").write('">').reference(b.getPath(false,["question","label"]),b,"h",["s"]).write("</a></div></div></div>")
}return a
})();
(function(){dust.register("college_PtcNextQuestion",dust.cache["tl/apps/college/embed/cmpt/college_PtcNextQuestion"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcBucketBar",c);
function c(e,d){return e.write('<div class="cmpt-ptc-bucket-bar"><div class="facet-bar-content-wrapper"><span>').reference(d.get("i18n_college_pt_you_selected"),d,"h").write("</span><ul>").section(d.get("buckets"),d,{"block":b},null).exists(d.get("showClearFilters"),d,{"block":a},null).write("</ul></div></div>")
}function b(e,d){return e.write('<li><a href="#" class="remove-facet" title="').reference(d.get("i18n_college_pt_clear_filter"),d,"h").write('" data-li-facet-action="remove,').reference(d.get("facetCode"),d,"h").write(",").reference(d.get("code"),d,"h").write('">').reference(d.get("i18n_college_pt_remove_facet"),d,"h").write("</a> ").reference(d.get("name"),d,"h").write("</li>")
}function a(e,d){return e.write('<li><a class="reset" data-li-facet-action="reset" href="#">').reference(d.get("i18n_college_pt_clear_filters"),d,"h").write("</a></li>")
}return c
})();
(function(){dust.register("college_PtcBucketBar",dust.cache["tl/apps/college/embed/cmpt/college_PtcBucketBar"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcStatusBar",c);
function c(e,d){return e.write('<div class="cmpt-ptc-status-bar cf"><div class="call-out-arrow"></div><div class="results-wrapper"><span class="num-results-label">').reference(d.get("he_displayTotal"),d,"h",["s"]).write("</span>").notexists(d.get("suppressHideConnections"),d,{"block":b},null).write('</div><div class="search-wrapper"><form id="school-form" action="#" name="school-form"><label for="pt-keywords" class="ghost" id="pt-keywords-label">').reference(d.get("i18n_college_pt_search_for_alumni"),d,"h").write('</label><div class="search-box-wrapper"><div class="search-box-input-wrapper"><input id="pt-keywords" name="pt-keywords" type="text"></div><button type="submit" class="search-box-submit active">').reference(d.get("i18n_college_pt_search_for_alumni"),d,"h").write('</button><button type="reset" class="search-box-reset"></button></div></form> </div></div>')
}function b(e,d){return e.write('<span class="hide-connections-wrapper"><input type="checkbox" id="hide-my-connections" name="hide-my-connections"').exists(d.get("hideConnections"),d,{"block":a},null).write(' /><label for="hide-my-connections">').reference(d.get("i18n_college_pt_remove_my_connections_from_results"),d,"h").write("</label></span>")
}function a(e,d){return e.write(' checked="checked"')
}return c
})();
(function(){dust.register("college_PtcStatusBar",dust.cache["tl/apps/college/embed/cmpt/college_PtcStatusBar"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcPeopleResults",s);
function s(I,H){return I.write('<div class="cmpt-ptc-people-results cf"><div class="content active"><ul class="people-cards">').section(H.getPath(false,["people","values"]),H,{"block":q},null).write('</ul><div class="no-results ').reference(H.get("noResultsClass"),H,"h").write('">').reference(H.get("i18n_college_pt_not_seeing_who_you_are_looking_for"),H,"h").write('</div><div class="no-results-filters ').reference(H.get("noResultsFiltersClass"),H,"h").write('">').section(H.get("replace"),H,{"block":e},{"target":d,"match":"<span>(.*)</span>","replacement":"<a href='#' data-li-facet-action='reset'>$1</a>"}).write('</div></div><div class="progress-indicator"><img id="loading-img" src="/scds/common/u/img/anim/anim_loading_75x75.gif" width="75" height="75" alt=""></div><div class="more-wrapper ').exists(H.get("showMoreButton"),H,{"block":c},null).write('"><button id="more">').reference(H.get("i18n_college_pt_show_more"),H,"h").write('<img class="spinner" width="16" height="16" src="/scds/common/u/img/anim/anim_loading_16x16.gif" alt=""></button></div></div>')
}function q(I,H){return I.exists(H.get("findgroup"),H,{"block":p},null).exists(H.get("nextquestion"),H,{"block":n},null).exists(H.get("person"),H,{"block":l},null)
}function p(I,H){return I.write('<li id="container-ptc-find-alumni-group" class="person"></li>')
}function n(I,H){return I.write('<li id="container-ptc-next-question" class="person"></li>')
}function l(I,H){return I.write('<li class="person">').exists(H.get("gradYear"),H,{"block":j},null).write('<a class="profile-link" data-li-member-gradyear="').reference(H.get("gradYear"),H,"h").write('" data-li-member-id="').reference(H.get("id"),H,"h").write('" href="').reference(H.get("publicProfileUrl"),H,"h").write('">').exists(H.get("pictureUrl"),H,{"else":h,"block":g},null).write('</a><div class="details"><h3 class="full-name"><div class="distance"><a class="profile-link" data-li-member-gradyear="').reference(H.get("gradYear"),H,"h").write('" data-li-member-id="').reference(H.get("id"),H,"h").write('" href="').reference(H.get("publicProfileUrl"),H,"h").write('">').reference(H.get("fullName"),H,"h").write("</a>").helper("ne",H,{"block":f},{"key":v,"value":"-1"}).write('</div></h3><p class="headline">').reference(H.get("he_headline"),H,"h",["s"]).write('</p><ul class="specifics"><li class="first">').section(H.get("location"),H,{"block":u},null).write('</li></ul></div><div class="ft">').helper("eq",H,{"else":t,"block":a},{"key":G,"value":"0"}).write('<span class="divider">&nbsp;</span>').helper("ne",H,{"block":F},{"key":z,"value":"0"}).write("</div></li>")
}function j(I,H){return I.write('<div class="grad-year">').helper("college.fmt.two_digit_year",H,{},{"year":i}).write("</div>")
}function i(I,H){return I.reference(H.get("gradYear"),H,"h")
}function h(I,H){return I.write('<img src="').reference(H.get("noPhotoIcon"),H,"h").write('" alt="').reference(H.get("fullName"),H,"h").write('" />')
}function g(I,H){return I.write('<img src="').reference(H.get("pictureUrl"),H,"h").write('" alt="').reference(H.get("fullName"),H,"h").write('" />')
}function f(I,H){return I.helper("ne",H,{"block":y},{"key":w,"value":"100"})
}function y(I,H){return I.write('<span class="network-degree">').helper("college.fmt.degree",H,{},{"distance":x}).write("</span>")
}function x(I,H){return I.reference(H.get("distance"),H,"h")
}function w(I,H){return I.reference(H.get("distance"),H,"h")
}function v(I,H){return I.reference(H.get("distance"),H,"h")
}function u(I,H){return I.reference(H.get("name"),H,"h")
}function t(I,H){return I.helper("eq",H,{"else":r,"block":k},{"key":b,"value":"1"})
}function r(I,H){return I.helper("ne",H,{"block":o},{"key":m,"value":"-1"})
}function o(I,H){return I.write('<span class="connect-logo"></span><a class="left-action connect" data-li-connect-id="').reference(H.get("id"),H,"h").write('" href="').reference(H.get("inviteMember"),H,"h").write('">').reference(H.get("i18n_college_pt_connect"),H,"h").write("</a>")
}function m(I,H){return I.reference(H.get("distance"),H,"h")
}function k(I,H){return I.write('<a href="').reference(H.get("msgToConns"),H,"h").write("&connId=").reference(H.get("id"),H,"h").write('&trk=cpt_msg" class="left-action message">').reference(H.get("i18n_college_pt_message"),H,"h").write("</a>")
}function b(I,H){return I.reference(H.get("distance"),H,"h")
}function a(I,H){return I.write('<a href="').reference(H.get("editProfile"),H,"h").write('" class="left-action" alt="').reference(H.get("i18n_college_pt_edit_profile"),H,"h").write('">').reference(H.get("i18n_college_pt_edit_profile"),H,"h").write("</a>")
}function G(I,H){return I.reference(H.get("distance"),H,"h")
}function F(I,H){return I.helper("gt",H,{"else":E,"block":B},{"key":A,"value":"0"})
}function E(I,H){return I.helper("gt",H,{"block":D},{"key":C,"value":"0"})
}function D(I,H){return I.write('<a href="').reference(H.get("publicProfileUrl"),H,"h").write('" class="right-action shared-connections" data-li-member-id="').reference(H.get("id"),H,"h").write('" data-li-member-gradyear="').reference(H.get("gradYear"),H,"h").write('">').reference(H.get("sharedGroups"),H,"h").write("</a>")
}function C(I,H){return I.reference(H.get("totalNumSharedGroups"),H,"h")
}function B(I,H){return I.write('<a href="').reference(H.get("publicProfileUrl"),H,"h").write('" class="right-action shared-connections" data-li-member-id="').reference(H.get("id"),H,"h").write('" data-li-member-gradyear="').reference(H.get("gradYear"),H,"h").write('">').reference(H.get("sharedConnections"),H,"h").write("</a>")
}function A(I,H){return I.reference(H.get("totalNumSharedConnections"),H,"h")
}function z(I,H){return I.reference(H.get("distance"),H,"h")
}function e(I,H){return I
}function d(I,H){return I.reference(H.get("i18n_college_pt_not_seeing_who_you_are_looking_for_filters"),H,"h",["s"])
}function c(I,H){return I.write(" active ")
}return s
})();
(function(){dust.register("college_PtcPeopleResults",dust.cache["tl/apps/college/embed/cmpt/college_PtcPeopleResults"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcModal",a);
function a(c,b){return c.write('<div class="cmpt-ptc-modal cf"><div class="lights-out"></div></div>')
}return a
})();
(function(){dust.register("college_PtcModal",dust.cache["tl/apps/college/embed/cmpt/college_PtcModal"])
})();(function(){dust.register("tl/apps/college/embed/cmpt/college_PtcGuideModule",a);
function a(c,b){return c.write('<div class="cmpt-ptc-guide-module"><div class="guide-module"><span class="guide-arrow"></span><span class="guide-message handwritten">').reference(b.get("i18n_college_pt_click_to_filter_prompt"),b,"h").write("</span></div></div>")
}return a
})();
(function(){dust.register("college_PtcGuideModule",dust.cache["tl/apps/college/embed/cmpt/college_PtcGuideModule"])
})();