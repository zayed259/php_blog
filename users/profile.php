<?php
require_once("../assets/inc/configuration.php");
$page = "Profile";
include "partial/header.php";
?>
<div id="colorlib-main">
    <div class="container-fluid pt-1">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- Home -->
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="col-xl-12 py-5 px-md-5">
                    <div class="row pt-md-4">
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_1.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">A Loving Heart is the Truest
                                            Wisdom</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_2.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">Great Things Never Came from Comfort
                                            Zone</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_3.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">Paths Are Made by Walking</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span>Dec 14, 2018</span>
                                            <span><a href="single.html">Lifestyle</a></span>
                                            <span>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_4.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">The Secret of Getting Ahead is
                                            Getting Started</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span>Dec 14, 2018</span>
                                            <span><a href="single.html">Nature</a></span>
                                            <span>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_5.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span>Dec 14, 2018</span>
                                            <span><a href="single.html">Lifestyle</a></span>
                                            <span>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_6.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span>Dec 14, 2018</span>
                                            <span><a href="single.html">Travel</a></span>
                                            <span>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_7.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span>Dec 14, 2018</span>
                                            <span><a href="single.html">Travel</a></span>
                                            <span>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_8.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_9.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_10.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span>Dec 14, 2018</span>
                                            <span><a href="single.html">Lifestyle</a></span>
                                            <span>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_11.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2" style="background-image: url(../assets/images/image_12.jpg);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling
                                            in Love</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia.</p>
                                    <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- END-->
                    <div class="row">
                        <div class="col">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- profile -->
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">profile</div>
            <!-- contact -->
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">Contact</div>
        </div>
    </div>
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<?php include 'partial/footer.php'; ?>

</body>

</html>