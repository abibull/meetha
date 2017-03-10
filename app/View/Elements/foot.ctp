<div id="">
    <!-- *** FOOTER ***
     _________________________________________________________ -->
    <div id="footer" data-animate="fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Pages</h4>

                    <ul>
                        <li><a href="#">About us</a>
                        </li>
                        <li><a href="/meetha/products/term">Terms and conditions</a>
                        </li>
                        <li><a href="#">FAQ</a>
                        </li>
                        <li><a href="/meetha/products/contact">Contact us</a>
                        </li>
                    </ul>

                    <hr>

                    <h4>User section</h4>

                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li>
                        <?php echo $this->Html->link('Register' , array('controller' => 'users' , 'action'=> 'signup'));?>
                        </li>
                    </ul>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Categories</h4>

                    <h5>Sweets Made From</h5>

                    <ul>
                        <li><a href="#">Dryfruits</a>
                        </li>
                        <li><a href="#">Milk</a>
                        </li>
                        <li><a href="#">Desi Ghee</a>
                        </li>
                    </ul>

                    <h5>Namkeens</h5>
                    <ul>
                        <li><a href="#">Kaju Masala</a>
                        </li>
                        <li><a href="#">Kaju Namak</a>
                        </li>
                        <li><a href="#">Badam Masala</a>
                        </li>
                    </ul>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Where to find us</h4>

                    <p><strong>Mithai Wala</strong>
                        <br>Chauraha Mendu Gate,
                        <br>Police Chauki
                        <br>204101
                        <br>Hathras
                        <br>
                        <strong>India</strong>
                    </p>

                    <?php echo $this->Html->link('Go to contact page',array('controller'=>'products','action'=>'contact'));?>

                    <hr class="hidden-md hidden-lg">
                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Get the news</h4>

                    <p class="text-muted">Information about those sweets or namkeens which will make for festival special.</p>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                                <button class="btn btn-default" type="button">Subscribe!</button>

                             </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr>

                    <h4>Stay in touch</h4>

                    <p class="social">
                        <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                    </p>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#footer -->

    <!-- *** FOOTER END *** -->

    <!-- *** COPYRIGHT ***
_________________________________________________________ -->
    <div id="copyright">
        <div class="container">
            <div class="col-md-6">
                <p class="pull-left">© 2016 Mithai Wala</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">Designed by <a href="">MOHIT SHARMA</a>
                </p>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END *** -->
</div>