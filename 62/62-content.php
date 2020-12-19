<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-62">
    <div class="btn-header">
        <div><button class="button-header1"><span><i class="fa fa-circle-o"></i></span>RELATED</button></div>
        <div><button class="button-header2"><span><i class="fa fa-shopping-cart"></i></span>BUY NOW</button></div>
    </div>  
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <header class="header-wave1"> 
                <div class="navbar-custom d-flex align-items-center">
                    <h1 class="logo mr-auto"><img src="./images/logo.png" alt="Logo"></h1>
                    <h1 class="logo2 mr-auto"><img src="./images/logo2.png" alt="Logo"></h1>
                    <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="drop-down active">
                            <a href="#"> <img src="./images/icon.png" alt="Icon"> Home</a>
                            <ul class="ul-icon">
                                <li><a href="#">Surfing Home</a></li>
                                <li class="active"><a href="#">Shop Home</a></li>
                                <li><a href="#">Yatching Home</a></li>
                                <li><a href="#">Caneoing Home</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Crew</a></li>
                                <li class="drop-down">
                                    <a href="#">Our Service</a>
                                    <ul>
                                        <li><a href="#">Service List</a></li>
                                        <li><a href="#">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">404 Error Page</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Events</a>
                            <ul>
                                <li><a href="#">Event List</a></li>
                                <li><a href="#">Event Single</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Shop</a>
                            <ul>
                                <li><a href="#">Product List</a></li>
                                <li><a href="#">Product Single</a></li>
                                <li class="drop-down">
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="drop-down">
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="#">3 Columns</a></li>
                                        <li><a href="#">4 Columns</a></li>
                                        <li><a href="#">Full Width</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">No Sidebar</a></li>
                                <li><a href="#">Mansory</a></li>
                                <li class="drop-down">
                                <a href="#">Single Types</a>
                                <ul>
                                    <li><a href="#">Standart Post</a></li>
                                    <li><a href="#">No Sidebar Post</a></li>
                                    <li><a href="#">Gallery Post</a></li>
                                    <li><a href="#">Quote Post</a></li>
                                    <li><a href="#">Link Post</a></li>
                                    <li><a href="#">Audio Post</a></li>
                                    <li><a href="#">Video Post</a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#contact">Landing</a></li>
                    </ul>
                    </nav>
                    <div class="nav-items">
                       <button>BOOK TODAY</button>
                    </div>
                </div>
                <div class="container margin-calendar">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img-canoeing">
                                <img src="./images/canoeing.png" alt="Caneoing">
                            </div>
                        </div>
                        <div class="col-lg-6 calender-col">
                            <div class="calendar">
                                <div class="month">
                                    <h5>DECEMBER 2020</h5>
                                </div>
                                <table id="table-calendar1">
                                    <tr>
                                        <th>mon</th>
                                        <th>tue</th>
                                        <th>wed</th>
                                        <th>thur</th>
                                        <th>fri</th>
                                        <th>sat</th>
                                        <th>sun</th>
                                    </tr>
                                    <tr>
                                        <td tabindex="31" class="non-active">31</td>
                                        <td tabindex="1" class="active-calendar">1</td>
                                        <td tabindex="2">2</td>
                                        <td tabindex="3">3</td>
                                        <td tabindex="4">4</td>
                                        <td tabindex="5">5</td>
                                        <td tabindex="6">6</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="7">7</td>
                                        <td tabindex="8">8</td>
                                        <td tabindex="9">9</td>
                                        <td tabindex="10">10</td>
                                        <td tabindex="11">11</td>
                                        <td tabindex="12">12</td>
                                        <td tabindex="13">13</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="14">14</td>
                                        <td tabindex="15">15</td>
                                        <td tabindex="16">16</td>
                                        <td tabindex="17">17</td>
                                        <td tabindex="18">18</td>
                                        <td tabindex="19">19</td>
                                        <td tabindex="20">20</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="21">21</td>
                                        <td tabindex="22">22</td>
                                        <td tabindex="23">23</td>
                                        <td tabindex="24">24</td>
                                        <td tabindex="25">25</td>
                                        <td tabindex="26">26</td>
                                        <td tabindex="27">27</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="28">28</td>
                                        <td tabindex="29">29</td>
                                        <td tabindex="30">30</td>
                                        <td tabindex="101" class="non-active">1</td>
                                        <td tabindex="102" class="non-active">2</td>
                                        <td tabindex="103" class="non-active">3</td>
                                        <td tabindex="104" class="non-active">4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
        </header>
        </div>
        <div class="swiper-slide">
            <header class="header-wave2">     
            <div class="navbar-custom d-flex align-items-center">
                    <h1 class="logo mr-auto"><img src="./images/logo.png" alt="Logo"></h1>
                    <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="drop-down active">
                            <a href="#"> <img src="./images/icon.png" alt="Icon"> Home</a>
                            <ul class="ul-icon">
                                <li><a href="#">Surfing Home</a></li>
                                <li class="active"><a href="#">Shop Home</a></li>
                                <li><a href="#">Yatching Home</a></li>
                                <li><a href="#">Caneoing Home</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Crew</a></li>
                                <li class="drop-down">
                                    <a href="#">Our Service</a>
                                    <ul>
                                        <li><a href="#">Service List</a></li>
                                        <li><a href="#">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">404 Error Page</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Events</a>
                            <ul>
                                <li><a href="#">Event List</a></li>
                                <li><a href="#">Event Single</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Shop</a>
                            <ul>
                                <li><a href="#">Product List</a></li>
                                <li><a href="#">Product Single</a></li>
                                <li class="drop-down">
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="drop-down">
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="#">3 Columns</a></li>
                                        <li><a href="#">4 Columns</a></li>
                                        <li><a href="#">Full Width</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">No Sidebar</a></li>
                                <li><a href="#">Mansory</a></li>
                                <li class="drop-down">
                                <a href="#">Single Types</a>
                                <ul>
                                    <li><a href="#">Standart Post</a></li>
                                    <li><a href="#">No Sidebar Post</a></li>
                                    <li><a href="#">Gallery Post</a></li>
                                    <li><a href="#">Quote Post</a></li>
                                    <li><a href="#">Link Post</a></li>
                                    <li><a href="#">Audio Post</a></li>
                                    <li><a href="#">Video Post</a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#contact">Landing</a></li>
                    </ul>
                    </nav>
                    <div class="nav-items">
                       <button>BOOK TODAY</button>
                    </div>
                </div>
                <div class="container margin-calendar">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img-canoeing">
                                <img src="./images/canoeing.png" alt="Caneoing">
                            </div>
                        </div>
                        <div class="col-lg-6 calender-col">
                            <div class="calendar">
                                <div class="month">
                                    <h5>DECEMBER 2020</h5>
                                </div>
                                <table id="table-calendar2">
                                    <tr>
                                        <th>mon</th>
                                        <th>tue</th>
                                        <th>wed</th>
                                        <th>thur</th>
                                        <th>fri</th>
                                        <th>sat</th>
                                        <th>sun</th>
                                    </tr>
                                    <tr>
                                        <td tabindex="31" class="non-active">31</td>
                                        <td tabindex="1" class="active-calendar">1</td>
                                        <td tabindex="2">2</td>
                                        <td tabindex="3">3</td>
                                        <td tabindex="4">4</td>
                                        <td tabindex="5">5</td>
                                        <td tabindex="6">6</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="7">7</td>
                                        <td tabindex="8">8</td>
                                        <td tabindex="9">9</td>
                                        <td tabindex="10">10</td>
                                        <td tabindex="11">11</td>
                                        <td tabindex="12">12</td>
                                        <td tabindex="13">13</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="14">14</td>
                                        <td tabindex="15">15</td>
                                        <td tabindex="16">16</td>
                                        <td tabindex="17">17</td>
                                        <td tabindex="18">18</td>
                                        <td tabindex="19">19</td>
                                        <td tabindex="20">20</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="21">21</td>
                                        <td tabindex="22">22</td>
                                        <td tabindex="23">23</td>
                                        <td tabindex="24">24</td>
                                        <td tabindex="25">25</td>
                                        <td tabindex="26">26</td>
                                        <td tabindex="27">27</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="28">28</td>
                                        <td tabindex="29">29</td>
                                        <td tabindex="30">30</td>
                                        <td tabindex="101" class="non-active">1</td>
                                        <td tabindex="102" class="non-active">2</td>
                                        <td tabindex="103" class="non-active">3</td>
                                        <td tabindex="104" class="non-active">4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>     
            </header>
        </div>
        <div class="swiper-slide">
            <header class="header-wave3">      
            <div class="navbar-custom d-flex align-items-center">
                    <h1 class="logo mr-auto"><img src="./images/logo.png" alt="Logo"></h1>
                    <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="drop-down active">
                            <a href="#"> <img src="./images/icon.png" alt="Icon"> Home</a>
                            <ul class="ul-icon">
                                <li><a href="#">Surfing Home</a></li>
                                <li class="active"><a href="#">Shop Home</a></li>
                                <li><a href="#">Yatching Home</a></li>
                                <li><a href="#">Caneoing Home</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Crew</a></li>
                                <li class="drop-down">
                                    <a href="#">Our Service</a>
                                    <ul>
                                        <li><a href="#">Service List</a></li>
                                        <li><a href="#">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">404 Error Page</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Events</a>
                            <ul>
                                <li><a href="#">Event List</a></li>
                                <li><a href="#">Event Single</a></li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Shop</a>
                            <ul>
                                <li><a href="#">Product List</a></li>
                                <li><a href="#">Product Single</a></li>
                                <li class="drop-down">
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="drop-down">
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="#">3 Columns</a></li>
                                        <li><a href="#">4 Columns</a></li>
                                        <li><a href="#">Full Width</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="drop-down">
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">No Sidebar</a></li>
                                <li><a href="#">Mansory</a></li>
                                <li class="drop-down">
                                <a href="#">Single Types</a>
                                <ul>
                                    <li><a href="#">Standart Post</a></li>
                                    <li><a href="#">No Sidebar Post</a></li>
                                    <li><a href="#">Gallery Post</a></li>
                                    <li><a href="#">Quote Post</a></li>
                                    <li><a href="#">Link Post</a></li>
                                    <li><a href="#">Audio Post</a></li>
                                    <li><a href="#">Video Post</a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#contact">Landing</a></li>
                    </ul>
                    </nav>
                    <div class="nav-items">
                       <button>BOOK TODAY</button>
                    </div>
                </div>
                <div class="container margin-calendar">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img-canoeing">
                                <img src="./images/canoeing.png" alt="Caneoing">
                            </div>
                        </div>
                        <div class="col-lg-6 calender-col">
                            <div class="calendar">
                                <div class="month">
                                    <h5>DECEMBER 2020</h5>
                                </div>
                                <table id="table-calendar3">
                                    <tr>
                                        <th>mon</th>
                                        <th>tue</th>
                                        <th>wed</th>
                                        <th>thur</th>
                                        <th>fri</th>
                                        <th>sat</th>
                                        <th>sun</th>
                                    </tr>
                                    <tr>
                                        <td tabindex="31" class="non-active">31</td>
                                        <td tabindex="1" class="active-calendar">1</td>
                                        <td tabindex="2">2</td>
                                        <td tabindex="3">3</td>
                                        <td tabindex="4">4</td>
                                        <td tabindex="5">5</td>
                                        <td tabindex="6">6</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="7">7</td>
                                        <td tabindex="8">8</td>
                                        <td tabindex="9">9</td>
                                        <td tabindex="10">10</td>
                                        <td tabindex="11">11</td>
                                        <td tabindex="12">12</td>
                                        <td tabindex="13">13</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="14">14</td>
                                        <td tabindex="15">15</td>
                                        <td tabindex="16">16</td>
                                        <td tabindex="17">17</td>
                                        <td tabindex="18">18</td>
                                        <td tabindex="19">19</td>
                                        <td tabindex="20">20</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="21">21</td>
                                        <td tabindex="22">22</td>
                                        <td tabindex="23">23</td>
                                        <td tabindex="24">24</td>
                                        <td tabindex="25">25</td>
                                        <td tabindex="26">26</td>
                                        <td tabindex="27">27</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="28">28</td>
                                        <td tabindex="29">29</td>
                                        <td tabindex="30">30</td>
                                        <td tabindex="101" class="non-active">1</td>
                                        <td tabindex="102" class="non-active">2</td>
                                        <td tabindex="103" class="non-active">3</td>
                                        <td tabindex="104" class="non-active">4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>    
            </header>
        </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="container">
        <div class="row rowContact">
            <div class="col-md-8 col-sm-12">
                <form>
                    <div class="form-filed">
                        <p class="input-icon">
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" name="EMAIL" placeholder="SUBSCRIBE FOR NEWLETTER" required=""
                                class="input-field">
                        </p>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="qodef-contact-form-submit button-qodef2">
                    <button
                    type="submit"
                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
                    >
                    <span class="qodef-btn-text">SUBSCRIBE</span
                    ><span class="qodef-btn-wave-holder"></span>
                    </button>
                </div>
            </div>  
        </div>
    </div>
</div>