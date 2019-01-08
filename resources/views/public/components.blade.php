@extends('public.layout.app')

@section('content')
    <!-- Start Page Title Section -->
    <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Components</h1>
                <p><a href="#">Home</a> &#8594; <span>Components</span></p>
            </div>
        </div>
    </div>
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-9">
                    <div id="typography">
                        <div class="sub-ttl font-28">Typography</div>
                        <div class="theme-material-card">
                            <div class="p-2 text-center">
                                <h1>H1 Style Font Size 36px</h1>
                                <h2>H2 Style Font Size 30px</h2>
                                <h3>H3 Style Font Size 24px</h3>
                                <h4>H4 Style Font Size 20px</h4>
                                <h5>H5 Style Font Size 16px</h5>
                                <h6>H6 Style Font Size 14px</h6>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="paragraph-medium paragraph-black text-left"><span class="primary-color">This is paragraph style font 14px</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos temporibus ipsum quam ab accusantium quis perferendis iusto ut fugit est, aliquid dolorum! Id repellat quibusdam fugit minima assumenda ea tenetur.</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="paragraph-small paragraph-black text-left"><span class="primary-color">This is paragraph style font 12px</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, aspernatur optio beatae eveniet dolor ea, repellat esse excepturi, nesciunt ratione cum veritatis quibusdam voluptatem perferendis accusantium labore. A, molestias, ipsa!</p>
                                </div>
                            </div>
                            <div class="p-2 text-left">
                                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                <p><u>This line of text will render as underlined</u></p>
                                <p><small>This line of text is meant to be treated as fine print.</small></p>
                                <p><strong>This line rendered as bold text.</strong></p>
                                <p><em>This line rendered as italicized text.</em></p>
                            </div>
                            <blockquote class="blockquote theme-quote">
                                <p class="mb-3 font-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer font-12">Author Name <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="theme-quote">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </blockquote>
                            <div class="theme-quote theme-quote-colored theme-quote-primary">
                                <p class="mb-3 font-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer color-white font-12">Author Name <cite title="Source Title">Source Title</cite></footer>
                            </div>
                            <div class="theme-quote theme-quote-colored theme-quote-success">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                            <div class="theme-quote theme-quote-colored theme-quote-warning">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                            <div class="theme-quote theme-quote-colored theme-quote-danger">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                            <div class="theme-quote theme-quote-colored theme-quote-info">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                        </div>
                    </div>
                    <div id="card">
                        <div class="sub-ttl font-28">Theme Card</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <img class="card-img-top" src="uploads/doctor-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-green button-fill-green">Click Here</a>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card text-right">
                                    <img class="card-img-top" src="uploads/doctor-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Click Here</a>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Click Here</a>
                                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-blue button-fill-blue">Click Here</a>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card text-right">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Click Here</a>
                                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-blue button-fill-blue">Click Here</a>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                <div class="theme-block theme-block-hover">
                                    <div class="theme-block-picture">
                                        <img src="uploads/blog-8.jpg" alt="">
                                    </div>
                                    <div class="theme-block-data">
                                        <h4 class="text-left"><a>Card Title</a></h4>
                                        <p class="card-text text-left m-b-10">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero magni sapiente minima ab. Fuga non commodi natus cum temporibus consequatur excepturi repellendus deleniti, qui dolorum facere error, ut velit ducimus.
                                        </p>
                                        <div class="m-t-10 text-left font-14">
                                            <a href="#" class="card-link color-purple">Card link</a>
                                            <a href="#" class="card-link color-green">Another link</a>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-block theme-block-hover">
                                    <div class="theme-block-picture">
                                        <img src="uploads/blog-8.jpg" alt="">
                                    </div>
                                    <div class="theme-block-data">
                                        <h4 class="text-right"><a>Card Title</a></h4>
                                        <p class="card-text text-right m-b-10">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero magni sapiente minima ab. Fuga non commodi natus cum temporibus consequatur excepturi repellendus deleniti, qui dolorum facere error, ut velit ducimus.
                                        </p>
                                        <div class="m-t-10 text-right font-14">
                                            <a href="#" class="card-link color-purple">Card link</a>
                                            <a href="#" class="card-link color-green">Another link</a>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                <div class="theme-block theme-block-hover">
                                    <div class="theme-block-picture">
                                        <img src="uploads/service-1.jpg" alt="">
                                    </div>
                                    <div class="theme-block-data">
                                        <h4><a href="#">Card Title</a></h4>
                                        <p class="paragraph-small paragraph-black">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt quaerat, eligendi ad, ipsum?.</span><a href="#">(Read More)</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-block theme-block-hover">
                                    <div class="theme-block-picture">
                                        <div class="blog-card-date">25 June 20XX</div>
                                        <img src="uploads/blog-2.jpg" alt="">
                                    </div>
                                    <div class="blog-card-ttl">
                                        <h3><a href="#">Card Title</a></h3>
                                    </div>
                                    <div class="blog-card-details">
                                        <p><i class="fa fa-user-o"></i>User Name</p>
                                        <p><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                <div class="theme-block">
                                    <div class="theme-block-picture">
                                        <img src="uploads/blog-8.jpg" alt="">
                                    </div>
                                    <div class="theme-block-data">
                                        <h4 class="text-left"><a>Card Title</a></h4>
                                        <p class="text-left">Tag Line</p>
                                    </div>
                                    <div class="theme-block-hidden">
                                        <i class="fa fa-stethoscope"></i>
                                        <h4><a href="#">Card Title</a></h4>
                                        <p class="paragraph-small paragraph-black theme-block-padding">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptatem quia distinctio maxime blanditiis aspernatur, quae atque nulla ex laudantium veniam vitae consectetur beatae, dolorem itaque nisi, praesentium qui. Quaerat.</span>
                                        </p>
                                        <div class="font-14">
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple  button-sm">Card link</a>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-green button-fill-green  button-sm">Another link</a>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-block">
                                    <div class="theme-block-picture">
                                        <img class="" src="uploads/service-6.jpg" alt="">
                                    </div>
                                    <div class="theme-block-data">
                                        <h4 class="text-left"><a>Card Title</a></h4>
                                        <p class="text-left">Tag Line</p>
                                    </div>
                                    <div class="theme-block-hidden">
                                        <i class="fa fa-stethoscope"></i>
                                        <h4><a href="#">Card Title</a></h4>
                                        <p class="paragraph-small paragraph-black theme-block-padding">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptatem quia distinctio maxime blanditiis aspernatur, quae atque nulla ex laudantium veniam vitae consectetur beatae, dolorem itaque nisi, praesentium qui. Quaerat.</span>
                                        </p>
                                        <div class="font-14">
                                            <a href="#" class="card-link color-purple">Card link</a>
                                            <a href="#" class="card-link color-green">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-primary mb-5"">
                                    <div class="card-header font-14">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-danger mb-5"">
                                    <div class="card-header font-14">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-success mb-5"">
                                    <div class="card-header font-14">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-warning mb-5"">
                                    <div class="card-header font-14">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card bg-light mb-5"">
                                    <div class="card-header font-14">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-dark mb-5"">
                                    <div class="card-header font-14">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Primary card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-md-6">
                                <div class="card mb-5">
                                    <img class="card-img-top" src="uploads/doctor-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="bg-primary p-3">
                                        <p class="text-white font-14 mb-0">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-5">
                                    <img class="card-img-top" src="uploads/doctor-3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="bg-danger p-3">
                                        <small class="text-white font-14">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-5">
                                    <img class="card-img-top" src="uploads/blog-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="bg-success p-3">
                                        <p class="text-white font-14 mb-0">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-5">
                                    <img class="card-img-top" src="uploads/service-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer p-3">
                                        <small class="text-muted font-14">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-material-card blog-full-block">
                            <div class="row">
                                <div class="col-sm-4 blog-full-img">
                                    <div class="blog-full-date">26 June XXXX</div>
                                    <img class="img-thumbnail" src="uploads/blog-9.jpg" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <div class="blog-full-ttl">
                                        <h3><a href="#">Card Title</a></h3>
                                    </div>
                                    <div class="blog-full-description">
                                        Mauris in erat justo. Nullam ac urna eu felis condimentum sit amet a augue. Sed non neque elit.Mauris in erat justo. Nullam ac urna eu felis condimentum sit amet a augue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto magnam iure illo ...
                                    </div>
                                    <div class="blog-full-ftr">
                                        <a class="pull-left blog-full-author"><i class="fa fa-user"></i> Tage ine or Username</a>
                                        <a href="#" class="pull-right anchor-icon">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-material-card">
                            <div class="sub-ttl">Card Title</div>
                            <ul class="category-list">
                                <li><a href="#"><i class="fa fa-list"></i>Category List 1</a><span>(XXXX)</span></li>
                                <li><a href="#"><i class="fa fa-list"></i>Category List 2</a><span>(XX)</span></li>
                                <li><a href="#"><i class="fa fa-list"></i>Category List 3</a><span>(XXX)</span></li>
                                <li><a href="#"><i class="fa fa-list"></i>Category List 4</a><span>(XXX)</span></li>
                            </ul>
                        </div>
                        <div class="row pb-5">
                            <div class="col-md-6">
                                <div class="mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title" style="background: url('uploads/blog-6.jpg') center / cover;">
                                        <h2 class="mdl-card__title-text color-white">Welcome</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris sagittis pellentesque lacus eleifend lacinia...
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect button button-default m-1">Get Started</a>
                                    </div>
                                    <div class="mdl-card__menu">
                                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="fa fa-share color-white"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title" style="background: url('uploads/service-4.jpg') center / cover;">
                                        <h2 class="mdl-card__title-text color-white">Welcome</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris sagittis pellentesque lacus eleifend lacinia...
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-primary m-1">Get Started</a>
                                        <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-success m-1 pull-right">Click Here</a>
                                    </div>
                                    <div class="mdl-card__menu">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored button-danger m-1"><i class="fa fa-share"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider">
                        <div class="sub-ttl font-28">Slider</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Flex Slider 1</div>
                                    <div class="flexslider theme-flexslider">
                                        <ul class="slides">
                                            <li>
                                                <div class="theme-flexslider-container">
                                                    <img src="uploads/blog-1.jpg" alt="" />
                                                    <h4>Slider Title</h4>
                                                    <p>Tag Line</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="theme-flexslider-container">
                                                    <img src="uploads/blog-2.jpg" alt="" />
                                                    <h4>Slider Title</h4>
                                                    <p>Tag Line</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="theme-flexslider-container">
                                                    <img src="uploads/blog-3.jpg" alt="" />
                                                    <h4>Slider Title</h4>
                                                    <p>Tag Line</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="theme-flexslider-container">
                                                    <img src="uploads/blog-4.jpg" alt="" />
                                                    <h4>Slider Title</h4>
                                                    <p>Tag Line</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Owl Slider 1</div>
                                    <div class="owl-carousel owl-theme theme-owl-dot theme-owlslider text-center">
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-1.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-2.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-3.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-4.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-5.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                <div class="sidebar">
                                    <div class="sub-ttl">Flex Slider 2</div>
                                    <div class="flexslider theme-flexslider">
                                        <ul class="slides text-center">
                                            <li>
                                                <div class="theme-flexslider-container">
                                                    <img src="uploads/doctor-1.jpg" alt="" />
                                                    <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                                    <p class="primary-color">Tag Line</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="theme-flexslider-container">
                                                    <img src="uploads/doctor-2.jpg" alt="" />
                                                    <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                                    <p class="primary-color">Tag Line</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="sidebar">
                                    <div class="sub-ttl">Owl Slider 2</div>
                                    <div class="owl-carousel owl-theme theme-owl-dot theme-owlslider text-center">
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-6.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-7.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-8.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-9.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="uploads/service-10.jpg" alt="">
                                            <h4 class="font-16"><a href="#">Slider Title</a></h4>
                                            <p class="primary-color">Tag Line</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                    <div id="images">
                        <div class="sub-ttl font-28">Images</div>
                        <div class="theme-material-card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="theme-img">
                                        <img src="uploads/service-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="theme-img theme-img-scale">
                                        <img src="uploads/doctor-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="theme-img theme-img-scalerotate">
                                        <img src="uploads/blog-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="sub-ttl font-28">Accordion</div>
                        <div class="theme-material-card">
                            <div class="theme-accordion-container">
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="color-green"><i class="fa fa-stethoscope"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/service-1.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-green">L</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="color-orange"><i class="fa fa-stethoscope"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/blog-2.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-orange">A</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="color-purple"><i class="fa fa-stethoscope"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/blog-8.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-purple">z</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="color-blue"><i class="fa fa-stethoscope"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/doctor-7.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-blue">z</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-material-card">
                            <div class="theme-accordion-container">
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr bg-primary">
                                        <h4 class="color-white"><i class="fa fa-stethoscope bg-primary color-white"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus color-white"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/service-1.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-green">L</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr bg-success">
                                        <h4 class="color-white"><i class="fa fa-stethoscope color-white bg"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus color-white"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/blog-2.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-orange">A</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr bg-warning">
                                        <h4 class="color-white"><i class="fa fa-stethoscope bg-primary"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus color-white"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/blog-8.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-purple">z</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr bg-danger">
                                        <h4 class="color-white"><i class="fa fa-stethoscope bg-primary"></i> Accordion Title</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus color-white"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row service-accordian">
                                            <div class="col-sm-3 theme-accordian-img text-center">
                                                <img class="img-responsive img-thumbnail" src="uploads/doctor-7.jpg" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="paragraph-small paragraph-black">
                                                    <span class="theme-dropcap color-blue">z</span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptatum amet molestiae, sint consequatur, quam. Vero enim fugit provident labore qui, autem, cum numquam ipsa repudiandae asperiores saepe mollitia, voluptatibus! Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                                </p>
                                                <div class="pull-right">
                                                    <a class="anchor-icon">Read More<i class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="form">
                        <div class="sub-ttl font-28">Form Input</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="theme-material-card p-3">
                                    <div class="sub-ttl">Form Input with Icon</div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                        <i class="fa fa-user-o"></i>
                                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="sample-text-1">
                                        <label class="mdl-textfield__label" for="sample-text-1">Text Field</label>
                                        <span class="mdl-textfield__error">Please Enter Valid Text!</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                        <i class="fa fa-envelope-o"></i>
                                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="sample-email-1">
                                        <label class="mdl-textfield__label" for="sample-email-1">Email Address</label>
                                        <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                        <i class="fa fa-phone"></i>
                                        <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="sample-number-1">
                                        <label class="mdl-textfield__label" for="sample-number-1">Number</label>
                                        <span class="mdl-textfield__error">Please Enter Valid Number!</span>
                                    </div>
                                    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                        <i class="fa fa-angle-double-down"></i>
                                        <select class="mdl-selectfield__select" id="sample-selectlist-1">
                                            <option value="">&nbsp;</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <label class="mdl-selectfield__label" for="sample-selectlist-1">Select List</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                        <i class="fa fa-paper-plane"></i>
                                        <textarea class="mdl-textfield__input" rows="5" id="sample-message-1"></textarea>
                                        <label class="mdl-textfield__label" for="sample-message-1">Your Request</label>
                                        <span class="mdl-textfield__error">Please Enter Your Query!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="theme-material-card text-center p-3">
                                    <div class="sub-ttl">Form Input without Icon</div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="sample-text-2">
                                        <label class="mdl-textfield__label" for="sample-text-2">Text Field</label>
                                        <span class="mdl-textfield__error">Please Enter Valid Text!</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="sample-email-2">
                                        <label class="mdl-textfield__label" for="sample-email-2">Email Address</label>
                                        <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="sample-number-2">
                                        <label class="mdl-textfield__label" for="sample-number-2">Number</label>
                                        <span class="mdl-textfield__error">Please Enter Valid Number!</span>
                                    </div>
                                    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input">
                                        <select class="mdl-selectfield__select" id="sample-selectlist-2">
                                            <option value="">&nbsp;</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <label class="mdl-selectfield__label" for="sample-selectlist-2">Select List</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <textarea class="mdl-textfield__input" rows="5" id="sample-message-2"></textarea>
                                        <label class="mdl-textfield__label" for="sample-message-2">Your Request</label>
                                        <span class="mdl-textfield__error">Please Enter Your Query!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="table">
                        <div class="sub-ttl font-28">Table</div>
                        <div class="theme-material-card">
                            <p class="font-16">BASIC TABLE</p>
                            <p class="font-13">Add class <code>.table</code></p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Hashtag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td><span class="badge badge-danger">#DanielBarnes</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td><span class="badge badge-warning">#CheriAria</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td><span class="badge badge-success">#MelisaBates</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td><span class="badge badge-primary">#SteveSoeren</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE HOVER</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-hover</code></p>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Hashtag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td><span class="badge badge-danger">#DanielBarnes</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td><span class="badge badge-warning">#CheriAria</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td><span class="badge badge-success">#MelisaBates</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td><span class="badge badge-primary">#SteveSoeren</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE BORDERED</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-bordered</code></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="text-center">Profession</th>
                                        <th class="text-center">Location</th>
                                        <th>hashtag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="#">Dr. Daniel Barnes</a></td>
                                        <td class="text-center">Orthologist</td>
                                        <td class="text-center">California, USA</td>
                                        <td><span class="badge badge-primary">#DanielBarnes</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td class="text-center">Dermatologist</td>
                                        <td class="text-center">Newyork, USA</td>
                                        <td><span class="badge badge-danger">#CheriAria</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td class="text-center">Gynocologist</td>
                                        <td class="text-center">Mumbai, India</td>
                                        <td><span class="badge badge-warning">#MelisaBates</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td class="text-center">Gynocologist</td>
                                        <td class="text-center">Mumbai, India</td>
                                        <td><span class="badge badge-success">#SteveSoeren</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE STRIPED</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-striped</code></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th class="text-center">Deadline</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Task 1</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">Dec 15, 2017</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Task 2</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">May 15, 2018</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Task 3</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">Apr 19, 2019</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Task 4</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">Dec 19, 2017</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Task 5</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-info" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">Aug 15, 2017</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE Contextual</p>
                            <p class="font-13">Add class <code>.table</code> and Use classes ( <code>.table-primary</code>, <code>.table-success</code>, <code>.table-info</code>, <code>.table-danger</code>, <code>.table-warning</code>  to color table rows or individual cells.</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="text-center">Profession</th>
                                        <th class="text-center">Location</th>
                                        <th>hashtag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-primary">
                                        <td>1</td>
                                        <td><a href="#">Dr. Daniel Barnes</a></td>
                                        <td class="text-center">Orthologist</td>
                                        <td class="text-center">California, USA</td>
                                        <td><span class="badge badge-primary">#DanielBarnes</span></td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td class="text-center">Dermatologist</td>
                                        <td class="text-center">Newyork, USA</td>
                                        <td><span class="badge badge-danger">#CheriAria</span></td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td class="text-center">Gynocologist</td>
                                        <td class="text-center">Mumbai, India</td>
                                        <td><span class="badge badge-warning">#MelisaBates</span></td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td class="text-center">Gynocologist</td>
                                        <td class="text-center">Mumbai, India</td>
                                        <td><span class="badge badge-success">#SteveSoeren</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">RESPONSIVE TABLE</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-responsive</code></p>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Hashtag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td><span class="badge badge-danger">#DanielBarnes</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td><span class="badge badge-warning">#CheriAria</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td><span class="badge badge-success">#MelisaBates</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td><span class="badge badge-primary">#SteveSoeren</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE LAYOUTS</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-primary-head</code></p>
                            <table class="table">
                                <thead>
                                    <tr class="table-primary-head">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td>@Daniel</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td>@Cheri</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Melisa</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Steve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE LAYOUTS</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-success-head</code></p>
                            <table class="table">
                                <thead>
                                    <tr class="table-success-head">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td>@Daniel</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td>@Cheri</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Melisa</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Steve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE LAYOUTS</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-warning-head</code></p>
                            <table class="table">
                                <thead>
                                    <tr class="table-warning-head">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td>@Daniel</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td>@Cheri</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Melisa</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Steve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">TABLE LAYOUTS</p>
                            <p class="font-13">Add class <code>.table</code> <code>.table-danger-head</code></p>
                            <table class="table">
                                <thead>
                                    <tr class="table-danger-head">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>Location</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Daniel Barnes</td>
                                        <td>Orthologist</td>
                                        <td>California, USA</td>
                                        <td>@Daniel</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Cheri Aria</td>
                                        <td>Dermatologist</td>
                                        <td>Newyork, USA</td>
                                        <td>@Cheri</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Melisa Bates</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Melisa</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Steve Soeren</td>
                                        <td>Gynocologist</td>
                                        <td>Mumbai, India</td>
                                        <td>@Steve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">Material Table</p>
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="mdl-data-table__cell--non-numeric">Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">Profession</th>
                                        <th class="mdl-data-table__cell--non-numeric">Location</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Daniel Barnes</td>
                                        <td class="mdl-data-table__cell--non-numeric">Orthologist Specilist</td>
                                        <td class="mdl-data-table__cell--non-numeric">California, USA</td>
                                        <td>$100</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Cheri Aria</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dermatologist</td>
                                        <td class="mdl-data-table__cell--non-numeric">Newyork, USA </td>
                                        <td>$200</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Melisa Bates</td>
                                        <td class="mdl-data-table__cell--non-numeric">Gynocologist</td>
                                        <td class="mdl-data-table__cell--non-numeric">Mumbai, India</td>
                                        <td>$180</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Steve Soeren</td>
                                        <td class="mdl-data-table__cell--non-numeric">Gynocologist</td>
                                        <td class="mdl-data-table__cell--non-numeric">Street London, UK</td>
                                        <td>$180</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="theme-material-card">
                            <p class="font-16">Selectable Table</p>
                            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="mdl-data-table__cell--non-numeric">Name</th>
                                        <th class="mdl-data-table__cell--non-numeric">Profession</th>
                                        <th class="mdl-data-table__cell--non-numeric">Location</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Daniel Barnes</td>
                                        <td class="mdl-data-table__cell--non-numeric">Orthologist Specilist</td>
                                        <td class="mdl-data-table__cell--non-numeric">California, USA</td>
                                        <td>$100</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Cheri Aria</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dermatologist</td>
                                        <td class="mdl-data-table__cell--non-numeric">Newyork, USA </td>
                                        <td>$200</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Melisa Bates</td>
                                        <td class="mdl-data-table__cell--non-numeric">Gynocologist</td>
                                        <td class="mdl-data-table__cell--non-numeric">Mumbai, India</td>
                                        <td>$180</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="mdl-data-table__cell--non-numeric">Dr. Steve Soeren</td>
                                        <td class="mdl-data-table__cell--non-numeric">Gynocologist</td>
                                        <td class="mdl-data-table__cell--non-numeric">Street London, UK</td>
                                        <td>$180</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="pagination">
                        <div class="sub-ttl font-28">Pagination</div>
                        <div class="theme-material-card text-center">
                            <ul class="theme-pagination theme-pagination-default m-2">
                                <li><a href="#">Prev</a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                            <ul class="theme-pagination m-2">
                                <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                            <ul class="theme-pagination theme-pagination-1 m-2">
                                <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="button">
                        <div class="sub-ttl font-28">Button</div>
                        <div class="theme-material-card">
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-default button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-primary button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-success button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-warning button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-danger button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-info button-sm m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-default m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-primary m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-success m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-warning m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-danger m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-info m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-default button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-primary button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-success button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-warning button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-danger button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-info button-lg m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised button button-default button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-success button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-warning button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-danger button-sm m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-info button-sm m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised button button-default m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-success m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-warning m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-danger m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-info m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised button button-default button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-success button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-warning button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-danger button-lg m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-info button-lg m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-button--fab button-default m-1"><i class="fa fa-plus"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored button-primary m-1"><i class="fa fa-shield"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored button-success m-1"><i class="fa fa-user"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored button-warning m-1"><i class="fa fa-money"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored button-danger m-1"><i class="fa fa-image"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored button-info m-1"><i class="fa fa-pencil"></i></button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-default m-1"><i class="fa fa-plus"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect button-primary m-1"><i class="fa fa-shield"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect button-success m-1"><i class="fa fa-user"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect button-warning m-1"><i class="fa fa-money"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect button-danger m-1"><i class="fa fa-image"></i></button>
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect button-info m-1"><i class="fa fa-pencil"></i></button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary button-bordered-primary m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-success button-bordered-success m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-warning button-bordered-warning m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-danger button-bordered-danger m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-info button-bordered-info m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary button-bordered-primary button-hover-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-success button-bordered-success button-hover-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-warning button-bordered-warning button-hover-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-danger button-bordered-danger button-hover-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-info button-bordered-info button-hover-transparent m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-primary button-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-success button-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-warning button-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-danger button-transparent m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-info button-transparent m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-primary button-transparent button-hover-primary m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-success button-transparent button-hover-success m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-warning button-transparent button-hover-warning m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-danger button-transparent button-hover-danger m-1">Button</button>
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-info button-transparent button-hover-info m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="button-icon button-icon-blue m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                                <button class="button-icon button-icon-green m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                                <button class="button-icon button-icon-orange m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                                <button class="button-icon button-icon-purple m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="p-2">
                                <button class="button-icon button-iconfill-blue m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                                <button class="button-icon button-iconfill-green m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                                <button class="button-icon button-iconfill-orange m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                                <button class="button-icon button-iconfill-purple m-1">
                                    <span>Button</span>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="p-2">
                                <button class="btn btn-primary m-1">Button</button>
                                <button class="btn btn-success m-1">Button</button>
                                <button class="btn btn-warning m-1">Button</button>
                                <button class="btn btn-danger m-1">Button</button>
                                <button class="btn btn-info m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="btn btn-primary btn-lg m-1">Button</button>
                                <button class="btn btn-success btn-lg m-1">Button</button>
                                <button class="btn btn-warning btn-lg m-1">Button</button>
                                <button class="btn btn-danger btn-lg m-1">Button</button>
                                <button class="btn btn-info btn-lg m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <button class="btn btn-primary btn-lg m-1">Button</button>
                                <button class="btn btn-success btn-lg m-1">Button</button>
                                <button class="btn btn-warning btn-lg m-1">Button</button>
                                <button class="btn btn-danger btn-lg m-1">Button</button>
                                <button class="btn btn-info btn-lg m-1">Button</button>
                            </div>
                            <div class="p-2">
                                <a href="#" class="theme-tag">Popular Tag</a>
                                <a href="#" class="theme-tag theme-tag-1">Popular Tag</a>
                                <a href="#" class="theme-tag theme-tag-2">Popular Tag</a>
                                <a href="#" class="theme-tag theme-tag-colored">Popular Tag</a>
                                <a href="#" class="theme-tag theme-tag-1 theme-tag-colored">Popular Tag</a>
                                <a href="#" class="theme-tag theme-tag-2 theme-tag-colored">Popular Tag</a>
                            </div>
                        </div>
                    </div>
                    <div id="dropdown">
                        <div class="sub-ttl font-28">Dropdown</div>
                        <div class="theme-material-card">
                            <div class="theme-dropdown">
                                <a id="sample-menu-1" class="mdl-button mdl-js-button mdl-js-ripple-effect">Drop Down <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect metarial-menu" data-mdl-for="sample-menu-1">
                                    <li class="mdl-menu__item"><a>Option 1</a></li>
                                    <li class="mdl-menu__item"><a>Option 2</a></li>
                                    <li class="mdl-menu__item"><a>Option 3</a></li>
                                    <li class="mdl-menu__item"><a>Option 4</a></li>
                                    <li class="mdl-menu__item"><a>Option 5</a></li>
                                    <li class="mdl-menu__item"><a>Option 6</a></li>
                                </ul>
                            </div>
                            <div class="theme-dropdown">
                                <a id="sample-menu-2" class="mdl-button mdl-js-button mdl-js-ripple-effect">Drop Down with icon <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect metarial-menu" data-mdl-for="sample-menu-2">
                                    <li class="mdl-menu__item"><a><i class="fa fa-align-left"></i>Option 1</a></li>
                                    <li class="mdl-menu__item"><a><i class="fa fa-align-right"></i>Option 2</a></li>
                                    <li class="mdl-menu__item"><a><i class="fa fa-align-center"></i>Option 3</a></li>
                                    <li class="mdl-menu__item"><a><i class="fa fa-align-justify"></i>Option 4</a></li>
                                    <li class="mdl-menu__item"><a><i class="fa fa-floppy-o"></i>Option 5</a></li>
                                    <li class="mdl-menu__item"><a><i class="fa fa-file-text"></i>Option 6</a></li>
                                </ul>
                            </div>
                            <div class="p-2 pt-4">
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <ul class="menu text-left p-0">
                                    <li>
                                        <a id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">Drop Down <i class="fa fa-chevron-down"></i></a>
                                        <ul class="menu-dropdown">
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 4</a></li>
                                            <li><a href="#">Link 5</a></li>
                                            <li><a href="#">Link 6</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">Drop Down with N Level <i class="fa fa-chevron-down"></i></a>
                                        <ul class="menu-dropdown">
                                            <li>
                                                <a>First Level</a>
                                                <ul class="menu-dropdown">
                                                    <li>
                                                        <a>Second Level</a>
                                                        <ul class="menu-dropdown">
                                                            <li>
                                                                <a>Third Level</a>
                                                                <ul class="menu-dropdown">
                                                                    <li><a href="#">Fourth Level</a></li>
                                                                    <li><a href="#">Link</a></li>
                                                                    <li><a href="#">Link</a></li>
                                                                    <li><a href="#">Link</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                        </ul>                
                                                    </li>
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>First Level</a>
                                                <ul class="menu-dropdown">
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li>
                                                <a>First Level</a>
                                                <ul class="menu-dropdown">
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                    <li><a href="#">Second Level</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-megamenu-li">
                                        <a>Mega Menu</a>
                                        <ul class="menu-megamenu">
                                            <li class="row">
                                                <div class="col-lg-3">
                                                    <div class="megamenu-ttl">Link 1</div>
                                                    <ul>
                                                        <li><a href="#">Link 1</a></li>
                                                        <li><a href="#">Link 2</a></li>
                                                        <li><a href="#">Link 3</a></li>
                                                        <li><a href="#">Link 4</a></li>
                                                        <li><a href="#">Link 5</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-ttl">Link 2</div>
                                                    <ul>
                                                        <li><a href="#">Link 1</a></li>
                                                        <li><a href="#">Link 2</a></li>
                                                        <li><a href="#">Link 3</a></li>
                                                        <li><a href="#">Link 4</a></li>
                                                        <li><a href="#">Link 5</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="megamenu-ttl">Link 3</div>
                                                    <ul>
                                                        <li><a href="#">Link 1</a></li>
                                                        <li><a href="#">Link 2</a></li>
                                                        <li><a href="#">Link 3</a></li>
                                                        <li><a href="#">Link 4</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-img">
                                                        <img src="uploads/service-5.jpg" alt="">
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="list">
                        <div class="sub-ttl font-28">List</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List</div>
                                    <ul class="list-group">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List</div>
                                    <ul class="list-group list-light">
                                        <li class="list-group-item active text-dark">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List</div>
                                    <ul class="list-group list-danger">
                                        <li class="list-group-item active">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List</div>
                                    <ul class="list-group list-info">
                                        <li class="list-group-item active">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List with Badge</div>
                                    <ul class="list-group list-primary">
                                        <li class="list-group-item active">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in<span class="badge badge-primary badge-pill m-l-10">14</span></li>
                                        <li class="list-group-item">Morbi leo risus<span class="badge badge-success badge-pill m-l-10">14</span></li>
                                        <li class="list-group-item">Porta ac consectetur ac<span class="badge badge-danger badge-pill m-l-10">14</span></li>
                                        <li class="list-group-item">Vestibulum at eros<span class="badge badge-warning badge-pill m-l-10">14</span></li>
                                        <li class="list-group-item">Morbi leo risus<span class="badge badge-info badge-pill m-l-10">14</span></li>
                                        <li class="list-group-item">Porta ac consectetur ac<span class="badge badge-primary badge-pill m-l-10">14</span></li>
                                        <li class="list-group-item">Vestibulum at eros<span class="badge badge-secondary badge-pill m-l-10 text-dark">14</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List with Badge</div>
                                    <ul class="list-group list-success">
                                        <li class="list-group-item active">Cras justo odio</li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in<span class="badge badge-primary badge-pill">14</span></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus<span class="badge badge-success">14</span></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Porta ac consectetur ac<span class="badge badge-danger">14</span></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros<span class="badge badge-warning">14</span></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus<span class="badge badge-info">14</span></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Porta ac consectetur ac<span class="badge badge-primary">14</span></li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros<span class="badge badge-secondary text-dark">14</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List with Anchor</div>
                                    <ul class="list-group list-info">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            Cras justo odio
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Basic List with Anchor</div>
                                    <ul class="list-group list-success">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            Cras justo odio
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Tab bar List</div>
                                    <div class="row font-16">
                                        <div class="col-4">
                                            <div class="list-group list-danger" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam repellendus, facilis fugit nisi rem, perspiciatis accusamus tempora repudiandae debitis id distinctio enim placeat dolore quasi magni asperiores, eum vitae soluta.</div>
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam. </div>
                                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</div>
                                                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Tab bar List</div>
                                    <div class="row font-16">
                                        <div class="col-4">
                                            <div class="list-group list-primary" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam repellendus, facilis fugit nisi rem, perspiciatis accusamus tempora repudiandae debitis id distinctio enim placeat dolore quasi magni asperiores, eum vitae soluta.</div>
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam. </div>
                                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</div>
                                                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Categories</div>
                                    <ul class="category-list">
                                        <li><a href="#"><i class="fa fa-newspaper-o"></i>News</a><span>(10)</span></li>
                                        <li><a href="#"><i class="fa fa-history"></i>History</a><span>(20)</span></li>
                                        <li><a href="#"><i class="fa fa-th"></i>Mythology</a><span>(9)</span></li>
                                        <li><a href="#"><i class="fa fa-cloud"></i>Technology</a><span>(21)</span></li>
                                        <li><a href="#"><i class="fa fa-flask"></i>Science</a><span>(13)</span></li>
                                        <li><a href="#"><i class="fa fa-info-circle"></i>New Disese</a><span>(7)</span></li>
                                        <li><a href="#"><i class="fa fa-hospital-o"></i>Health</a><span>(5)</span></li>
                                        <li><a href="#"><i class="fa fa-wheelchair-alt"></i>wellness</a><span>(8)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <div class="sub-ttl">Categories</div>
                                    <ul class="category-list">
                                        <li><a href="#"><i class="fa fa-newspaper-o"></i>News</a><span class="badge badge-secondary">10</span></li>
                                        <li><a href="#"><i class="fa fa-history"></i>History</a><span class="badge badge-danger text-white">20</span></li>
                                        <li><a href="#"><i class="fa fa-th"></i>Mythology</a><span class="badge badge-warning text-white">9</span></li>
                                        <li><a href="#"><i class="fa fa-cloud"></i>Technology</a><span class="badge badge-success text-white">21</span></li>
                                        <li><a href="#"><i class="fa fa-flask"></i>Science</a><span class="badge badge-info text-white">13</span></li>
                                        <li><a href="#"><i class="fa fa-info-circle"></i>New Disese</a><span class="badge badge-warning text-white">7</span></li>
                                        <li><a href="#"><i class="fa fa-hospital-o"></i>Health</a><span class="badge badge-danger text-white">5</span></li>
                                        <li><a href="#"><i class="fa fa-wheelchair-alt"></i>wellness</a><span class="badge badge-success text-white">8</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-md-6">
                                <div class="theme-material-card">
                                    <ul class="theme-list">
                                        <li><i class="fa fa-arrow-right color-green"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-arrow-right color-green"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-arrow-right color-green"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-arrow-right color-green"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-arrow-right color-green"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-arrow-right color-green"></i>Asperiores quis voluptates voluptas</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="theme-material-card">
                                    <ul class="theme-list">
                                        <li><i class="fa fa-hand-o-right color-orange"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-hand-o-right color-orange"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-hand-o-right color-orange"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-hand-o-right color-orange"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-hand-o-right color-orange"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-hand-o-right color-orange"></i>Asperiores quis voluptates voluptas</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="col-md-6">
                                <div class="sidebar">
                                    <ul class="theme-list">
                                        <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas</li>
                                        <li><i class="fa fa-dot-circle-o color-blue"></i>Asperiores quis voluptates voluptas</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sidebar">
                                    <ol class="theme-list">
                                        <li>1. Asperiores quis voluptates voluptas</li>
                                        <li>2. Asperiores quis voluptates voluptas</li>
                                        <li>3. Asperiores quis voluptates voluptas</li>
                                        <li>4. Asperiores quis voluptates voluptas</li>
                                        <li>5. Asperiores quis voluptates voluptas</li>
                                        <li>6. Asperiores quis voluptates voluptas</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sidebar">
                                    <ol class="theme-list-basic">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nemo.</li>
                                        <li>Ipsa necessitatibus, totam facere perferendis rem itaque, velit laborum adipisci!</li>
                                        <li>Consectetur alias ad ducimus impedit repellat non facilis excepturi amet.</li>
                                        <li>Beatae dolore vero accusantium ab omnis ipsa, temporibus illo ducimus!</li>
                                        <li>Beatae numquam perspiciatis quos consectetur nisi velit, eligendi, culpa error.</li>
                                    </ol> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sidebar">
                                    <ul class="theme-list-basic">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nemo.</li>
                                        <li>Ipsa necessitatibus, totam facere perferendis rem itaque, velit laborum adipisci!</li>
                                        <li>Consectetur alias ad ducimus impedit repellat non facilis excepturi amet.</li>
                                        <li>Beatae dolore vero accusantium ab omnis ipsa, temporibus illo ducimus!</li>
                                        <li>Beatae numquam perspiciatis quos consectetur nisi velit, eligendi, culpa error.</li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dropcap">
                        <div class="sub-ttl font-28">Dropcap</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <p class="paragraph-small paragraph-black"><span class="theme-dropcap color-green">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fuga odio blanditiis delectus ex quisquam suscipit assumenda in iusto fugiat ut, porro, doloribus quam laboriosam explicabo maxime sed accusamus doloremque!</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <p class="paragraph-small paragraph-black"><span class="theme-dropcap color-orange">S</span>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <p class="paragraph-small paragraph-black"><i class="fa fa-user-md theme-dropcap color-purple"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.e</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="theme-material-card">
                                    <p class="paragraph-small paragraph-black"><i class="fa fa-stethoscope theme-dropcap color-blue"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.e</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="panel">
                        <div class="sub-ttl">Panel</div>
                        <div class="theme-material-card">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="panel panel-default mb-4">
                                        <div class="panel-heading">Panel with panel-default class</div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum itaque ex adipisci corrupti alias obcaecati sed aspernatur nesciunt ipsam iusto, in facilis, doloribus debitis beatae vel numquam, veritatis tenetur provident.</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-default button-sm">Click Here</a>
                                        </div>
                                        <div class="panel-footer">Panel Footer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-priamry mb-4">
                                        <div class="panel-heading">Panel with panel-primary class</div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum itaque ex adipisci corrupti alias obcaecati sed aspernatur nesciunt ipsam iusto, in facilis, doloribus debitis beatae vel numquam, veritatis tenetur provident.</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-blue button-fill-blue button-sm">Click Here</a>
                                        </div>
                                        <div class="panel-footer">Panel Footer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-warning mb-4">
                                        <div class="panel-heading">Panel with panel-warning class</div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum itaque ex adipisci corrupti alias obcaecati sed aspernatur nesciunt ipsam iusto, in facilis, doloribus debitis beatae vel numquam, veritatis tenetur provident.</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-orange button-fill-orange button-sm">Click Here</a>
                                        </div>
                                        <div class="panel-footer">Panel Footer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-success mb-4">
                                        <div class="panel-heading">Panel with panel-success class</div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum itaque ex adipisci corrupti alias obcaecati sed aspernatur nesciunt ipsam iusto, in facilis, doloribus debitis beatae vel numquam, veritatis tenetur provident.</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-green button-fill-green button-sm">Click Here</a>
                                        </div>
                                        <div class="panel-footer">Panel Footer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-success mb-4">
                                        <div class="panel-heading"><i class="fa fa-user-o font-20 mr-10"></i> Panel with Icon & Dropcap</div>
                                        <div class="panel-body">
                                            <p><i class="fa fa-user-md theme-dropcap color-purple"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum itaque ex adipisci corrupti alias obcaecati sed aspernatur nesciunt ipsam iusto, in facilis, doloribus debitis beatae vel numquam, veritatis tenetur provident.</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-green button-fill-green button-sm">Click Here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-default mb-4">
                                        <div class="panel-heading">Panel with Badge <span class="badge badge-danger badge-pill float-right">Latest</span></div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum itaque ex adipisci corrupti alias obcaecati sed aspernatur nesciunt ipsam iusto, in facilis, doloribus debitis beatae vel numquam, veritatis tenetur provident.</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-green button-fill-green button-sm">Click Here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-default mb-4">
                                        <div class="panel-heading">Panel with Badge <span class="badge badge-danger badge-pill float-right">Latest</span></div>
                                        <div class="panel-wrapper">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Profession</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dr. Daniel Barnes</td>
                                                        <td>Orthologist</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Dr. Cheri Aria</td>
                                                        <td>Dermatologist</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Dr. Melisa Bates</td>
                                                        <td>Gynocologist</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Dr. Steve Soeren</td>
                                                        <td>Gynocologist</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-default mb-4">
                                        <div class="panel-heading">Panel with Badge</div>
                                        <div class="panel-wrapper">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Profession</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Dr. Daniel Barnes</td>
                                                        <td>Orthologist</td>
                                                        <td class="text-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dr. Cheri Aria</td>
                                                        <td>Dermatologist</td>
                                                        <td class="text-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dr. Melisa Bates</td>
                                                        <td>Gynocologist</td>
                                                        <td class="text-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dr. Steve Soeren</td>
                                                        <td>Gynocologist</td>
                                                        <td class="text-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-dark"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close font-16 color-red m-l-10"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs">
                        <div class="sub-ttl">Tabbar</div>
                        <div class="theme-material-card">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#home" role="tab" data-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#profile" role="tab" data-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#appointment" role="tab" data-toggle="tab">Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#request" role="tab" data-toggle="tab">Request</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="p-2">
                                        <h5>Home Tab</h5>
                                        <p class="font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, dolor alias eos veniam blanditiis perferendis ullam, animi maiores dicta magnam beatae hic praesentium inventore voluptates culpa numquam facilis, fugiat exercitationem.</p>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="p-2">
                                        <h5>Profile Tab</h5>
                                        <p class="font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eaque perspiciatis totam adipisci itaque culpa exercitationem voluptatibus, labore eveniet ex, error et nesciunt illo ipsum accusamus ab ratione necessitatibus nihil.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="appointment">
                                    <div class="p-2">
                                        <h5>Appointment Tab</h5>
                                        <p class="font-14">Natus aspernatur ut totam quis et, repellat maiores voluptas dolore sed aliquam delectus doloremque atque dolorum accusantium a. Officia neque quas error veritatis sed, id earum voluptas! Ea, eum, ratione!</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="request">
                                    <div class="p-2">
                                        <h5>Request Tab</h5>
                                        <p class="font-14">Error quam nostrum nihil laboriosam, consequuntur aliquam voluptas facere enim architecto dolorem optio illo pariatur, vero eum consectetur cupiditate ducimus autem culpa, aut qui. Vitae porro officia recusandae commodi animi.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="theme-material-card">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#home1" role="tab" data-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#profile1" role="tab" data-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#appointment1" role="tab" data-toggle="tab">Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#request1" role="tab" data-toggle="tab">Request</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home1">
                                    <div class="p-2">
                                        <h5>Home Tab</h5>
                                        <p class="font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, dolor alias eos veniam blanditiis perferendis ullam, animi maiores dicta magnam beatae hic praesentium inventore voluptates culpa numquam facilis, fugiat exercitationem.</p>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile1">
                                    <div class="p-2">
                                        <h5>Profile Tab</h5>
                                        <p class="font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eaque perspiciatis totam adipisci itaque culpa exercitationem voluptatibus, labore eveniet ex, error et nesciunt illo ipsum accusamus ab ratione necessitatibus nihil.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="appointment1">
                                    <div class="p-2">
                                        <h5>Appointment Tab</h5>
                                        <p class="font-14">Natus aspernatur ut totam quis et, repellat maiores voluptas dolore sed aliquam delectus doloremque atque dolorum accusantium a. Officia neque quas error veritatis sed, id earum voluptas! Ea, eum, ratione!</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="request1">
                                    <div class="p-2">
                                        <h5>Request Tab</h5>
                                        <p class="font-14">Error quam nostrum nihil laboriosam, consequuntur aliquam voluptas facere enim architecto dolorem optio illo pariatur, vero eum consectetur cupiditate ducimus autem culpa, aut qui. Vitae porro officia recusandae commodi animi.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div id="alerts">
                        <div class="sub-ttl">Alerts</div>
                        <div class="theme-material-card">
                            <p class="font-14">NORMAL ALERTS</p>
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> You successfully read this important alert message.
                            </div>
                            <div class="alert alert-info" role="alert">
                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                            </div>
                            <p class="font-14 mt-4">DISMISSABLE ALERTS</p>
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> You successfully read this important alert message.
                                <button type="button" class="close" data-dismiss="alert">×</button>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                <button type="button" class="close" data-dismiss="alert">×</button>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                <button type="button" class="close" data-dismiss="alert">×</button>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                <button type="button" class="close" data-dismiss="alert">×</button>
                            </div>
                            <p class="font-14 mt-4">ADDITIONAL CONTENT ALERTS</p>
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div> 
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div> 
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div> 
                        </div>
                    </div>
                    <div id="progressbar">
                        <div class="sub-ttl font-28">Progress Bar</div>
                        <div class="theme-material-card">
                            <p class="font-16">Basic Progress Bar</p>
                            <div class="progress progress-md mb-3">
                                <div class="progress-" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-md mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-lg mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-5"></p>
                            <p class="font-16">Colored Progress Bar</p>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-5"></p>
                            <p class="font-16">Multiple Color Progress Bar</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-5"></p>
                            <p class="font-16">Striped Progress Bar</p>
                            <p class="font-12">Task 0</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="font-12">Task 1</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="font-12">Task 2</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="font-12">Task 3</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="font-12">Task 4</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div id="social">
                        <div class="sub-ttl font-28">Social Style</div>
                        <div class="theme-material-card">
                            <ul class="social-list social-list-sm">
                                <li>
                                    <a href="#" id="sample-facebook-2"><i class="fa fa-facebook"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-facebook-2">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-2"><i class="fa fa-twitter"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-twitter-2">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-2"><i class="fa fa-google"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-google-2">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-2"><i class="fa fa-instagram"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-instagram-2">Instagram
                                    </span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-2"><i class="fa fa-youtube"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-youtube-2">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-2"><i class="fa fa-linkedin"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-linkedin-2">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-2"><i class="fa fa-flickr"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-flickr-2">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-2"><i class="fa fa-rss" ></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-rss-2">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list">
                                <li>
                                    <a href="#" id="sample-facebook-2"><i class="fa fa-facebook"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-facebook-2">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-2"><i class="fa fa-twitter"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-twitter-2">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-2"><i class="fa fa-google"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-google-2">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-2"><i class="fa fa-instagram"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-instagram-2">Instagram
                                    </span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-2"><i class="fa fa-youtube"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-youtube-2">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-2"><i class="fa fa-linkedin"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-linkedin-2">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-2"><i class="fa fa-flickr"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-flickr-2">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-2"><i class="fa fa-rss" ></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-rss-2">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-lg">
                                <li>
                                    <a href="#" id="sample-facebook-2"><i class="fa fa-facebook"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-facebook-2">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-2"><i class="fa fa-twitter"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-twitter-2">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-2"><i class="fa fa-google"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-google-2">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-2"><i class="fa fa-instagram"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-instagram-2">Instagram
                                    </span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-2"><i class="fa fa-youtube"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-youtube-2">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-2"><i class="fa fa-linkedin"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-linkedin-2">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-2"><i class="fa fa-flickr"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-flickr-2">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-2"><i class="fa fa-rss" ></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-rss-2">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-bordered">
                                <li>
                                    <a href="#" id="sample-facebook-6" class="fa fa-facebook rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-6">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-6" class="fa fa-twitter rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-6">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-6" class="fa fa-google rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-6">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-6" class="fa fa-instagram rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-6">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-6" class="fa fa-youtube rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-6">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-6" class="fa fa-linkedin rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-6">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-6" class="fa fa-flickr rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-6">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-6" class="fa fa-rss rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-6">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-black rounded">
                                <li>
                                    <a href="#" id="sample-facebook-5" class="fa fa-facebook rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-5">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-5" class="fa fa-twitter rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-5">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-5" class="fa fa-google rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-5">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-5" class="fa fa-instagram rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-5">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-5" class="fa fa-youtube rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-5">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-5" class="fa fa-linkedin rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-5">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-5" class="fa fa-flickr rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-5">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-5" class="fa fa-rss rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-5">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-black">
                                <li>
                                    <a href="#" id="sample-facebook-3" class="fa fa-facebook"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-3">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-3" class="fa fa-twitter"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-3">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-3" class="fa fa-google"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-3">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-3" class="fa fa-instagram"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-3">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-3" class="fa fa-youtube"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-3">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-3" class="fa fa-linkedin"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-3">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-3" class="fa fa-flickr"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-3">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-3" class="fa fa-rss"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-3">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-colored">
                                <li>
                                    <a href="#" id="sample-facebook-4" class="fa fa-facebook rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-4">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-4" class="fa fa-twitter rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-4">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-4" class="fa fa-google rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-4">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-4" class="fa fa-instagram rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-4">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-4" class="fa fa-youtube rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-4">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-4" class="fa fa-linkedin rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-4">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-4" class="fa fa-flickr rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-4">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-4" class="fa fa-rss rounded"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-4">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-colored">
                                <li>
                                    <a href="#" id="sample-facebook-1" class="fa fa-facebook"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-1">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-1" class="fa fa-twitter"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-1">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-1" class="fa fa-google"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-1">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-1" class="fa fa-instagram"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-1">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-1" class="fa fa-youtube"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-1">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-1" class="fa fa-linkedin"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-1">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-1" class="fa fa-flickr"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-1">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-1" class="fa fa-rss"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-1">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <ul class="social-list social-list-lg social-list-colored">
                                <li>
                                    <a href="#" id="sample-facebook-1" class="fa fa-facebook"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-1">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-twitter-1" class="fa fa-twitter"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-1">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-google-1" class="fa fa-google"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-1">Google</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-instagram-1" class="fa fa-instagram"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-1">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-1" class="fa fa-youtube"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-1">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-linkedin-1" class="fa fa-linkedin"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-1">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-flickr-1" class="fa fa-flickr"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-1">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" id="sample-rss-1" class="fa fa-rss"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-1">Rss</span>
                                </li>
                            </ul>
                            <p></p>
                            <div class="bg-primary">
                                <ul class="social-list social-list-white">
                                    <li>
                                        <a href="#" id="sample-facebook-1" class="fa fa-facebook"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-1">Facebook</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-twitter-1" class="fa fa-twitter"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-1">Twitter</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-google-1" class="fa fa-google"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-google-1">Google</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-instagram-1" class="fa fa-instagram"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-1">Instagram</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-youtube-1" class="fa fa-youtube"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-1">Youtube</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-linkedin-1" class="fa fa-linkedin"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-1">Linkedin</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-flickr-1" class="fa fa-flickr"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-flickr-1">Flickr</span>
                                    </li>
                                    <li>
                                        <a href="#" id="sample-rss-1" class="fa fa-rss"></a>
                                        <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-rss-1">Rss</span>
                                    </li>
                                </ul>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div id="shortcodes-menu" class="theme-material-card">
                        <ul class="category-list">
                            <li><a href="#typography"><i class="fa fa-graduation-cap"></i>Typography</a><span>(10+)</span></li>
                            <li><a href="#card"><i class="fa fa-credit-card"></i>Card</a><span>(20+)</span></li>
                            <li><a href="#slider"><i class="fa fa-slideshare"></i>Slider</a><span>(04)</span></li>
                            <li><a href="#images"><i class="fa fa-picture-o"></i>Images</a><span>(03)</span></li>
                            <li><a href="#accordion"><i class="fa fa-expand"></i>Accordian</a><span>(02)</span></li>
                            <li><a href="#form"><i class="fa fa-wpforms"></i>Form Input</a><span>(10)</span></li>
                            <li><a href="#table"><i class="fa fa-table"></i>Table &#38; Pagination</a><span>(12+)</span></li>
                            <li><a href="#button"><i class="fa fa-tags"></i>Button &#38; Dropdown</a><span>(100+)</span></li>
                            <li><a href="#list"><i class="fa fa-list"></i>List</a><span>(18)</span></li>
                            <li><a href="#panel"><i class="fa fa-list"></i>Panel</a><span>(8)</span></li>
                            <li><a href="#tabs"><i class="fa fa-list"></i>Tabbar</a><span>(2+)</span></li>
                            <li><a href="#alerts"><i class="fa fa-list"></i>Alerts</a><span>(10+)</span></li>
                            <li><a href="#progressbar"><i class="fa fa-list"></i>Progressbar</a><span>(10+)</span></li>
                            <li><a href="#dropcap"><i class="fa fa-graduation-cap"></i>Dropcap</a><span>(02+)</span></li>
                            <li><a href="#social"><i class="fa fa-graduation-cap"></i>Social Style</a><span>(10+)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection