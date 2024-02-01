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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <style>
        div,
        p,
        h1,
        h2,
        h3,
        span {
            font-family: 'Poppins', sans-serif;
        }

        .gCLgIR {
            background-color: rgb(255, 255, 255);
            color: rgb(9, 2, 54);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .eXkpVw {
            flex: 1 1 0%;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            position: relative;
            padding: 1.66rem 3.33rem 0px;
            overflow-y: auto;
        }

        .aoSdM {
            font-size: 12px;
            background-color: cornsilk;
            color: maroon;
            padding: 0.2rem 1rem;
            margin-top: -1rem;
            margin-bottom: 1rem;
        }

        .grrFQX {
            background-color: rgb(226, 236, 255);
            border-radius: 8px;
            padding: 0.8rem 1rem;
            font-weight: 600;
            font-size: 1rem;
        }

        .jmnrIQ {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .jAgrGA {
            -webkit-box-flex: 1;
            flex-grow: 1;
            overflow-y: auto;
            font-size: 0.88rem;
            font-style: normal;
            font-weight: 400;
            opacity: 0.8;
            line-height: 21px;
            padding-right: 10%;

        }

        .gCLgIR {
            height: 100vh;
        }

        .hJxryr {
            display: flex;
            flex-shrink: 0;
            padding: 0px 5rem 1.66rem;
            width: 100%;
            -webkit-box-pack: end;
            justify-content: flex-end;
        }

        .jAgrGA h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1rem;
            text-decoration: underline;
            letter-spacing: normal;
            margin-bottom: 0.7rem;
        }

        .jAgrGA ol {
            padding-left: 2rem;
        }

        .jAgrGA li {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .jAgrGA section ol ul {
            padding: 0px;
            margin: 0px;
            list-style-type: none !important;
        }

        .jAgrGA section ul li {
            margin-left: 1em;
            line-height: 1.66rem;
            background-repeat: no-repeat;
            padding-left: 2rem;
        }

        .jAgrGA section ul li.unvisited {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAMySURBVHgBlVbBTlNBFL13+lp1ZRuXxtAPMEEkMbKQ1i/AhXviFxS/gOIPiIl7xA9QcG1SiSG6Eli6ULpyZUIjQRDadz0zc2fevBaITnI79903c8+dM2fmlemS1hOp05A6QtQmpqYIDHEmGsB2WWiDRrT58Br3L8rB5yY+liZntIa3bSQlZtK8sScX9xkEti6ntHIe0ATAx1PpCFMXbt0mZp+MXSL0DgG+i5UTDPC++6DGLy4E2D6TZUzuhqrF11euyM8QKoBjIjvBEHXnqrwyAfB5JB2U9zyuXGkRKSUXBQz5FM/5Nujpy+np/RqvRoBP4Lxaoy8YZWmZSBroGG8lqsrjBsMzmpnDnhj7dLVKy6i+UYFv/DIJvrhn71OF/XNqGMvRL8+pX6lCJBZ4B9WbGn2ngB60Mub/Ggzo694uvXu9TguLizI732alrFidjg9SyyvUyEyFHhm7QlYixzcY8R/9Pj2enXE5DgF0r9XmyryyFOZRUUyQrxnSkqlltKBLE6XCLhXHwPvo5VazSS/fvKX33/bp5tSUp8O+E09LZuljjXFBK/xWBh6n/R65xcbzk+6l/ZlrtSXZWzs5jPWLKGQU4/b0Z0BqUHJCx/wAEblm3VCTcM8+nR4OfzY0STMzVOg3rbiUeEymBo9ZkGUKbmOsINrsCvrom5xcBRGluBooPRvGViR6yFJw+CYU5p8HGTbGA9CkeibUoW8sapZwOaFqceqyq9kzFaGtcGiU28AxRVVxPEyu2goQTPEuKiiJuXygccNcNbTqJGWcTFnlFSdbmTrJ+rjofpZAo8xV1mG8nNCmq+hnLj04LSJdWspiWQCyvfWBb0/foev1usTxEvcpFcirG8xPXOBApIlUO2S/AWlWvT2TG5ZUM2GfimubCqXCGaD6u41w2TUYDr4DCRWRRz2d/pT7fWHt42UX5inFjOv6WeO8z+jhSLq/seAjGPrc9ke5WuqrxTGSjBFZpsvaqUjnJJcDmPxBAts7g49n2zs79jE7xpmdA8Al+pd2jD0B0NoQSc+QyFrwXS9Fb2MY27Nz6H+bnTRCVUjWQw8tSJ7bH5F9WA8A+H7jr80l7S8vigKJ8cnv4QAAAABJRU5ErkJggg==");
        }

        .jAgrGA section ul li.unanswered {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAYCAYAAAAPtVbGAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOOSURBVHgBfVXNS1RRFD/nvvsmocyJ2rhyWrYIXUWbIAgq2mj7IAuCdha4CFqof0G6i4h00S7JMSRCKCbaGAUZREEbFQpa9GGpmea807kf5977ZqQ3MO++++75+P3O75yHwNdotVrdu7E5QtS8SIAHzB6Cvcgtie+IsmHf+wN2j+IeEh9BeI6IE8Pb23W7f4sDwJ+tN7zucS7RnwPr2EWRIP5uV+YMglslm4ptyKWDSp+//nutrrO/MKiyvMenYvxZI58YGWNCvhHIfoBWAuU2MSK0riZ5UdcdOusnyFB4cdkLEkCKpGFCo82aMPEJNg9IWDRm1bvVao/OdW59pGkGolE5WhCkGOTz8IjRv4tVIYRSIGhiTfNlSbFezVGF3hVhLL6gk+LbjFHepQxGNO5/BzVaJNapSzhhx3mVB6lJQIW+HAJCOJQSyTlFoDmOY8XZR8rBMx5pxkPHj0H36VPw6/0HWp6e8fBEgVCSuGCpUEG6kleSSgQJ2aKG0Jzg2bcLmO/vhJ21Nfgy/xQ/1+dYFYiJZSTPy9k8FlAwXRnTBYWVahFqH5gL7L27MQLfXr6GIzeH+a0CZyeKdP4hMJs2M4ItPHpRgyCAkkIsHd+fvbDNopRCc7Sic5G4pY1CHYK0A316j5FwbMBSo3mllvpH8c+IMc90FFioNIhcgqrNWa0zHakE6VpvTGLigfGWUm7JdIn6UtWVqeP/ZpPVxYdXY7dHiJhQJVPLXEpl9oFpxpb2LePxtw6FS4wkX/Fcul4ytHhVUTwbiox+Fua6EokNoxkCZT7pn32v5ldMkDqXckjGbIqEWtI0kR1daGrSNoWl22OVqGEW+ujCXOPjiYFVftNlrIjSgvtU0aNje4XKUmgmhVAqVbaq8nU0G9wSszaIK6Ie59tIHCfum+BnSvp5gvWHT6BY34BKpilFHxgItrB8uPFgKgQB2DeRZ1uDTHgNpdgCvDTS2cHSJ/vISELRSD4D0gnOdDSwLIsfZy70boNqsEE1kXO5oyWD8kWlFrAbxVj3/P32IOb6eu7yIBd20lp5iUlTObVB+gWWoVuSPW9NHXx871LqF1vTWh+40lcUaoaXNSxnSYkAStNesBZAY12P7oy2+mwLYq7Ngas1UvmQIiNt962TgKxgKuK8cpAKauxAc6yzfruxm79dg8Rg12o8bE/yoX7FyPh4r7OhVY6wyEEW+Xk2nx5v/M/PP5ro17zGDnAxAAAAAElFTkSuQmCC");
        }

        .jAgrGA section ul li.answered {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAYCAYAAAAPtVbGAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPWSURBVHgBjVU7a1RbFF7rzMm9euHGsfBiIdxzq4tgMRktMiCYlCIWlmphI1j6+gExdhbiL/DRiJWYVJYRRFEEHUSwsPDECCqCRESjc+bs5XrtfU4CPiaZ2a/1/Na310b4xad4tHcmy/AYIc4gUJcAunaCQyQahgwWyqm7iz+zgT80/mBwErFzjqdsmAgBMY5yTkQ6Y6fEB8u8ni8H96/9lpNiabqAHK/y0QxbJDUZWA7Fnv2yVf5HTNrklogWYEyny9kH5Q+dFLfZwSZc4iALYEPiQqMlSqIxes/Bz32fVKTEbzRb7m8cJSfdWzPdLX+tPRFffmKqLQeSgR1F6ABNMO57vpAN8cufs+WhO6u6ik4m/1i7FKrwL4zZWMVqIzY5CkBjzmPMYxUAKg69At2XOcuRzlmW17znulXdCxOf59Zlsv1Gr5jYlL+0oNBxMdxT0fXMqk4Om4Nm5fAskz5/qq/Vf28PD8tcFp1OZ04jiYhbzhi14jj4Zw9Mb+vD5MTfMD+8CEoMinKGlrAkfvJO5xQPp9Trjut9SiekIGrUkKIEmuufxeP/H4HXn9+o0GDxoFu2FNufqMN/H18ffbwVd1yZ2kcZLWkcCs96ykW6DrbvhpVPb0DGM70TMH3zQDRH0MQDEU7ZF+pRoH5ONU1BDYp9ZAxtiElCur/ySEEfbOsb+uMobrrORQFLbTgDxWMvZ3Z0450ArUhkPbQr63TlZe1xjgibqA02MIxVLlCIyRV5YApmWQshkYulbtqI7mgGwX1XQYOJQXldyA1YtsIKFstB7oAVxIqNG6DSHoV+6xUmG0cUDaegIlmUzt4BZJ7DyElqJSd3l2I0XaelBFiTdgESZ6kbbKSLOvamCpKJg6Ek0to4JZuxSY4lxt62GGbNkNG3ZmnUidJiSJmJ4qQaN1mihBrcQUgYp6YuPzWZFWkfDldo9S4y6mLckmJw4XVK6yC1JmJ1MI3Ifbj34iE8W3nuhXe76dTEiVrXk1PTwjfscAq0yca3CdAz4fHVuxXCTP36I9DQ1m5O1LZGKBEIhQmbJo3tasSqUgI79rRWnOkZSetWXtyhODApvF3B5gZ6NchrZDUw0CKo2LQOZ1ArovQWabtEWs0YrjukbwGXmrOSL1TyfnClZC5sGttZ82boeyJzjLqmw/vCVn9z5KLnFBY6Xx6vlpt3TRYcfg8DO5e2IW+61LXWNoIyanqCbE2k5zLKmcoFP1cZcF1Bef795eXFjqS59vTj4uadW5BrXDDntiqL1ZgooBiyDlNbXZUL7Ihq5agEQr4mD3KZv+c/XH91Qex/B6zDwF3gyjlZAAAAAElFTkSuQmCC");
        }

        .jAgrGA section ul li.marked-for-review {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPoSURBVHgBhVZNjBRVEK7q7oHREJmNlw0R03Iz0eDeVqNhiBeNBzh5Fa6GuJh4QGOys/HEyUFN9IYeucHBCFHZJUaQxLgQIXAgy2RDwoZAaMgCy/a8KqpevdfTze7C6+nu91df/X2vehCe0Q7m852MtkwxcjcByBkwD0uF3BeY+bhL3In+4PXBRhi4LvD4fI6t9lFE6PoJlgsBWTSh/MKcSbPv/ULlykx/aWLwXAWfvXpxSjB60u2AAALqFkLr635BVEUyYdIYtRXM1Pvuxs4jGyo4sG1+GhPoCYKa3LQ27DY4cUbmqnWAmjvY++HGxMwaBZ++8s8UcPotQBTy0sgVus3ZWx2wsHnYuCn4xESf/3hzsl8p2Dc+m7fTzf8xQSdJ0MxrgI4sVURii5b3MqzV+/IomB5P/LS0e5DpRCtJpx2VYwrGVJljaWQDZfuF0Jv5uk4QlcUIeSUdgPSovHfjvvHf8gQ2LyDwOoyKCQR48aUWbH9jC7zz8TicO7bEV8/dbbKqijZXBHMryVgmuHsZSuQmcCMsL29vw8yfbwdFGVw5ewfd2SFYjtAnASp4Aydd2rR6MHMw3IOMNZ403l7m1uIyHvnkX1i8dB++Of2e4JHkobRtFKNVl+HIg10ZkdvpLbGw8ihUo7zq4/LftyoGMQzBsQvGsp2RmIvIcG0MecZcjlEMCa8NTwwZopFft5B50DgDgQjBAE81HeTZkIfx/NR2w4g2gY9etKKK8x5UpgPUjAOrKQFMPHADsScHSMxyy1A4QULDSFMK4LpLHuaBx67H3ttDfsEDFBlhORBhUeBG4eEY3uA0Rxdt3YnXJHc4zADQ5KAJa1rhYuZceYa1anJgXaTcGhlvayh2JCEqZYwa6qrw8Rqu43Ep88t9IrXIyfrQrAOzUOMsb523MXnmyLoL41L6JUoe2dGQTc5V+xMoT3jPP9r6/azM7jL2JNXpDKTBiiEyfvPdbXj9/9uwfG919EWo5yCmhPHnX+8f2O9rkcPhfjF1HrWGhCw1ChCHIibtwl+LnFjgcVRFjeIcim+CXPAqzuhSqo9rK6eKHa33V4QbH9jR1Eu57rwW8qQgJE8lQq72OCQfeNIq6ff4jxO5r049+uJkpUDbQvn7+R2bumpCV4FYG3pBBQygT93itt9j/ZAd7v3x4NDhiJvW076wenrutVa3kOROSuBeIP9hcL5UkdbxuiJ2GrtqLFch95ezD74+XMdsKNB2vZw9n6fdYyLaEZC3OLgfgLwq9mlR9aZQTuGcOPLh3KPpk0/jrfuvIrbJ9qE8xXQvMu2RDIsy3qpVR5AHiMlA3DiTtR/254p+sRHGE9hxpFCD83sPAAAAAElFTkSuQmCC");
        }

        .jAgrGA section ul li.marked-answer-review {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAYCAYAAADkgu3FAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAR5SURBVHgBlVbNb1tFEJ95TkwKoRipJVGVCgOHggAlAQ6oHOJwQEiAoBeuTQ/0gETSiF7oJe0fAIqQkECVCj5xbC4gikTt9II4VKSqRA9I+DVRSVS+nMYtsb27w8zs7vOLKaVd673dnX07v53ffKwR7tCOjV2pDCSFN3lYAcQy96WwtIIAqSO39OHqgSrcRcPbCefHrkwB0klErKiA+Ics4R4x7OEJg8tagyXVj1afOgX3AjQ7dnkBGYQViHZRLFoZRMaEmZxlfbvTdtdOf7oxmf4v0Hv7Ln4OCc7IYVV7UEWkBglGMAJJLMJ+KKLUOax8sv7c1f8EenffDws8XdDD+iUZIO1QBBR2YaTT6/dyD0xp8WZxcrE52cxvLchrZrRWTiA5S+DUEKe9Q3Y26NHB6hjQiSk8tjp25NfkWx3KHnAlM9AZutg6cy4PlMhrMMGzjjq8sQuWH0cGrDOs2oBzfs4P2bgOxsugi1a+1XVec11yTuT22Duj56fyQANH9pyfstaOC0koxmdceX9roHF/4GAJJ1/dC/uffhDOzP1Ev6/9rczKog/AEDaiwOnoLX4tZ0CE24eIIwA1mnzUqmtChMn2N44/Aa8cLcOtzS7s2b9LLEKxSt3iDxM2e6+j13OYu/mMOgtuXGjSJ9LAlHhqDBiWn/vsF3j/+e/g9OyKbrLOUqTUMF1KszORYqFQ9JRm9n41kVnEC+Mxiijy5K0KAQa4xZZoKtGwitgfaFkV70D9hAIfEnPO55i0DpAArXgg6D4swYU+aNn5IX8CDZCj0nq6+NRsEYNl3iT1bo53AYS42VskZkJwZJYlcd1luaIyocWL2SKmq5dPgQXCXJ5RNvVAYFLeWQ5uRch8in4nZWPQ/NERE8dgEl3RevIL/lPnSxfHfqPnIzDLLCszt57tcI6MCewxEIGEBWLriDLuFPHGM79C+5EtuO/6MO6+PCbSSxkQR1Wds/awGOpPQr3CHBRFi8QSBWJAjjZlXPz714sNbMwtg3mg3aOqNbRp7m9PwDTUZZ4U4OYSO7bpOGSJ84O599RouEoYi+NNmOeCAYxWic1n1/DnE99mIMcfPaq9Gd4uQUK10doLFQVaas43OeYXfQnpSPmgWGZ8L2XGz1curNJruz+GjdU/MeZOY/YC5NvbI6/vmEOBFhRIXl/fmDvF6i/5hO2gjfUtJGyscWKx4ZoX1rD1+G/QGWnBHRtBpVSbKA3EOZr2IVvAGg/LPvP8DSdpIVU6d/ewhTE4DNxN21XEh5I4+Wb7g7RraZr5T9UCsQS8hVoJQnnKP4WNIvUrPX3ty38Brb/049UkL6gzmLVdBjNVSz4pNRAgXBvxOggPtBCHvx/ZoXStvQ591H0hXaEfPTX1ZtqtLz02MF3lQCjxhVdmkoZIy4RcfEykXnRCqFsu3Bpc3Hr52pPMqP5DGkqKcL3zR0RJOf6PtKobzdv+C+pvBwdPTBQGTdm6pKQnS1yzUOzU681Fva5HaxNlPvNJDucpBizLfwegpLoNZrE5vaLf/AOenzrTWN8kpgAAAABJRU5ErkJggg==");
        }

        .action-button.next {
            padding: 6px 12px;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            position: relative;
            background: transparent;
            color: rgb(9, 16, 17);
            border: 1px solid rgb(9, 16, 17);
            border-radius: 3em;
            cursor: pointer;
            outline: none;
            min-width: 125px;
            transition: 0.3s all ease;
        }

        .sc-fMpdUm.jmnrIQ h1 {
            font-size: 24px;
            padding: 25px 0px 0px 0px;
        }


        .action-button.next:hover {
            background: #000;
            color: #fff;
        }
    </style>
    <div class="sc-ifmBRf gCLgIR">
        <div class="sc-bMthRQ eXkpVw">


            <div class="sc-fBwhgt aoSdM"><?php foreach($quiz_name as $quiz_name) { ?>
                <?php echo $quiz_name->quiz_name; ?>
                <?php } ?></div>
            <div class="sc-hJYyEF grrFQX"><span>Instructions</span></div>
            <div class="sc-fMpdUm jmnrIQ">
                <div style="flex: 1 1 0%;"></div>
                <h1><span>Please read the instructions carefully</span></h1>
                <div class="sc-ktyGiW bTKYiu" style="flex: 1 1 0%; justify-content: flex-end; font-size: 0.88rem;"></div>
            </div>
            <div class="sc-uyLif jAgrGA display-scroll-bar">
                <section>
                    <h3><span>General Instructions</span></h3>
                    <ol start="1">
                        <li class=""><span> The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.</span></li>
                        <li>
                            <span>The Question Palette displayed on the right side of screen will show the status of each question using one of the following symbols:</span>
                            <ul start="1">
                                <li class="unvisited"><span>You have not visited the question yet.</span></li>
                                <li class="unanswered"><span>You have not answered the question.</span></li>
                                <li class="answered"><span>You have answered the question.</span></li>
                                <li class="marked-for-review"><span>You have NOT answered the question, but have marked the question for review.</span></li>
                                <li class="marked-answer-review"><span> The question(s) "Answered and Marked for Review" will be considered for evaluation.</span></li>
                            </ul>
                        </li>
                        <li class=""><span>The Marked for Review status for a question simply indicates that you would like to look at that question again.</span></li>
                        <li class=""><span>You can click on the &gt; arrow which appears to the left of question palette to collapse the question palette thereby maximising the question window. To view the question palette again, you can click on &lt; which appears on the right side of question window.</span></li>
                        <li class=""><span>You can change the language in which the question content is displayed. For this, click on the drop down visible in the top right corner of the screen and select the desired language.</span></li>
                        <li class=""><span>You can click ⬇️ on to navigate to the bottom and ⬆️ to navigate to the top of the question area, without scrolling.</span></li>
                    </ol>
                </section>
                <section>
                    <h3><span>Navigating to a Question</span></h3>
                    <ol start="7">
                        <li>
                            <span>To answer a question, do the following:</span>
                            <ol start="1" type="a">
                                <li class=""><span>Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly. By selecting answer to this question and thereafter going to the next question directly from question palette does NOT save your answer to the current question.</span></li>
                                <li class=""><span>Click on <strong>Save &amp; Next</strong> to save your answer for the current question and then go to the next question.</span></li>
                                <li class=""><span>Click on <strong>Mark for Review</strong> to save your answer for the current question, mark it for review, and then go to the next question.</span></li>
                            </ol>
                        </li>
                    </ol>
                </section>
                <section>
                    <h3><span>Answering a Question:</span></h3>
                    <ol start="8">
                        <li>
                            <span>Procedure for answering a multiple choice type question:</span>
                            <ol start="1" type="a">
                                <li class=""><span>To select your answer, click on the button of one of the options</span></li>
                                <li class=""><span>To deselect your chosen answer, click on the button of the chosen option again or click on the <strong>Clear Response</strong> button</span></li>
                                <li class=""><span>To change your chosen answer, click on the button of another option</span></li>
                                <li class=""><span>To save your answer, you MUST click on the <strong>Save &amp; Next</strong> button</span></li>
                                <li class=""><span>To mark the question for review, click on the <strong>Mark for Review</strong> button.</span></li>
                            </ol>
                        </li>
                        <li class=""><span> To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering the question.</span></li>
                    </ol>
                </section>
                <section>
                    <h3><span>Navigating through Sections:</span></h3>
                    <ol start="10">
                        <li class=""><span>Sections in this question paper are displayed on the top bar of the screen. Questions in a section can be viewed by clicking on the section name. The section you are currently viewing is highlighted.</span></li>
                        <li class=""><span>After clicking the <strong>Save &amp; Next</strong> button on the last question for a section, you will automatically be taken to the first question of the next section.</span></li>
                        <li class=""><span>You can shuffle between sections and questions anytime during the examination as per your convenience only during the time stipulated.</span></li>
                        <li class=""><span>Candidate can view the corresponding section summary as part of the legend that appears in every section above the question palette.</span></li>
                    </ol>
                </section>
            </div>
        </div>
        <div class="sc-kTmzSA hJxryr">
            <form name="question-form" method="POST" action="<?php echo base_url(); ?>question-paper">
                <input type="hidden" value="1" name="step_instruction">
                <input type="hidden" value="<?php echo $quizid; ?>" name="quiz">
                <input type="hidden" value="<?php echo $level_type; ?>" name="level_type">

                <input type="submit" name="next" id="defaultbtnnxt" class="next action-button" value="Next" />
            </form>
        </div>
    </div>



</body>

</html>
