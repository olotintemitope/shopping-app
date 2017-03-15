<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="css/vendor/magnific-popup.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- favicon -->
        <link rel="icon" href="favicon.ico">
        <title>Emerald Dragon | Dashboard</title>
    </head>
    <body>
        <!-- FORM POPUP -->
        <div id="new-message-popup" class="form-popup new-message mfp-hide">
            <!-- FORM POPUP CONTENT -->
            <div class="form-popup-content">
                <h4 class="popup-title">Write a New Message</h4>
                <!-- LINE SEPARATOR -->
                <hr class="line-separator">
                <!-- /LINE SEPARATOR -->
                <form class="new-message-form">
                    <!-- INPUT CONTAINER -->
                    <div class="input-container field-add">
                        <label for="mailto" class="rl-label b-label required">To:</label>
                        <label for="mailto" class="select-block">
                            <select name="mailto" id="mailto">
                                <option value="0">Select from the authors you follow...</option>
                                <option value="1">Vynil Brush</option>
                                <option value="2">Jenny_Block</option>
                            </select>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </label>
                        <div class="button dark-light add-field">
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                        </div>
                    </div>
                    <!-- /INPUT CONTAINER -->
                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="subject" class="rl-label b-label">Subject:</label>
                        <input type="text" id="subject" name="subject" placeholder="Enter your subject here...">
                    </div>
                    <!-- INPUT CONTAINER -->
                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="message" class="rl-label b-label required">Your Message:</label>
                        <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                    </div>
                    <!-- INPUT CONTAINER -->
                    <button class="button mid dark">Send <span class="primary">Message</span></button>
                </form>
            </div>
            <!-- /FORM POPUP CONTENT -->
        </div>
        <!-- /FORM POPUP -->
        <!-- SIDE MENU -->
        @include('partial.dashboard.header')
        </div>
        <!-- /SIDE MENU -->
        <!-- DASHBOARD BODY -->
        <div class="dashboard-body">
            <!-- DASHBOARD HEADER -->
            <div class="dashboard-header retracted">
                <!-- DB CLOSE BUTTON -->
                <a href="index.html" class="db-close-button">
                    <img src="images/dashboard/back-icon.png" alt="back-icon">
                </a>
                <!-- DB CLOSE BUTTON -->
                <!-- DB OPTIONS BUTTON -->
                <div class="db-options-button">
                    <img src="images/dashboard/db-list-right.png" alt="db-list-right">
                    <img src="images/dashboard/close-icon.png" alt="close-icon">
                </div>
                <!-- DB OPTIONS BUTTON -->
                <!-- DASHBOARD HEADER ITEM -->
                <div class="dashboard-header-item title">
                    <!-- DB SIDE MENU HANDLER -->
                    <div class="db-side-menu-handler">
                        <img src="images/dashboard/db-list-left.png" alt="db-list-left">
                    </div>
                    <!-- /DB SIDE MENU HANDLER -->
                    <h6>Your Dashboard</h6>
                </div>
                <!-- /DASHBOARD HEADER ITEM -->
                <!-- DASHBOARD HEADER ITEM -->
                <div class="dashboard-header-item form">
                    <form class="dashboard-search">
                        <input type="text" name="search" id="search_dashboard" placeholder="Search on dashboard...">
                        <input type="image" src="images/dashboard/search-icon.png" alt="search-icon">
                    </form>
                </div>
                <!-- /DASHBOARD HEADER ITEM -->
                <!-- DASHBOARD HEADER ITEM -->
                <div class="dashboard-header-item stats">
                    <!-- STATS META -->
                    <div class="stats-meta">
                        <div class="pie-chart pie-chart1">
                            <!-- SVG PLUS -->
                            <svg class="svg-plus primary">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                        </div>
                        <h6>64.579</h6>
                        <p>New Original Visits</p>
                    </div>
                    <!-- /STATS META -->
                </div>
                <!-- /DASHBOARD HEADER ITEM -->
                <!-- DASHBOARD HEADER ITEM -->
                <div class="dashboard-header-item stats">
                    <!-- STATS META -->
                    <div class="stats-meta">
                        <div class="pie-chart pie-chart2">
                            <!-- SVG PLUS -->
                            <svg class="svg-minus tertiary">
                                <use xlink:href="#svg-minus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                        </div>
                        <h6>20.8</h6>
                        <p>Less Sales Than Last Month</p>
                    </div>
                    <!-- /STATS META -->
                </div>
                <!-- /DASHBOARD HEADER ITEM -->
                <!-- DASHBOARD HEADER ITEM -->
                <div class="dashboard-header-item stats">
                    <!-- STATS META -->
                    <div class="stats-meta">
                        <div class="pie-chart pie-chart3">
                            <!-- SVG PLUS -->
                            <svg class="svg-plus primary">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                        </div>
                        <h6>322k</h6>
                        <p>Total Visits This Month</p>
                    </div>
                    <!-- /STATS META -->
                </div>
                <!-- /DASHBOARD HEADER ITEM -->
                <!-- DASHBOARD HEADER ITEM -->
                <div class="dashboard-header-item back-button">
                    <a href="index.html" class="button mid dark-light">Back to Homepage</a>
                </div>
                <!-- /DASHBOARD HEADER ITEM -->
            </div>
            <!-- DASHBOARD HEADER -->
            <!-- DASHBOARD CONTENT -->
            <div class="dashboard-content">
                <!-- HEADLINE -->
                <div class="headline buttons two primary">
                    <h4>Your Inbox (36)</h4>
                    <a href="#new-message-popup" class="button mid-short secondary open-new-message">New Message</a>
                    <a href="#" class="button mid-short primary">Delete Selected</a>
                </div>
                <!-- /HEADLINE -->
                <!-- INBOX MESSAGES PREVIEW -->
                <div class="inbox-messages-preview">
                    <!-- INBOX MESSAGES -->
                    <div class="inbox-messages">
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg1" name="msg1">
                                <label for="msg1" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="hidden" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="visible" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_06.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    Sarah-Imaginarium
                                    <span class="message-icon icon-envelope secondary"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header">Product Question</p>
                                    <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope secondary"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>May 18th, 2014</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg2" name="msg2" checked>
                                <label for="msg2" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_04.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    Red Thunder Graphics
                                    <span class="message-icon icon-envelope-open"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header normal">Support Inquiry</p>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope-open"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>May 5th, 2014</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg3" name="msg3">
                                <label for="msg3" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_07.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    Twisted Themes
                                    <span class="message-icon icon-envelope secondary"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header">Collaboration</p>
                                    <p class="description">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope secondary"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>Feb 24th, 2014</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg4" name="msg4">
                                <label for="msg4" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_08.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    GregSpiegel1820
                                    <span class="message-icon icon-action-undo"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header normal">How to Install the Theme</p>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-action-undo"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>Jan 3rd, 2014</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg5" name="msg5">
                                <label for="msg5" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="hidden" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="visible" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_02.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    MeganV.
                                    <span class="message-icon icon-envelope-open"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header normal">Product Question</p>
                                    <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope-open"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>Dec 17th, 2013</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg6" name="msg6" checked>
                                <label for="msg6" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_03.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    Thomas_Ket
                                    <span class="message-icon icon-envelope-open"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header normal">Support Inquiry</p>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope-open"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>Dec 8th, 2013</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg7" name="msg7" checked>
                                <label for="msg7" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_06.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    Sarah-Imaginarium
                                    <span class="message-icon icon-envelope-open"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header normal">Feedback About Changes</p>
                                    <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope-open"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>Oct 12th, 2013</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                        <!-- INBOX MESSAGE -->
                        <div class="inbox-message v2">
                            <div class="inbox-message-actions">
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="msg8" name="msg8">
                                <label for="msg8" class="label-check">
                                    <span class="checkbox primary"><span></span></span>
                                </label>
                                <!-- /CHECKBOX -->
                                <!-- STARRED -->
                                <div class="starred">
                                    <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                                    <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                                </div>
                                <!-- /STARRED -->
                            </div>
                            
                            <div class="inbox-message-author">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_05.jpg" alt="user-img">
                                </figure>
                                <p class="text-header">
                                    DaBebop
                                    <span class="message-icon icon-envelope-open"></span>
                                </p>
                            </div>
                            <a href="dashboard-openmessage.html">
                                <div class="inbox-message-content">
                                    <p class="text-header normal">Miniverse Mockup Inquiry</p>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                            </a>
                            <div class="inbox-message-type">
                                <span class="message-icon icon-envelope-open"></span>
                            </div>
                            <div class="inbox-message-date">
                                <p>May 24th, 2013</p>
                            </div>
                        </div>
                        <!-- INBOX MESSAGE -->
                    </div>
                    <!-- /INBOX MESSAGES -->
                    <!-- INBOX MESSAGE PREVIEW -->
                    <div class="inbox-message-preview">
                        <div class="inbox-message-preview-header">
                            <p class="text-header">
                                Product Question
                                <img src="images/dashboard/star-filled.png" alt="star-icon">
                            </p>
                            <a href="#" class="report">Report this Conversation</a>
                        </div>
                        <div class="inbox-message-preview-body">
                            <!-- MESSAGE PREVIEW -->
                            <div class="message-preview">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_06.jpg" alt="user-avatar">
                                </figure>
                                <p class="text-header">Sarah-Imaginarium</p>
                                <p class="timestamp">May 19th, 2014 - 3:47PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                            <!-- /MESSAGE PREVIEW -->
                            <!-- MESSAGE PREVIEW -->
                            <div class="message-preview">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_01.jpg" alt="user-avatar">
                                </figure>
                                <p class="text-header">Johnny Fisher</p>
                                <p class="timestamp">May 19th, 2014 - 5:32PM</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem derum accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                            </div>
                            <!-- /MESSAGE PREVIEW -->
                            <!-- MESSAGE PREVIEW -->
                            <div class="message-preview">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_06.jpg" alt="user-avatar">
                                </figure>
                                <p class="text-header">Sarah-Imaginarium</p>
                                <p class="timestamp">May 19th, 2014 - 10:06PM</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <!-- /MESSAGE PREVIEW -->
                            <!-- MESSAGE PREVIEW -->
                            <div class="message-preview">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_01.jpg" alt="user-avatar">
                                </figure>
                                <p class="text-header">Johnny Fisher</p>
                                <p class="timestamp">May 19th, 2014 - 5:32PM</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem derum accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                            </div>
                            <!-- /MESSAGE PREVIEW -->
                            <!-- MESSAGE PREVIEW -->
                            <div class="message-preview">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_06.jpg" alt="user-avatar">
                                </figure>
                                <p class="text-header">Sarah-Imaginarium</p>
                                <p class="timestamp">May 19th, 2014 - 10:06PM</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <!-- /MESSAGE PREVIEW -->
                        </div>
                        <form class="inbox-reply-form">
                            <input type="text" id="reply" name="reply" placeholder="Write your message here...">
                            <button class="button secondary">Send Message</button>
                        </form>
                    </div>
                    <!-- /INBOX MESSAGE PREVIEW -->
                </div>
                <!-- /INBOX MESSAGES PREVIEW -->
            </div>
            <!-- DASHBOARD CONTENT -->
        </div>
        <!-- /DASHBOARD BODY -->
        <div class="shadow-film closed"></div>
        <!-- SVG ARROW -->
        <svg style="display: none;">
            <symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
            <path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
                L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
                </symbol>
            </svg>
            <!-- /SVG ARROW -->
            <!-- SVG PLUS -->
            <svg style="display: none;">
                <symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
                <rect x="5" width="3" height="13"/>
                <rect y="5" width="13" height="3"/>
                </symbol>
            </svg>
            <!-- /SVG PLUS -->
            <!-- SVG MINUS -->
            <svg style="display: none;">
                <symbol id="svg-minus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
                <rect y="5" width="13" height="3"/>
                </symbol>
            </svg>
            <!-- /SVG MINUS -->
            <!-- jQuery -->
            <script src="js/vendor/jquery-3.1.0.min.js"></script>
            <!-- Magnific Popup -->
            <script src="js/vendor/jquery.magnific-popup.min.js"></script>
            <!-- XM Pie Chart -->
            <script src="js/vendor/jquery.xmpiechart.min.js"></script>
            <!-- Side Menu -->
            <script src="js/side-menu.js"></script>
            <!-- Dashboard Header -->
            <script src="js/dashboard-header.js"></script>
            <!-- Dashboard Inbox -->
            <script src="js/dashboard-inbox.js"></script>
        </body>
    </html>