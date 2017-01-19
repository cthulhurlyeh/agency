<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/
/**
 * Template for Book and Chapter Listings, as well as navigation on those pages. 
 */


 
$CHAPTER_TEMPLATE['default']['listPages']['caption']				= "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['default']['listPages']['start'] 					= "{CHAPTER_BREADCRUMB}<ul class='page-pages-list'>";
$CHAPTER_TEMPLATE['default']['listPages']['item'] 					= "<li><a href='{CPAGEURL}'>{CPAGETITLE}</a></li>";
$CHAPTER_TEMPLATE['default']['listPages']['end'] 					= "</ul>";	

$CHAPTER_TEMPLATE['default']['listChapters']['caption']				= "{BOOK_NAME}";	
$CHAPTER_TEMPLATE['default']['listChapters']['start']				= "<ul class='page-chapters-list'>";
$CHAPTER_TEMPLATE['default']['listChapters']['item']				= "<li><h4><a href='{CHAPTER_URL}'>{CHAPTER_NAME}</a></h4>{PAGES}";
$CHAPTER_TEMPLATE['default']['listChapters']['end']					= "</ul>";

$CHAPTER_TEMPLATE['default']['listBooks']['start']					= "<ul class='page-chapters-list'>";
$CHAPTER_TEMPLATE['default']['listBooks']['item']					= "<li><h3><a href='{BOOK_URL}'>{BOOK_NAME}</a></h3>{CHAPTERS}";
$CHAPTER_TEMPLATE['default']['listBooks']['end']					= "</ul>";



$CHAPTER_TEMPLATE['nav']['listChapters']['caption']					= "Articles";

$CHAPTER_TEMPLATE['nav']['listChapters']['start'] 					= '<ul class="page-nav">';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item']					= '
																	<li>
																		<a role="button" href="{LINK_URL}" >
																		 {LINK_NAME} 
																		</a> 
																	</li>
																	';
	

$CHAPTER_TEMPLATE['nav']['listChapters']['item_submenu']	 		= '
																	<li>
																		<a role="button" href="{LINK_URL}" >
																		 {LINK_NAME} 
																		</a> 
																		{LINK_SUB}
																	</li>
																	';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_submenu_active']		= '
																	<li class="active">
																		<a role="button"  href="{LINK_URL}">
																		 {LINK_NAME}
																		</a>
																		{LINK_SUB}
																	</li>
																	';	
																	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_active'] 			= '
																	<li class="active">
																		<a crole="button" href="{LINK_URL}">
																		 {LINK_NAME}
																		</a>
																	</li>
																	';	

$CHAPTER_TEMPLATE['nav']['listChapters']['end'] 					= '</ul>';		

	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_start'] 			= '<ul class="page-nav" id="{LINK_IDENTIFIER}" role="menu" >';
	
	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_item'] 			= '
																	<li role="menuitem" >
																		<a href="{LINK_URL}">{LINK_NAME}</a>
																		{LINK_SUB}
																	</li>
																	';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_loweritem']		= '
																		<li role="menuitem" >
																			<a href="{LINK_URL}">{LINK_NAME}</a>
																			{LINK_SUB}
																		</li>
																	';
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_loweritem_active'] = '
																			<li role="menuitem" class="active">
																				<a href="{LINK_URL}">{LINK_NAME}</a>
																				{LINK_SUB}
																			</li>
																		';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_item_active'] 	= '
																			<li role="menuitem" class="active">
																				<a href="{LINK_URL}">{LINK_NAME}</a>
																				{LINK_SUB}
																			</li>
																		';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_end'] 			= '</ul>';	


$CHAPTER_TEMPLATE['nav']['listBooks'] = $CHAPTER_TEMPLATE['nav']['listChapters'];
$CHAPTER_TEMPLATE['nav']['listPages'] = $CHAPTER_TEMPLATE['nav']['listChapters'];
$CHAPTER_TEMPLATE['nav']['showPage'] = $CHAPTER_TEMPLATE['nav']['listChapters'];


// Used by e107_plugins/page/chapter_menu.php & /page.php?bk=x
$CHAPTER_TEMPLATE['panel']['listChapters']['caption']			= "{BOOK_NAME}";
$CHAPTER_TEMPLATE['panel']['listChapters']['start']				= "<div class='chapter-panel-list'>";
$CHAPTER_TEMPLATE['panel']['listChapters']['item']				= "<div class='col-xs-12 col-md-4 text-center'>
																	<h2>{CHAPTER_NAME}</h2>
         															<h1><a href='{CHAPTER_URL}' >{CHAPTER_ICON}</a></h1><p>{CHAPTER_DESCRIPTION}</p><p>{CHAPTER_BUTTON}</p></div>";
$CHAPTER_TEMPLATE['panel']['listChapters']['end']				= "</div>";


$CHAPTER_TEMPLATE['panel']['listPages']['caption']				= "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['panel']['listPages']['start'] 				= "{CHAPTER_BREADCRUMB}<div class='chapter-pages-list'>";
$CHAPTER_TEMPLATE['panel']['listPages']['item'] 				= "<div class='section'><div class='row'>{CPAGEMENU}</div></div>";
$CHAPTER_TEMPLATE['panel']['listPages']['end'] 					= "</div>";	



$CHAPTER_TEMPLATE['portfolio']['listPages']['caption']		= "<h3>{BOOK_NAME}</h3>";
$CHAPTER_TEMPLATE['portfolio']['listPages']['start'] 				= '{SETIMAGE: w=750&h=530&crop=1}     
 <div class="portfolio-centered">
            <div class="recentitems portfolio">' ;
$CHAPTER_TEMPLATE['portfolio']['listPages']['item'] 				= 
'<div class="portfolio-item {CHAPTERSEF}">  
	<div class="he-wrap tpl6">
		{CMENUIMAGE}
		<div class="he-view">
			<div class="bg a0" data-animate="fadeIn">
				<h3 class="a1" data-animate="fadeInDown">{CPAGETITLE}</h3>
				<a data-rel="prettyPhoto" href="{CMENUIMAGE=url}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
				<a href="{CPAGELINK=href}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
			</div><!-- he bg -->
		</div><!-- he view -->		
	</div><!-- he wrap -->
</div><!-- end col-12 -->';
$CHAPTER_TEMPLATE['portfolio']['listPages']['end'] 					= "
	</div>
</div>";
 

$CHAPTER_TEMPLATE['portfolio']['listItems']['caption']		= '
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-xs-center">
                    <h2 class="section-heading">{BOOK_NAME}</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>            
';
 
$CHAPTER_TEMPLATE['portfolio']['listItems']['start'] 				= '{SETIMAGE: w=750&h=530&crop=1}     
<div class="row">' ;
$CHAPTER_TEMPLATE['portfolio']['listItems']['item'] 				= '
                <div class="col-md-4 col-sm-6 portfolio-item {CHAPTERSEF}">
                    <a href="#portfolio-{CPAGEID}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{CMENUIMAGE=url}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{CMENUTITLE}</h4>
                        <p class="text-muted">{CHAPTER_NAME}</p>
                    </div>
                </div>';
 
$CHAPTER_TEMPLATE['portfolio']['listItems']['end'] 					= "
            </div>
        </div>
    </section>
";	

$CHAPTER_TEMPLATE['modalportfolio']['listItems']['caption']		= '
           
';
 
$CHAPTER_TEMPLATE['modalportfolio']['listItems']['start'] 				= '    
' ;
$CHAPTER_TEMPLATE['modalportfolio']['listItems']['item'] 				= '
{SETIMAGE: w=750&h=530&crop=1} 
    <div class="portfolio-modal modal fade" id="portfolio-{CPAGEID}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>{CPAGETITLE}</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="{CMENUIMAGE=url}" alt="">
                                <p> {CPAGEBODY}</p>
                                    <ul class="list-inline">
                                    <li>Date: {CPAGEDATE=short}</li>
                                    <li>Client: {CMENUTITLE}</li>
                                    <li>Category: {CHAPTER_NAME}</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
 
$CHAPTER_TEMPLATE['modalportfolio']['listItems']['end'] 					= "
  
";

?>