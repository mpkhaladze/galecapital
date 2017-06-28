@extends('layouts.app')
@section('content')
    <div id="slider" data-section="home">
            <div class="owl-carousel-fullwidth">
                <!-- You may change the background color here.  -->
                <div class="item purple-background" style="height: 100vh; position:relative;">
                    <div class="main_text_for_home saving">
                            მშენებლობა და ინვესტირება გონივრულ დროსა და სივრცეში
                        <span>.</span><span>.</span><span>.</span>
                    </div>
                    <div class="social_links_wrapper text-center">
                        <ul class="social social-circle">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li>
                                <a href="https://www.facebook.com/galecomge">
                                    <i class="icon-facebook">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-youtube"></i>
                                </a>
                            </li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div id="fh5co-about-us" data-section="about">
            <div class="container">
                <div class="row row-bottom-padded-lg" id="about-us">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate">ჩვენ შესახებ</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 to-animate">
                                <h3>
                                        კომპანია, რომელიც გთავაზობთ საუკეთესო გადაწყვეტას, გონივრულ დროსა და სივრცეში
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 to-animate">
                        <img style="" src="images/staka3.jpg" class="img-responsive img-rounded" alt="Free HTML5 Template"/>
                    </div>
                    <div class="col-md-4 to-animate about_us_wrapper">
                            <p>
                                საქართველოს მასშტაბით ვახორციელებთ, როგორც ინდივიდუალური სახლების, აგრეთვე კორპორატიული მულტი-ფუნქციური საცხოვრებელი ეზოებისა და მრავალბინიანი კორპუსების დაგეგმარებას და მშენებლობას;
                            </p>
                            <p>
                                ინდივიდუალური სახლი - მოიცავს, როგორც ძველი სახლების რეაბილიტაციას და რემონტს, აგრეთვე ახალი სახლების პროექტირებას, მშენებლობას და რემონტს;
                            </p>
                            <p>
                                კორპორატიული მულტი-ფუნქციური ეზო - შედგება, როგორც ინდივიდუალური სახლებისგან, აგრეთვე მცირესართულიანი მრავალბინიანი შენობებისგან ან მარალსართულიანი კორპუსებისგან.
                            </p>
                            <p>
                               მრავალბინიანი კორპუსები - ვახორციელებთ სრულ დაგეგმარებასა და შესრულებას წინასწარ გაწერილი პროცედურების შესაბამისად. აგრეთვე ცალკეული სახით ჩართულობას, მონოლითური კარკასის მშენებლობას, საფასადე და შიდა სარემონტო სამუშაოებს.
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-testimonials" class="purple-background" data-section="soon">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate"> წინადადებები </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-testimony to-animate">
                            <blockquote>
                                <span class="quote">
                                    <span>
                                        <i class="icon-quote-left">
                                        </i>
                                    </span>
                                </span>
                                <p>&ldquo;საინვესტიციო პროექტების მოძიება&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-testimony to-animate">
                            <blockquote>
                                <span class="quote">
                                    <span>
                                        <i class="icon-quote-left">
                                        </i>
                                    </span>
                                </span>
                                <p>
                                        &ldquo;დამკვეთის სურვილის მიხედვით, ჩავერთვებით მიწის მოძიების ეტაპზე&rdquo;
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-testimony to-animate">
                            <blockquote>
                                <span class="quote">
                                    <span>
                                        <i class="icon-quote-left">
                                        </i>
                                    </span>
                                </span>
                                <p>                              
                                        &ldquo;გადახდა ეტაპობრივად, შესრულებული სამუშაოების მიხედვით&rdquo;       
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-pricing" data-section="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="single-animate animate-pricing-1">გაყიდვები</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="price-box to-animate popular">
                        <h2 class="pricing-plan">
                            <span id="num_of_mkv2">100</span>
                            <span>მ</span><sup>2</sup>
                        </h2>
                        <div class="price">
                            <sup class="currency"><i class="lari lari-normal"></i></sup>
                            <span id="price_of_mkv2">460</span>
                            <small>
                                <span>/ მ</span><sup>2</sup>
                                <span>-დან</span>
                            </small>
                        </div>
                        <p> შავი კარკასი (სახლი)</p>
                        <hr/>
                        <ul class="pricing-info">
                            <li>პროექტირება/ნებართვა</li>
                            <li> მონოლითი და კედლები</li>
                            <li>გადახურვა</li>
                            <li>კომუნიკაციები</li>
                        </ul>
                        <hr/>
                        <ul class="pricing-info">
                            <li>
                                სულ ფასი: <i class="lari lari-normal"></i>
                                <span id="sum_price_calc2"></span>
                                <span>-დან</span>
                            </li>
                        </ul>
                        <a href="#" data-nav-section="contacts" class="btn btn-primary btn-sm"> დაგვიკავშირდით
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 to-animate">
                    <div class="price-box to-animate popular">
                        <h2 class="pricing-plan">
                            <span id="num_of_mkv3">100</span> 
                            <span>მ</span><sup>2</sup>
                        </h2>
                        <div class="price">
                            <sup class="currency"><i class="lari lari-normal"></i></sup>
                            <span id="price_of_mkv3">560</span>
                            <small>
                                / მ
                                <sup>2</sup>              
                                <span>-დან</span>
                            </small>
                        </div>
                        <p>თეთრი კარკასი (სახლი) </p>
                        <hr/>
                        <ul class="pricing-info">
                            <li> შიდა-გარე ლესვა</li>
                            <li>კარ-ფანჯრები </li>
                            <li style="font-size: 14px">შიდა ქსელები წერტილებად</li>
                            <li>იატაკის მოჭიმვა </li>
                        </ul>
                        <hr/>
                        <ul class="pricing-info">
                            <li>სულ ფასი: <i class="lari lari-normal"></i>
                                <span id="sum_price_calc3"></span>
                                <span>-დან</span>
                            </li>
                        </ul>
                        <a href="#" data-nav-section="contacts" class="btn btn-primary btn-sm">
                            დაგვიკავშირდით
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="price-box to-animate popular">
                        <h2 class="pricing-plan">
                            <span id="num_of_mkv4">1000</span>
                            <span>მ</span><sup>2</sup>
                        </h2>
                        <div class="price">
                            <sup class="currency"><i class="lari lari-normal"></i></sup>
                            <span id="price_of_mkv4">760</span>
                            <small>
                                <span>/ მ</span><sup>2 </sup>
                                <span>-დან</span>
                            </small>
                        </div>
                        <p>შავი (კორპორატიული)</p>
                        <hr/>
                        <ul class="pricing-info">
                            <li>პროექტირება/ნებართვა</li>
                            <li>ლიფტი და ფასადი</li>
                            <li>კარ-ფანჯრები</li>
                            <li>კომუნიკაციები</li>
                        </ul>
                        <hr/>
                        <ul class="pricing-info">
                            <li> სულ ფასი: <i class="lari lari-normal"></i>
                                <span id="sum_price_calc4"></span>
                                <span>-დან</span>
                            </li>
                        </ul>
                        <a href="#" data-nav-section="contacts" class="btn btn-primary btn-sm">
                                დაგვიკავშირდით
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="price-box to-animate popular">
                        <h2 class="pricing-plan">
                            <span id="num_of_mkv5">1000</span>
                            <span>მ</span><sup>2</sup>
                        </h2>
                        <div class="price">
                            <sup class="currency"><i class="lari lari-normal"></i></sup>
                            <span id="price_of_mkv5">860</span>
                            <small> / მ
                                <sup>2</sup>
                                <span>-დან</span>
                            </small>
                        </div>
                        <p>თეთრი (კორპორატიული)</p>
                        <hr/>
                        <ul class="pricing-info">
                            <li>ლესვა</li>
                            <li>ლიფტი და ფასადი</li>
                            <li>შიდა ქსელები</li>
                            <li>იატაკის მოჭიმვა</li>
                        </ul>
                        <hr/>
                        <ul class="pricing-info">
                            <li>სულ ფასი: <i class="lari lari-normal"></i>
                                <span id="sum_price_calc5"></span>
                                <span>-დან</span>
                            </li>
                        </ul>
                        <a href="#" data-nav-section="contacts" class="btn btn-primary btn-sm">დაგვიკავშირდით
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection