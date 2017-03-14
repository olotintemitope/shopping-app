@extends('app')
@section('body')
<!-- SECTION -->
<div class="section-wrap">
	<div class="section">
		<!-- SIDEBAR -->
		<div class="sidebar right">
			<!-- SIDEBAR ITEM -->
			<div class="sidebar-item void buttons">
				<a href="#" class="button big dark purchase">
					<span class="currency">199</span>
					<span>Purchase Now!</span>
				</a>
				<a href="#" class="button big tertiary wcart">
					<span class="icon-present"></span>
					Add to the Cart
				</a>
				<a href="#" class="button big secondary wfav">
					<span class="icon-heart"></span>
					<span class="fav-count">652</span>
					Add to Favourites
				</a>
			</div>
			<!-- /SIDEBAR ITEM -->
			<!-- SIDEBAR ITEM -->
			<div class="sidebar-item author-bio">
				<h4>Product Seller</h4>
				<hr class="line-separator">
				<!-- USER AVATAR -->
				<a href="user-profile.html" class="user-avatar-wrap medium">
					<figure class="user-avatar medium">
						<img src="images/avatars/avatar_17.jpg" alt="">
					</figure>
				</a>
				<!-- /USER AVATAR -->
				<p class="text-header">Kratos Cave</p>
				<p class="text-oneline">Lorem ipsum dolor sit amet,<br>consectetur sicing elit.</p>
				<!-- SHARE LINKS -->
				<ul class="share-links">
					<li><a href="#" class="fb"></a></li>
					<li><a href="#" class="twt"></a></li>
					<li><a href="#" class="db"></a></li>
				</ul>
				<!-- /SHARE LINKS -->
				<a href="#" class="button mid dark spaced">Go to Profile Page</a>
				<a href="#" class="button mid dark-light">Send a Private Message</a>
			</div>
			<!-- /SIDEBAR ITEM -->
			<!-- SIDEBAR ITEM -->
			<div class="sidebar-item product-info">
				<h4>Product Information</h4>
				<hr class="line-separator">
				<!-- INFORMATION LAYOUT -->
				<div class="information-layout">
					<!-- INFORMATION LAYOUT ITEM -->
					<div class="information-layout-item">
						<p class="text-header">Upload Date:</p>
						<p>August 18th, 2015</p>
					</div>
					<!-- /INFORMATION LAYOUT ITEM -->
					<!-- INFORMATION LAYOUT ITEM -->
					<div class="information-layout-item">
						<p class="text-header">Item Condition:</p>
						<p>New</p>
					</div>
					<!-- /INFORMATION LAYOUT ITEM -->
					<!-- INFORMATION LAYOUT ITEM -->
					<div class="information-layout-item">
						<p class="text-header">Author's Country:</p>
						<p>United States</p>
					</div>
					<!-- /INFORMATION LAYOUT ITEM -->
					<!-- INFORMATION LAYOUT ITEM -->
					<div class="information-layout-item">
						<p class="text-header">International Shipping:</p>
						<p>Free - Except USA</p>
					</div>
					<!-- /INFORMATION LAYOUT ITEM -->
					<!-- INFORMATION LAYOUT ITEM -->
					<div class="information-layout-item">
						<p class="text-header">Returns:</p>
						<p>No Returns Accepted</p>
					</div>
					<!-- /INFORMATION LAYOUT ITEM -->
				</div>
				<!-- INFORMATION LAYOUT -->
			</div>
			<!-- /SIDEBAR ITEM -->
			<!-- SIDEBAR ITEM -->
			<div class="sidebar-item author-reputation full">
				<h4>Author's Reputation</h4>
				<hr class="line-separator">
				<!-- PIE CHART -->
				<div class="pie-chart pie-chart1">
					<p class="text-header percent">24<span>%</span></p>
					<p class="text-header percent-info">Recommended</p>
					<!-- RATING -->
					<ul class="rating">
						<li class="rating-item">
							<!-- SVG STAR -->
							<svg class="svg-star">
								<use xlink:href="#svg-star"></use>
							</svg>
							<!-- /SVG STAR -->
						</li>
						<li class="rating-item empty">
							<!-- SVG STAR -->
							<svg class="svg-star">
								<use xlink:href="#svg-star"></use>
							</svg>
							<!-- /SVG STAR -->
						</li>
						<li class="rating-item empty">
							<!-- SVG STAR -->
							<svg class="svg-star">
								<use xlink:href="#svg-star"></use>
							</svg>
							<!-- /SVG STAR -->
						</li>
						<li class="rating-item empty">
							<!-- SVG STAR -->
							<svg class="svg-star">
								<use xlink:href="#svg-star"></use>
							</svg>
							<!-- /SVG STAR -->
						</li>
						<li class="rating-item empty">
							<!-- SVG STAR -->
							<svg class="svg-star">
								<use xlink:href="#svg-star"></use>
							</svg>
							<!-- /SVG STAR -->
						</li>
					</ul>
					<!-- /RATING -->
				</div>
				<!-- /PIE CHART -->
				<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
			</div>
			<!-- /SIDEBAR ITEM -->
			<!-- SIDEBAR ITEM -->
			<div class="sidebar-item author-items">
				<h4>More Seller's Items</h4>
				<!-- PRODUCT LIST -->
				<div class="product-list grid column4-wrap">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="images/items/joystick_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->
							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->
						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">PX4 Crimson Joystick (Used)</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category tertiary">Accesories</p>
							</a>
							<p class="price"><span>$</span>80</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">
						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="images/avatars/avatar_17.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Kratos Cave</p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->
				<div class="clearfix"></div>
			</div>
			<!-- /SIDEBAR ITEM -->
		</div>
		<!-- /SIDEBAR -->
		<!-- CONTENT -->
		<div class="content left">
			<!-- POST -->
			<article class="post">
				<!-- POST IMAGE -->
				<div class="post-image">
					<figure class="product-preview-image large liquid">
						<img src="images/items/funtendo_b01.jpg" alt="">
					</figure>
					<!-- IMAGE OVERLAY -->
					<div class="image-overlay img-gallery">
						<div class="clickable-icon tertiary">
							<!-- SVG PLUS -->
							<svg class="svg-plus">
								<use xlink:href="#svg-plus"></use>
							</svg>
							<!-- /SVG PLUS -->
						</div>
						<!-- GALLERY ITEMS -->
						<div class="gallery-items">
							<span data-mfp-src="images/items/funtendo_b01.jpg"></span>
						</div>
						<!-- /GALLERY ITEMS -->
					</div>
					<!-- /IMAGE OVERLAY -->
				</div>
				<!-- /POST IMAGE -->
				<!-- POST CONTENT -->
				<div class="post-content">
					<!-- POST PARAGRAPH -->
					<div class="post-paragraph">
						<h3 class="post-title">Discover the New Funtendo!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<!-- /POST PARAGRAPH -->
					<!-- POST PARAGRAPH -->
					<div class="post-paragraph">
						<h3 class="post-title small">Colors Available:</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
					</div>
					<!-- /POST PARAGRAPH -->
					<a href="#">
						<figure class="post-banner liquid">
							<img src="images/items/shop_ad.jpg" alt="">
						</figure>
					</a>
				</div>
				<!-- /POST CONTENT -->
				<hr class="line-separator">
				<!-- SHARE -->
				<div class="share-links-wrap">
					<p class="text-header small">Share this:</p>
					<!-- SHARE LINKS -->
					<ul class="share-links hoverable">
						<li><a href="#" class="fb"></a></li>
						<li><a href="#" class="twt"></a></li>
						<li><a href="#" class="db"></a></li>
						<li><a href="#" class="rss"></a></li>
						<li><a href="#" class="gplus"></a></li>
					</ul>
					<!-- /SHARE LINKS -->
				</div>
				<!-- /SHARE -->
			</article>
			<!-- /POST -->
			<!-- POST TAB -->
			<div class="post-tab">
				<!-- TAB HEADER -->
				<div class="tab-header tertiary">
					<!-- TAB ITEM -->
					<div class="tab-item selected">
						<p class="text-header">Comments (35)</p>
					</div>
					<!-- /TAB ITEM -->
					<!-- TAB ITEM -->
					<div class="tab-item">
						<p class="text-header">Buyers Corner</p>
					</div>
					<!-- /TAB ITEM -->
					<!-- TAB ITEM -->
					<div class="tab-item">
						<p class="text-header">Item FAQs</p>
					</div>
					<!-- /TAB ITEM -->
				</div>
				<!-- /TAB HEADER -->
				<!-- TAB CONTENT -->
				<div class="tab-content void">
					<!-- COMMENTS -->
					<div class="comment-list">
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_06.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">View as Customer</p>
								<!-- PIN -->
								<span class="pin greyed">Purchased</span>
								<!-- /PIN -->
								<p class="timestamp">5 Hours Ago</p>
								<a href="#" class="report">Report</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
						</div>
						<!-- /COMMENT -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_11.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">View as Author (Reply Option)</p>
								<p class="timestamp">8 Hours Ago</p>
								<a href="#" class="report">Report</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
						</div>
						<!-- /COMMENT -->
						<!-- COMMENT REPLY -->
						<div class="comment-wrap comment-reply">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_09.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<!-- COMMENT REPLY FORM -->
							<form class="comment-reply-form">
								<textarea name="treply1" placeholder="Write your comment here..."></textarea>
								<!-- CHECKBOX -->
								<input type="checkbox" id="notif1" name="notif1" checked>
								<label for="notif1">
									<span class="checkbox tertiary"><span></span></span>
									Receive email notifications
								</label>
								<!-- /CHECKBOX -->
								<button class="button tertiary">Post Comment</button>
							</form>
							<!-- /COMMENT REPLY FORM -->
						</div>
						<!-- /COMMENT REPLY -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_12.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">View as Author (Replies)</p>
								<p class="timestamp">10 Hours Ago</p>
								<a href="#" class="report">Report</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_09.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Odin_Design</p>
									<!-- PIN -->
									<span class="pin">Author</span>
									<!-- /PIN -->
									<p class="timestamp">2 Hours Ago</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>
							</div>
							<!-- /COMMENT -->
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_12.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Customer Reply</p>
									<p class="timestamp">2 Hours Ago</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit</p>
								</div>
							</div>
							<!-- /COMMENT -->
							<!-- COMMENT REPLY -->
							<div class="comment-wrap comment-reply">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_09.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<!-- COMMENT REPLY FORM -->
								<form class="comment-reply-form">
									<textarea name="treply2" placeholder="Write your comment here..."></textarea>
									<!-- CHECKBOX -->
									<input type="checkbox" id="notif2" name="notif2" checked>
									<label for="notif2">
										<span class="checkbox tertiary"><span></span></span>
										Receive email notifications
									</label>
									<!-- /CHECKBOX -->
									<button class="button tertiary">Post Comment</button>
								</form>
								<!-- /COMMENT REPLY FORM -->
							</div>
							<!-- /COMMENT REPLY -->
						</div>
						<!-- /COMMENT -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_03.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">View as Customer</p>
								<p class="timestamp">6 Days Ago</p>
								<a href="#" class="report">Report</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
							</div>
						</div>
						<!-- /COMMENT -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- PAGER -->
						<div class="pager tertiary">
							<div class="pager-item"><p>1</p></div>
							<div class="pager-item active"><p>2</p></div>
							<div class="pager-item"><p>3</p></div>
							<div class="pager-item"><p>...</p></div>
							<div class="pager-item"><p>17</p></div>
						</div>
						<!-- /PAGER -->
						<div class="clearfix"></div>
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<h3>Leave a Comment</h3>
						<!-- COMMENT REPLY -->
						<div class="comment-wrap comment-reply">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_09.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<!-- COMMENT REPLY FORM -->
							<form class="comment-reply-form">
								<textarea name="treply1" placeholder="Write your comment here..."></textarea>
								<button class="button tertiary">Post Comment</button>
							</form>
							<!-- /COMMENT REPLY FORM -->
						</div>
						<!-- /COMMENT REPLY -->
					</div>
					<!-- /COMMENTS -->
				</div>
				<!-- /TAB CONTENT -->
				<!-- TAB CONTENT -->
				<div class="tab-content void">
					<!-- COMMENTS -->
					<div class="comment-list">
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_02.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">MeganV.</p>
								<!-- PIN -->
								<span class="pin greyed">Purchased</span>
								<!-- /PIN -->
								<p class="timestamp">5 Hours Ago</p>
								<a href="#" class="report">Report</a>
								<p>I’ve recently bought your theme and let me say it’s fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
							</div>
						</div>
						<!-- /COMMENT -->
						<!-- COMMENT REPLY -->
						<div class="comment-wrap comment-reply">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_09.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<!-- COMMENT REPLY FORM -->
							<form class="comment-reply-form">
								<textarea name="treply10" placeholder="Write your comment here..."></textarea>
								<!-- CHECKBOX -->
								<input type="checkbox" id="notif10" name="notif10" checked>
								<label for="notif10">
									<span class="checkbox tertiary"><span></span></span>
									Receive email notifications
								</label>
								<!-- /CHECKBOX -->
								<button class="button tertiary">Post Comment</button>
							</form>
							<!-- /COMMENT REPLY FORM -->
						</div>
						<!-- /COMMENT REPLY -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_19.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">Cloud Templates</p>
								<!-- PIN -->
								<span class="pin greyed">Purchased</span>
								<!-- /PIN -->
								<p class="timestamp">8 Hours Ago</p>
								<a href="#" class="report">Report</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
						</div>
						<!-- /COMMENT -->
						<!-- COMMENT REPLY -->
						<div class="comment-wrap comment-reply">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_09.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<!-- COMMENT REPLY FORM -->
							<form class="comment-reply-form">
								<textarea name="treply20" placeholder="Write your comment here..."></textarea>
								<!-- CHECKBOX -->
								<input type="checkbox" id="notif20" name="notif20" checked>
								<label for="notif20">
									<span class="checkbox tertiary"><span></span></span>
									Receive email notifications
								</label>
								<!-- /CHECKBOX -->
								<button class="button tertiary">Post Comment</button>
							</form>
							<!-- /COMMENT REPLY FORM -->
						</div>
						<!-- /COMMENT REPLY -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- COMMENT -->
						<div class="comment-wrap">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_18.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<div class="comment">
								<p class="text-header">Lucy Diamond</p>
								<!-- PIN -->
								<span class="pin greyed">Purchased</span>
								<!-- /PIN -->
								<p class="timestamp">10 Hours Ago</p>
								<a href="#" class="report">Report</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_09.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Odin_Design</p>
									<!-- PIN -->
									<span class="pin">Author</span>
									<!-- /PIN -->
									<p class="timestamp">2 Hours Ago</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								</div>
							</div>
							<!-- /COMMENT -->
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_18.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Lucy Diamond</p>
									<!-- PIN -->
									<span class="pin greyed">Purchased</span>
									<!-- /PIN -->
									<p class="timestamp">2 Hours Ago</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit.</p>
								</div>
							</div>
							<!-- /COMMENT -->
							<!-- COMMENT REPLY -->
							<div class="comment-wrap comment-reply">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="images/avatars/avatar_09.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<!-- COMMENT REPLY FORM -->
								<form class="comment-reply-form">
									<textarea name="treply30" placeholder="Write your comment here..."></textarea>
									<!-- CHECKBOX -->
									<input type="checkbox" id="notif30" name="notif30" checked>
									<label for="notif30">
										<span class="checkbox tertiary"><span></span></span>
										Receive email notifications
									</label>
									<!-- /CHECKBOX -->
									<button class="button tertiary">Post Comment</button>
								</form>
								<!-- /COMMENT REPLY FORM -->
							</div>
							<!-- /COMMENT REPLY -->
						</div>
						<!-- /COMMENT -->
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<!-- PAGER -->
						<div class="pager tertiary">
							<div class="pager-item"><p>1</p></div>
							<div class="pager-item active"><p>2</p></div>
							<div class="pager-item"><p>3</p></div>
							<div class="pager-item"><p>...</p></div>
							<div class="pager-item"><p>17</p></div>
						</div>
						<!-- /PAGER -->
						<div class="clearfix"></div>
						<!-- LINE SEPARATOR -->
						<hr class="line-separator">
						<!-- /LINE SEPARATOR -->
						<h3>Leave a Comment</h3>
						<!-- COMMENT REPLY -->
						<div class="comment-wrap comment-reply">
							<!-- USER AVATAR -->
							<a href="user-profile.html">
								<figure class="user-avatar medium">
									<img src="images/avatars/avatar_09.jpg" alt="">
								</figure>
							</a>
							<!-- /USER AVATAR -->
							<!-- COMMENT REPLY FORM -->
							<form class="comment-reply-form">
								<textarea name="treply100" placeholder="Write your comment here..."></textarea>
								<button class="button tertiary">Post Comment</button>
							</form>
							<!-- /COMMENT REPLY FORM -->
						</div>
						<!-- /COMMENT REPLY -->
					</div>
					<!-- /COMMENTS -->
				</div>
				<!-- /TAB CONTENT -->
				<!-- TAB CONTENT -->
				<div class="tab-content">
					<!-- ITEM-FAQ -->
					<div class="accordion item-faq tertiary">
						<!-- ACCORDION ITEM -->
						<div class="accordion-item">
							<h6 class="accordion-item-header">Read Before Buying</h6>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
							<div class="accordion-item-content">
								<h4>Bidding for the First Time</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								<h4>Winning the Auction</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							</div>
						</div>
						<!-- /ACCORDION ITEM -->
						<!-- ACCORDION ITEM -->
						<div class="accordion-item">
							<h6 class="accordion-item-header">How Does Bidding Work?</h6>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
							<div class="accordion-item-content">
								<h4>Bidding for the First Time</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								<h4>Winning the Auction</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							</div>
						</div>
						<!-- /ACCORDION ITEM -->
						<!-- ACCORDION ITEM -->
						<div class="accordion-item">
							<h6 class="accordion-item-header">Our Return Policy</h6>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
							<div class="accordion-item-content">
								<h4>Bidding for the First Time</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								<h4>Winning the Auction</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							</div>
						</div>
						<!-- /ACCORDION ITEM -->
						<!-- ACCORDION ITEM -->
						<div class="accordion-item">
							<h6 class="accordion-item-header">Shipping and Delivery</h6>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
							<div class="accordion-item-content">
								<h4>Bidding for the First Time</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								<h4>Winning the Auction</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							</div>
						</div>
						<!-- /ACCORDION ITEM -->
						<!-- ACCORDION ITEM -->
						<div class="accordion-item">
							<h6 class="accordion-item-header">Quality Guarantee</h6>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
							<div class="accordion-item-content">
								<h4>Bidding for the First Time</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								<h4>Winning the Auction</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							</div>
						</div>
						<!-- /ACCORDION ITEM -->
					</div>
					<!-- /ITEM-FAQ -->
				</div>
				<!-- /TAB CONTENT -->
			</div>
			<!-- /POST TAB -->
		</div>
		<!-- CONTENT -->
	</div>
</div>
<!-- /SECTION -->
<!-- SECTION HEADLINE -->
<div class="section-headline-wrap v2">
	<div class="section-headline">
		<h2>New Nintendo 3XHD Black</h2>
		<p>Home<span class="separator">/</span>Products<span class="separator">/</span><span class="current-section">Hardware</span></p>
	</div>
</div>
@endsection