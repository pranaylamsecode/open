<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bansal Pathshala</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="<?= base_url('public/') ?>assets\images\fav-icon\bp_logo.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/animate.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/animate.min.css" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/animated-text.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>venobox/venobox.css" type="text/css" media="all">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/bootstrap-icons.css" type="text/css" media="all">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/quiz.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/parth.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/lightboxgallery.css" type="text/css" media="all">

    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/dropdown.css" type="text/css" media="all">

    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/responsive.css" type="text/css" media="all">

    <!-- custom style -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/custom-style.css" type="text/css" media="all">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- modernizr js -->
    <script src="<?= base_url('public/') ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!--link added by Amit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<section class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="quiz-start">
                    <div class="text-center">
                        <h3>Congratulatios</h3>
                        <h5>You have successfully completed your quiz.</h5>
                    </div>
                    <div class="mt-5">

                      <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Number of questions attempted</td>
                                    <td><?php echo count($result); ?></td>
                                </tr>
                                <tr>
                                    <td>Number of correct answer </td>
                                    <td><?php echo count($correct); ?></td>
                                </tr>

                                <tr>
                                    <td>Score </td>

                                    <?php
                                    $correct = count($correct);
                                    $number_of_minus_from_total_mark = (int)count($result) - (int)$correct;
                                    $total_minus_mark = $number_of_minus_from_total_mark * (int)$negative_mark;
                                    $total_correct_mark = (int)$correct * (int)$mark_for_correct_answer;
                                    $final_marks = (int)$total_correct_mark - (int)$total_minus_mark;
?>
                                    <td><?php echo $final_marks; ?></td>
                                </tr>

                            </tbody>
                      </table>
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

            return true;
        }

        /*  else
        return false;
 */
    </script>

</body>

<!-- jquery js -->
<script src="<?= base_url('public/') ?>assets/js/vendor/jquery-3.6.2.min.js"></script>

<script src="<?= base_url('public/') ?>assets/js/popper.min.js"></script>

<!-- bootstrap js -->
<script src="<?= base_url('public/') ?>assets/js/bootstrap.min.js"></script>

<!-- carousel js -->
<script src="<?= base_url('public/') ?>assets/js/owl.carousel.min.js"></script>

<!-- counterup js -->
<script src="<?= base_url('public/') ?>assets/js/jquery.counterup.min.js"></script>

<!-- waypoints js -->
<script src="<?= base_url('public/') ?>assets/js/waypoints.min.js"></script>

<!-- wow js -->
<script src="<?= base_url('public/') ?>assets/js/wow.min.js"></script>

<!-- imagesloaded js -->
<script src="<?= base_url('public/') ?>assets/js/imagesloaded.pkgd.min.js"></script>

<!-- venobox js -->
<script src="<?= base_url('public/') ?>venobox/venobox.js"></script>

<!--  animated-text js -->
<script src="<?= base_url('public/') ?>assets/js/animated-text.js"></script>

<!-- venobox min js -->
<script src="<?= base_url('public/') ?>venobox/venobox.min.js"></script>

<!-- isotope js -->
<script src="<?= base_url('public/') ?>assets/js/isotope.pkgd.min.js"></script>

<!-- jquery meanmenu js -->
<script src="<?= base_url('public/') ?>assets/js/jquery.meanmenu.js"></script>

<!-- jquery scrollup js -->
<script src="<?= base_url('public/') ?>assets/js/jquery.scrollUp.js"></script>

<script src="<?= base_url('public/') ?>assets/js/jquery.barfiller.js"></script>
<!-- jquery js -->

<!-- theme js -->
<script src="<?= base_url('public/') ?>assets/js/theme.js"></script>

<script src="<?= base_url('public/') ?>assets/js/index.js"></script>

<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Lightbox gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

</body>

</html>
