<?php
//  $name = $this->session->userdata('first_name');
//  $title = $this->session->userdata('name_title');

?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bansal Pathshala</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="<?=base_url('public/')?>assets\images\fav-icon\bp_logo.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/animate.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/animate.min.css" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/animated-text.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>venobox/venobox.css" type="text/css" media="all">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/bootstrap-icons.css" type="text/css" media="all">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/quiz.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/parth.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/lightboxgallery.css" type="text/css" media="all">

    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/dropdown.css" type="text/css" media="all">

    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/responsive.css" type="text/css" media="all">

    <!-- custom style -->
    <link rel="stylesheet" href="<?=base_url('public/')?>assets/css/custom-style.css" type="text/css" media="all">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- modernizr js -->
    <script src="<?=base_url('public/')?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!--link added by Amit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<section class="quiz">

<div class="thrown-header-area style-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1">
                    <div class="header-logo style-three">
                        <a href="index.php"><img width="250px ; height:250px;" src="<?=base_url('public/')?>assets/images/bp_logo.png"
                                class="main_logo" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>
                        <span class="header-logo-text"><b>BANSAL</b><br>PATHSHALA</span>
                    </div>
                </div>



                <!-- <div class="col-lg-2">
                    <div class="search-container">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div> -->
            </div>
            <!-- <div class="side-menu-info">
                <div class="sidebar-menu">
                    <a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Thrown Mobile Menu Area -->

</section>

<section class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="quiz-start">
                    <div class="text-center">
                        <h3>OnLine Quiz</h3>
                        <p style="color: red;">Time left : <span id="timer"></span></p>
                    </div>
                    <div class="mt-5">
                        <form id="msform" name="question-form" method="POST"
                            action="<?php echo base_url(); ?>save-answer">

                            <?php

                            if(count($question) > 0)
                            {
                                $counter = 1;

                                foreach($question as $quest){

                            ?>

                            <fieldset>
                                <hr />
                                <p style="text-align: left;">Question <?php echo $counter; ?> of
                                    <?php echo count($question); ?></p>

                                <hr />
                                <div class="text-left">
                                    <h4 class="quiz-heading"><?php echo $quest->question; ?></h4>

									<?php

                                    if($quest->add_by_import == '1' && !empty($quest->file))
                                    {
                                        ?>



                                     <img width="250px ; height:250px;" src="<?php echo $quest->file; ?>" alt="bansal-pathshala">

                                    <?php   } else if(isset($quest->file) && !empty($quest->file)){ ?>




									<img width="250px ; height:250px;" src="<?=base_url()?>admin/uploads/question_image/<?php echo $quest->file; ?>" alt="bansal-pathshala">

									<?php }else{ ?>

                                        <?php } ?>


                                    <div class="quiz-row">

                                        <div class="q-tab">
                                            <label class="radio">
                                            <?php

                                        if($quest->add_by_import == '1'  && !empty($quest->file_a))
                                        {
                                            ?>

                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_a; ?>" alt="bansal-pathshala">

                                        <?php   } else if(isset($quest->file_a)  && !empty($quest->file_a) ){ ?>




                                        <img width="250px ; height:250px;" src="<?=base_url()?>admin/uploads/question_image/<?php echo $quest->file_a; ?>" alt="bansal-pathshala">

                                        <?php }else{ ?>

                                            <?php } ?>

                                                <input type="radio" value="option_1"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option1; ?>
                                            </label>
                                        </div>

                                        <div class="q-tab">
                                            <label class="radio">
											<?php

                                        if($quest->add_by_import == '1'  && !empty($quest->file_b))
                                        {
                                            ?>

                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_b; ?>" alt="bansal-pathshala">

                                        <?php   } else if(isset($quest->file_b)  && !empty($quest->file_b)){ ?>




                                        <img width="250px ; height:250px;" src="<?=base_url()?>admin/uploads/question_image/<?php echo $quest->file_b; ?>" alt="bansal-pathshala">

                                        <?php }else{ ?>

                                            <?php } ?>
                                                <input type="radio" value="option_2"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option2; ?>
                                            </label>
                                        </div>

                                        <div class="q-tab">
                                            <label class="radio">
											<?php

                                        if($quest->add_by_import == '1'  && !empty($quest->file_c))
                                        {
                                            ?>

                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_c; ?>" alt="bansal-pathshala">

                                        <?php   } else if(isset($quest->file_c)  && !empty($quest->file_c)){ ?>




                                        <img width="250px ; height:250px;" src="<?=base_url()?>admin/uploads/question_image/<?php echo $quest->file_c; ?>" alt="bansal-pathshala">

                                        <?php }else{ ?>

                                            <?php } ?>
                                                <input type="radio" value="option_3"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option3; ?>
                                            </label>
                                        </div>

                                        <div class="q-tab">
                                            <label class="radio">
											<?php

                                        if($quest->add_by_import == '1'  && !empty($quest->file_d))
                                        {
                                            ?>

                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_d; ?>" alt="bansal-pathshala">

                                        <?php   } else if(isset($quest->file_d)){ ?>




                                        <img width="250px ; height:250px;" src="<?=base_url()?>admin/uploads/question_image/<?php echo $quest->file_d; ?>" alt="bansal-pathshala">

                                        <?php }else{ ?>

                                            <?php } ?>
                                                <input value="option_4" type="radio"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option4; ?>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <hr>


                                <?php
                                if($counter != 1)
                                {
                                ?>

                                <?php }



                            if($counter == count($question))
                            { ?>

                                <input type="submit" name="submit" id="sbmtbtn" onclick="return submitAnswer();"
                                    class="action-button" value="Submit" />
                                <?php } else {  ?>


									<input type="button" name="preview" id="defaultbtnprv" class="previous action-button" value="Preview" />


                                <input type="button" name="next" id="defaultbtnnxt" class="next action-button"
                                    value="Next" />



                                    <!-- <input type="button" name="next" id="defaultbtnnxt" class="action-button"
                                    value="Next" /> -->

                                <?php } ?>

                            </fieldset>
                            <?php  $counter++;
                                }
                            } ?>
                            <input type="hidden" name="quizid" value="<?php echo $question[0]->quiz_id; ?>">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<script type="text/javascript">
function submitAnswer() {

    let attempt = 0;
    $(".ans-opt").each(function() {
        if ($(this).prop("checked")) {
            attempt++;
        }
    });
   /*  if (confirm('Total question attempted : ' + attempt + '\n Are you sure to submit your answer ?')) */

        return true;}

   /*  else
        return false;
 */
</script>

</body>

</html>

<?php
$count_down = !empty($time) && isset($time[0]->quiz_duration) ? $time[0]->quiz_duration : '0 min';
$duration = trim($count_down, 'min');
?>
<script>

document.getElementById('timer').innerHTML = <?php echo json_encode($duration); ?> + ":" + 59;
startTimer();

function startTimer() {
    var presentTime = document.getElementById('timer').innerHTML;
    var timeArray = presentTime.split(/[:]+/);
    var m = timeArray[0];
    var second = checkSecond((timeArray[1] - 1));

    if (second == 59) {
        m = m - 1;
    }
    document.getElementById('timer').innerHTML = m + ":" + second;

    if (second == 00 && m == 00) {
        $("#sbmtbtn").click();
    }

    setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {
        sec = "0" + sec;
    }
    if (sec < 0) {
        sec = "59";
    }

    return sec;
}
</script>


<!-- footer


-->

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

</script>
<!--==================================================-->
<!-- End sticky form Area -->
<!--==================================================-->


<!-- jquery js -->
<script src="<?=base_url('public/')?>assets/js/vendor/jquery-3.6.2.min.js"></script>

<script src="<?=base_url('public/')?>assets/js/popper.min.js"></script>

<!-- bootstrap js -->
<script src="<?=base_url('public/')?>assets/js/bootstrap.min.js"></script>

<!-- carousel js -->
<script src="<?=base_url('public/')?>assets/js/owl.carousel.min.js"></script>

<!-- counterup js -->
<script src="<?=base_url('public/')?>assets/js/jquery.counterup.min.js"></script>

<!-- waypoints js -->
<script src="<?=base_url('public/')?>assets/js/waypoints.min.js"></script>

<!-- wow js -->
<script src="<?=base_url('public/')?>assets/js/wow.min.js"></script>

<!-- imagesloaded js -->
<script src="<?=base_url('public/')?>assets/js/imagesloaded.pkgd.min.js"></script>

<!-- venobox js -->
<script src="<?=base_url('public/')?>venobox/venobox.js"></script>

<!--  animated-text js -->
<script src="<?=base_url('public/')?>assets/js/animated-text.js"></script>

<!-- venobox min js -->
<script src="<?=base_url('public/')?>venobox/venobox.min.js"></script>

<!-- isotope js -->
<script src="<?=base_url('public/')?>assets/js/isotope.pkgd.min.js"></script>

<!-- jquery meanmenu js -->
<script src="<?=base_url('public/')?>assets/js/jquery.meanmenu.js"></script>

<!-- jquery scrollup js -->
<script src="<?=base_url('public/')?>assets/js/jquery.scrollUp.js"></script>

<script src="<?=base_url('public/')?>assets/js/jquery.barfiller.js"></script>
<!-- jquery js -->

<!-- theme js -->
<script src="<?=base_url('public/')?>assets/js/theme.js"></script>

<script src="<?=base_url('public/')?>assets/js/index.js"></script>

<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Lightbox gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script>
// image animation start
AOS.init();
//   image animation ends

// portfolio gallery
filterSelection("nature")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// online class
</script>

<!-- Lightbox gallery -->
<script>
let slideIndex = 1;
showSlide(slideIndex);

function openLightbox() {
    document.getElementById('Lightbox').style.display = 'block';
};

function closeLightbox() {
    document.getElementById('Lightbox').style.display = 'none';
};

function changeSlide(n) {
    showSlide(slideIndex += n);
};

function toSlide(n) {
    showSlide(slideIndex = n);
};

function showSlide(n) {
    const slides = document.getElementsByClassName('slide');
    let modalPreviews = document.getElementsByClassName('modal-preview');

    if (n > slides.length) {
        slideIndex = 1;
    };

    if (n < 1) {
        slideIndex = slides.length;
    };

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    };

    for (let i = 0; i < modalPreviews.length; i++) {
        modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
    };

    slides[slideIndex - 1].style.display = 'block';
    modalPreviews[slideIndex - 1].className += ' active';
};
</script>


<!-- dropdown menu -->

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("mouseover", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<!-- dropdown menu -->

</body>

</html>
