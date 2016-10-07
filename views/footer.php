<footer class="footer-section charcoal-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--copyright, date and links-->
                <br/>

                <?php
                    $comment = null;
                    if(!empty($_POST)) $comment = $_POST['comment'];
                    if(!empty($comment)){
                       $contact = new ContactUs($comment['name'],$comment['email'],$comment['subject'],$comment['message']);
                       if($contact->SendMessage())
                           require('views/success.html');
                        else
                           require('views/footer.html');   
                    }
                    else{
                           require('views/footer.html'); 
                    }
                ?>
                    <hr class="col-lg-8 col-md-8 col-sm-8 col-xs-8  col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" />
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <h4 class="text-center foot-notes"><a href="">The Stadium Hotel</a> &copy; 2016</h4>
                        <h4 class="text-center foot-notes">Designed &amp; Developed by <a href="http://www.belgiumcampus.ac.za">Belgium Campus</a></h4>
                    </div>
            </div>
        </div>
</footer>

</div>

<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/app/app.js"></script>
<script src="js/booking.js"></script>
</body>

</html>
