<?php include('includes/header.php')?>
<style>
    .contact-info .social li a i{
        margin-top:7px;
    }
</style>
<section  style="padding-top:50px; padding-bottom:0px;">
    <img src="https://arteno.in/assets/banners/contact%20banner-min.jpg">
</section>
 <section class="contact-area bg-dark ptb-60">
        <div class="container">
            <!--<div class="section-title mb-2 mt-3">-->
            <!--    <h2></span> Contact Us</h2>-->
            <!--</div>-->
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-info">
                        <h3>Queries, qualms or testimonials. We welcome you to write to us and give us your valuable feedback.</h3>
                        <!--<p>Have a question? You may find an answer in our FAQs. But you can also contact us.</p>-->
                        <ul class="contact-list">
                            <li><i class="fas fa-map-marker-alt"></i> Location: 10 LGF, RPS Green Valley Plaza, Sector 42, Faridabad, Haryana, India</li>
                            <li><i class="fas fa-phone"></i> Call Us: <a href="telto:+91 129-4015046 ">+91 129-4015046 </a></li>
                            <li><i class="far fa-envelope"></i> Email Us: <a href="mailto:customersupport@arteno.in ">customersupport@arteno.in </a>
                            </li>
                            <!--<li><i class="fas fa-fax"></i> Fax: <a href="#">+123456</a></li>-->
                        </ul>
                        <h3>Opening Hours:</h3>
                        <ul class="opening-hours">
                            <li><span> Monday - Saturday: </span>9am - 11pm</li>
                            <li><span>Sunday :</span> 11am - 5Pm:</li>
                            <!--<li><span>Wednesday:</span> 8AM - 6AM</li>-->
                            <!--<li><span>Thursday - Friday:</span> 8AM - 6AM</li>-->
                            <!--<li><span>Sunday:</span> Closed</li>-->
                        </ul>
                        <h3>Follow Us:</h3>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/Arteno-100223201838813" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                            <li><a href="https://instagram.com/arteno_official?igshid=1d6y4qxyagwjf"><i class="fab fa-instagram" target="_blank"></i></a></li>
                            <li><a href="mailto:Customersupport@arteno.in"><i class="fa fa-envelope"></i></a></li>
                            <!--<li><a href="#"><i class="fab fa-skype"></i></a></li>-->
                            <!--<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
                            <!--<li><a href="#"><i class="fab fa-youtube"></i></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form card card-body shadow-sm">
                        <h3>Drop Us A Line</h3>
                        <p>We’re happy to answer any questions you have or provide you with an estimate. Just send us a
                            message in the form below with any questions you may have.</p>
                        <form >
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Name <span>(required)*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email <span>(required)*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Enter your Email Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone Number <span>(required)*</span></label>
                                        <input type="text" name="phone_number" id="phone_number" class="form-control"
                                            required data-error="Please enter your phone number"
                                            placeholder="Enter your Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Message <span>(required)*</span></label>
                                        <textarea name="message" id="message" cols="30" rows="8" required
                                            data-error="Please enter your message" class="form-control"
                                            placeholder="Enter your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="button" onclick="contact()" class="btn btn-primary">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.2774152569264!2d77.29332231507891!3d28.471190982481748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce7892010141f%3A0xb976ede910a029df!2sArteno%20Creations%20Private%20Limited!5e0!3m2!1sen!2sin!4v1606521153196!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
<?php include('includes/footer.php'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function contact() {
        var name = $("#name").val();
        var mail = $("#email").val();
        var phone = $("#phone_number").val();
        var message = $("#message").val();
        if(name!="" && mail!="" && phone!="" && message!="" ){
            $.ajax({
                url:"<?= base_url()?>home/contact_us/",
                method:"POST",
                data:{'name':name,'mail':mail,'phone':phone_number,'message':message},
                success:function(result){
                    if(result!=0){
                        swal("You request has been sent successfully!", {
                            icon: "success",
                            button: false,
                            timer: 1200
                        });
                    }
                }
            });
        } else {
            swal(" Please enter correct details", {
                icon: "warning",
                button: false,
                timer: 1200
            });
        }
    }
</script>