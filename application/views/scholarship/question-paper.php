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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <style>
        .question_row:first-child {
            display: block;
        }

        .question_row {
            display: none;
        }

        div,
        p,
        h1,
        h2,
        h3,
        span {
            font-family: 'Poppins', sans-serif;
        }

        .hide_sidebar .kLdFyT {
            transform: translateX(310px);
        }

        .hide_sidebar .sc-hCgVqe.cZghyu {
            margin-right: -275px;
        }

        /*! CSS Used from: https://www.embibe.com/static/css/main.7993e362.chunk.css */
        .eds-tooltip__trigger__container {
            cursor: pointer;
            display: inline-flex;
        }

        .emYctj {
            height: 100vh;
        }

        .disable {
            opacity: 0.6;
            pointer-events: none;
        }

        @media screen and (max-width:768px) {
            .eds-tooltip__trigger__container {
                width: 100%;
            }
        }

        .fonts-loaded button {
            font-family: gilroy, roboto, sans-serif;
            font-family: var(--base-font-family), roboto, sans-serif;
            letter-spacing: 0;
        }

        :active,
        :focus,
        button,
        button:focus {
            outline: none;
        }

        * {
            box-sizing: border-box;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        /*! CSS Used from: Embedded */
        .jmAxQb {
            font-size: 1.2rem;
            font-weight: 400;
            color: var(--aquamarine);
            min-width: 6rem;
        }

        @media (max-width: 480px) {
            .jmAxQb {
                font-size: 1rem;
            }
        }

        .kycXCz {
            flex: 1 1 0%;
            line-height: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
            letter-spacing: 0.4px;
            font-size: 1rem;
            font-weight: 300;
        }

        @media screen and (max-width: 480px) {
            .kycXCz {
                font-size: 0.85rem;
            }
        }

        .jKnVcE {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            font-size: 1rem;
            color: rgb(255, 255, 255);
            border: 2px solid rgba(222, 222, 222, 0.34);
            background-color: rgb(12, 2, 52);
            height: auto;
            padding: 0.6rem 1rem;
            overflow: auto;
            box-sizing: border-box;
            border-radius: 10px;
            letter-spacing: 0.4px;
            line-height: 1.15rem;
            font-family: Gilroy;
            font-weight: 400;
            cursor: pointer;
        }

        @media screen and (max-width: 480px) {
            .jKnVcE {
                font-size: 0.85rem;
            }
        }

        .fsqhgA {
            border: 0px !important;
            background-color: transparent !important;
            margin-right: 1rem;
            width: auto;
            height: auto;
            line-height: 1.5rem;
            position: relative;
            border-radius: 50%;
            flex-shrink: 0;
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
        }

        .fsqhgA p {
            padding-left: 0.1rem;
            margin: 0px;
        }

        .bMLPsr {
            width: 93.3447%;
            text-align: left;
        }

        .kcLrFq {
            display: flex;
            flex-direction: column;
        }

        .cvPnBG {
            width: 100%;
            padding-left: 0px;
        }

        @media (max-width: 576px) {
            .cvPnBG {
                width: 100%;
                padding-left: 0px;
            }
        }

        .fOgLly {
            min-width: 11.66vw;
            padding: 0.5rem 1.1rem;
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
            position: relative;
            background: transparent;
            color: rgb(9, 16, 17);
            border: 1px solid rgb(9, 16, 17);
            border-radius: 3em;
            font-family: Gilroy;
            cursor: pointer;
            outline: none;
        }

        .fOgLly:focus {
            outline: 0px;
        }

        .kuFXaU {
            min-width: 11.66vw;
            padding: 0.5rem 1.1rem;
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
            position: relative;
            background: linear-gradient(rgb(255, 235, 0), rgb(255, 195, 0), rgb(255, 147, 0)) 0% 0% no-repeat padding-box padding-box transparent;
            color: black;
            border: 1px solid transparent;
            border-radius: 3em;
            font-family: Gilroy;
            cursor: pointer;
            outline: none;
        }

        .kuFXaU:focus {
            outline: 0px;
        }

        .herMjw {
            min-width: 11.66vw;
            padding: 0.5rem 1.1rem;
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
            position: relative;
            background: var(--primary);
            color: var(--white-four);
            border: 1px solid var(--white-four);
            border-radius: 3em;
            font-family: Gilroy;
            cursor: pointer;
            outline: none;
        }

        .herMjw:focus {
            outline: 0px;
        }

        .hsjTRm {
            width: 75%;
            height: 100%;
            margin-right: 2%;
            position: relative;
        }

        @media (max-width: 576px) {
            .hsjTRm {
                width: 100%;
                margin-left: 0px;
            }
        }

        .eYrqql {
            height: 86%;
            width: 100%;
            overflow: auto;
            scroll-behavior: smooth;
        }

        .eYrqql::-webkit-scrollbar {
            display: none;
        }

        @media (max-width: 576px) {
            .eYrqql {
                height: 88%;
            }
        }

        .gwqiqN {
            position: fixed;
            top: 0px;
            left: 0px;
            background-image: linear-gradient(238.6deg, transparent, rgb(35, 177, 143) 91.83%);
            height: 1.88rem;
            line-height: 1.33rem;
            color: rgb(255, 255, 255);
            text-align: left;
            padding: 1.05rem calc(1.66rem + 10px);
            text-transform: uppercase;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            font-weight: 600;
        }

        @media (max-width: 576px) {
            .gwqiqN {
                position: relative;
                margin-left: -2rem;
                display: block;
                font-size: 0.9rem;
                line-height: 0rem;
                width: 25ch;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                background-image: none;
                flex: 1 1 0%;
            }
        }

        .fsCdtb {
            flex: 4 1 0%;
            position: relative;
            display: flex;
            scroll-behavior: auto;
            overflow: auto;
            padding: 10px;
        }

        @media (max-width: 576px) {
            .fsCdtb {
                padding-left: 0px;
                width: 100%;
                padding-right: 0px;
                flex: 1 1 0%;
            }
        }

        .coCxDd {
            display: flex;
            background-image: linear-gradient(238.6deg, transparent, rgb(35, 177, 143) 91.83%);
            margin-left: -1.66rem;
            padding-left: 1.66rem;
            margin-right: -1.66rem;
            padding-right: 2.6rem;
        }

        @media (max-width: 576px) {
            .ftAWZS {
                background: rgb(65, 53, 117);
                margin-left: -1.66rem;
                margin-right: -1.66rem;
                padding-left: 1.66rem;
                line-height: 2rem;
                padding-bottom: 0px;
            }
        }

        .cBuRxZ {
            height: 100%;
        }

        .woFxs {
            overflow-y: scroll;
            width: 100%;
        }

        .bjabxQ {
            position: static;
            top: unset;
            left: unset;
            background-image: linear-gradient(90deg, rgb(38 142 205) 0%, rgb(19 147 225) 41.36%, rgba(17, 6, 88, 0) 100%);
            height: 50px;
            line-height: 1.8rem;
            font-size: 1.2rem;
            padding: 0px 7rem 0px 3.33rem;
            text-transform: capitalize;
        }

        @media (max-width: 576px) {
            .bjabxQ {
                display: flex;
            }
        }

        .emYctj {
            background-color: rgb(255, 255, 255);
            color: rgb(9, 2, 54);
            display: flex;
            flex-direction: column;
            padding: 0px;
            overflow: hidden;
        }

        @media (max-width: 576px) {
            .emYctj {
                padding-top: 0px;
                height: revert;
            }
        }

        @media screen and (max-width: 768px) {
            .emYctj {
                background-image: unset;
                background-position: unset;
                background-size: unset;
                background-repeat: unset;
                background-attachment: unset;
                background-origin: unset;
                background-clip: unset;
                background-color: rgb(255, 255, 255);
            }
        }

        .eNtInL {
            flex: 1 1 0%;
            padding: 10px 0px;
        }

        .fSbkhO {
            margin: 1rem 0px 0rem;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }

        @media screen and (max-width: 768px) {
            .fSbkhO {
                background: unset;
                padding: 0px;
                margin: 0rem 0px -0.88rem;
            }
        }

        .cyvreJ {
            width: 100%;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            padding-right: 1.66rem;
            background: none;
        }

        .hDkQYq {
            border-radius: 8px;
            font-weight: 500;
            line-height: 30px;
            flex-shrink: 0;
            display: flex;
            margin-right: 0.8rem;
            font-size: 1rem;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            height: auto;
            padding: 0.1rem 1.1rem;
            background-color: #268ecd;
            color: rgb(255, 255, 255);
            border: none;
            min-width: auto !important;
        }

        .hDkQYq span {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .grFgod {
            color: rgb(17, 6, 88);
            border: 2px solid rgb(59, 50, 118);
            border-radius: 8px;
            font-weight: 500;
            line-height: 30px;
            flex-shrink: 0;
            display: flex;
            margin-right: 0.8rem;
            font-size: 1rem;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            height: auto;
            padding: 0.1rem 1.1rem;
            background-color: transparent;
            min-width: auto !important;
        }

        .grFgod span {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .cDiruG {
            border-color: rgb(9, 2, 54);
            color: rgb(9, 2, 54);
            flex-shrink: 0;
            min-width: 135px;
        }

        @media (max-width: 768px) {
            .cDiruG {
                font-size: 1rem;
                width: 100%;
                border: none;
                border-radius: 0px;
            }
        }

        .fBjwEB {
            opacity: 0.85;
            padding: 0.2rem 0px 0.6rem 0px;
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        @media (max-width: 768px) {
            .fBjwEB {
                font-size: 1rem;
                padding-bottom: 0px;
                padding-left: 0px;
            }
        }

        .cMuXBH {
            --white-four: #ffffff;
            --primary: #070034;
            --foused-border-width: 2px;
            --foused-border-color: #00faff;
            --primary-text: #160b5b;
            font-family: Gilroy;
            height: 100%;
            color: rgb(9, 2, 54);
            --focused-border-width: 2px;
            --focused-border-color: #00faff;
        }

        .cMuXBH .display-scroll-bar::-webkit-scrollbar {
            display: unset;
            width: 10px;
            height: 10px;
        }

        .cMuXBH .display-scroll-bar::-webkit-scrollbar-thumb {
            background-color: rgb(187, 185, 185);
            border-radius: 8px;
        }

        .cMuXBH .display-scroll-bar::-webkit-scrollbar-track {
            background: padding-box rgb(207, 207, 207);
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
        }

        .fEjDTs {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            padding: 10px 16px;
            gap: 10px;
            max-height: 40px;
            background: rgb(226, 236, 255);
            border-radius: 8px;
            color: rgb(9, 2, 54);
            font-weight: 300;
            font-style: normal;
        }

        .zupOx {
            display: flex;
            -webkit-box-pack: end;
            justify-content: flex-end;
            -webkit-box-align: center;
            align-items: center;
            padding: 10px 16px;
            gap: 20px;
            max-height: 40px;
            background-color: rgb(245, 245, 245);
            border-radius: 8px;
            color: rgb(9, 2, 54);
            font-weight: 300;
        }

        .cXlCxe {
            display: inline-block;
            color: rgb(255, 255, 255);
            font-weight: 500;
            min-width: 40px;
            border-radius: 4px;
            text-align: center;
            padding: 0px 10px;
        }

        .cXlCxe.red {
            background-color: rgb(163, 14, 16);
        }

        .cXlCxe.green {
            background-color: rgb(11, 85, 20);
        }

        .hVWBOg {
            background: linear-gradient(87.95deg, rgb(17, 6, 88) -48.44%, rgb(226, 236, 255) 28.33%, rgb(226, 236, 255) 76.61%);
            border-radius: 5px 0px 0px 5px;
            height: 10vh;
            width: 22px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            cursor: pointer;
        }

        .fIURSk {
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            gap: 10px;
        }

        .LCbXc {
            display: inline-block;
            background-color: transparent;
            font-size: 1rem;
            border: none;
            color: inherit;
            padding: 0px;
            margin: 0px;
            cursor: pointer;
        }

        .LCbXc:hover {
            text-decoration: underline;
        }

        .eFeRNr {
            display: flex;
            flex-shrink: 0;
            background-color: rgb(255, 255, 255);
            -webkit-box-align: center;
            align-items: center;
            justify-content: center;
            width: 100%;
            border-top: 1px solid rgb(150, 149, 149);
            border-radius: 8px 8px 0px 0px;
            height: auto;
            padding: 1.33rem 3.33rem;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .eFeRNr {
                padding: 0px;
                border-radius: 0px;
                border-top: none;
            }
        }

        .jvBxqW {
            background-color: #268ecd;
            padding: 1rem;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            color: rgb(255, 255, 255);
        }

        .kQJNzr {
            display: flex;
            -webkit-box-pack: start;
            justify-content: start;
            gap: 20px;
            color: rgb(17, 6, 88);
        }

        .jrplPe {
            width: 0px;
            border-left: 2px solid rgb(0, 0, 0);
            height: 100%;
        }

        .jAtXkS {
            -webkit-box-flex: 1;
            flex-grow: 1;
            display: flex;
            width: 100%;
            height: 100%;
            position: relative;
            padding: 1rem 0px 0px 3.33rem;
            overflow: hidden auto;
        }

        @media screen and (max-width: 768px) {
            .jAtXkS {
                padding: 0.83rem;
            }
        }

        .cZghyu {
            width: 100%;
            display: flex;
            flex-direction: column;
            transition: all 300ms ease-in-out 0s;
            position: relative;
            margin-right: 0px;
        }

        .kLdFyT {
            flex: 1 0 330px;
            height: 100%;
            transition: all 300ms ease-in-out 0s;
            transform: translateX(0px);
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            background-color: transparent;
            z-index: 1;
            overflow: auto;
            background-size: 100%;
            background-position: 0px 0px;
        }

        .gfUPrd {
            background-color: rgb(226, 236, 255);
            border-radius: 8px 8px 0px 0px;
            flex: 1 1 0%;
            display: flex;
            flex-direction: column;
            align-self: stretch;
            overflow-y: scroll;
        }

        .jbjATg {
            font-weight: 400;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
            font-size: 1.2rem;
        }

        @media (max-width: 576px) {
            .jbjATg {
                margin-bottom: 0px;
                font-size: 1rem;
            }
        }

        @media (min-width: 575px) and (max-width: 1260px) {
            .jbjATg {
                margin-right: 3rem;
            }
        }

        .efzudn {
            height: 1rem;
            object-fit: contain;
            margin-right: 0.3rem;
        }

        @media (max-width: 576px) {
            .efzudn {
                margin-top: 0px;
            }
        }

        .gPZbFB {
            width: 100%;
            display: flex;
            flex: 2 4 auto;
            -webkit-box-pack: center;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .gPZbFB {
                justify-content: stretch;
                flex: 1 1 0%;
                box-shadow: rgba(109, 66, 255, 0.1) 2px 3px 3px inset;
            }
        }

        .ishIwY {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            overflow: auto;
        }

        @media screen and (max-width: 768px) {
            .ishIwY {
                background: linear-gradient(-90deg, rgb(156, 190, 255) -8.5%, rgb(226, 236, 255) 8%);
                flex-wrap: nowrap;
            }

            .ishIwY::-webkit-scrollbar {
                display: none !important;
            }
        }

        .gUGIBK {
            width: 25%;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            padding: 0.7rem 0px;
        }

        @media screen and (max-width: 768px) {
            .gUGIBK {
                padding: unset;
                -webkit-box-align: center;
                align-items: center;
            }
        }

        .fmUBjQ {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
        }

        @media (max-width: 576px) {
            .fmUBjQ {
                flex-wrap: wrap;
                margin-top: 30px;
            }
        }

        .eLXjYb {
            display: inline-flex;
            width: 100%;
            padding-right: 0.66rem;
        }

        @media (max-width: 576px) {
            .eLXjYb {
                width: auto;
            }
        }

        .eeYXpQ {
            font-weight: 400;
        }

        @media (max-width: 768px) {
            .eeYXpQ {
                border-color: rgb(240, 240, 240);
                color: rgb(240, 240, 240);
                flex-shrink: 0;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .iutiMw {
                margin-top: 10px;
            }
        }

        .csiwNg {
            font-size: 1rem;
            color: rgb(9, 2, 54);
        }

        .dePesc {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            background: url("data:image/png;base64,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") center center no-repeat;
            cursor: default;
        }

        .sc-jnCuNW.eFeRNr {
            display: flex !IMPORTANT;
        }

        .RrsUN {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            background: url("data:image/png;base64,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") center center no-repeat;
            cursor: default;
        }

        .dmWkcb {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(17, 6, 88);
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPVSURBVHgB1Vm9bhtHEP5ml0edHARZpUvHJlUiKH4CM09gurHoNJafQPITWKmSLlCVdFY6Oo3FKkilc+dOCuAA6Uy/gH2AYfhA+nY8s5QOpEEbPEqk1l9D3t3e7bd7c/PzDeECcOg4NJttw3SDCS2AfgCTA7ELA5hykB/oL4FPPfETDIdZjqMcC4KwAFyj2ybCA7m7xYyBPKYPXw6QmFOkRZ7nY0LOyYLeXGuBvYNBG4wbcl9bVnLE4D/z4V9HqIlahF3zdodgfqtIfvH28Jzc3M8Ii0g7QnqXiJw86+d81Duc9/65CDt0W5TgIeuBTvCul+ESEN6UwUM1GR7xrRy9AS4Kl/y0u9HsPndrd/awJLi17b1LmcM1uw/Cg9JuC0uGzqFzfS1zYhGMyW6fBJtbEQLpZPukNumrIFvNLa6yFunKZldgBh/loKQ/YtM0PVC8QRPHbPBjXlzCF3sB6IaRFy5D4TLhPczkIEr4MRMdXDVZhXJg4gN1pzMHuKS7o68BkUF4HWvAOj+udlhDLXvcQ2yQQKXRdeqcs7c7G8mdE0SKsMsSFfV/2GGydFeSkQNEC+qHZEv/qQuhZvqKh8XGRdK+ZeKM44lwvG5gm5r2ZbGSVSi3kCHa9baBsW1Jvp8gelDfGC+EwVvwyBA7pEDwUjAYKV2kpCmjNYcKUs0QaEt22LQwGg0QO4oiDz5CohvjM4FyNfjMYLSeCuV65BhzpNyIhpAjvfYVYkeSiFyAgbq1U4z4OmIHW9lhzg2zeYGGqjaRQ4QYccH/GnHIGXm+idghqpH3JjMoh5lKTjF/eCH5UYmrfJuZKrFYW99BrEjSjqS/feU69sOa1UdsFmK7uyjN4dTJUFafZfUxQTlN1ppVpOPS3z/P6mOCioWqcM68GGqnJYp+dTEWdbanas3pXMLiHjHvqqCCK0YQdcjvsaFbk+enCFfihag/V+nmKgVqhqhjPxxclP89Te33G2TtL2n57aMC/xdYIcYFp/1bkvVHr4a9Xz+8bmfdVJTPstRufjMmvflPgWcrqUjGZNeOhWz/5bC3j7oQ2XU/uLsV2LTOcSZo739qnP3UxbDTje9IhJbf08YmyfFTLAHqDajBf6jNzjKDSczXlFHps+TH0K6P6G+X2pRRTU8PxEPNo5rWa3uJwjkOLiz5Bx1gVBzVFWCC90nWdyTc3gx9Pvj7dfp1izUWRTyEtXdl0o6qRkGIUW1D5QKpwM8XEcilqYP30iG1rYqkJlsLts8WIlwR1x7Ia5G6GtSGpy3ZeUcqG0y1buVtgE6lhfsC7zjDl9K6zReXxd4DCWOk1ppkNAYAAAAASUVORK5CYII=") center center no-repeat;
            cursor: default;
        }

        .jFrKFH {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            background: url("data:image/png;base64,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") center center no-repeat;
            cursor: default;
        }

        .kEjOVh {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            background: url("data:image/png;base64,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") center center no-repeat;
            cursor: default;
        }

        .ehuHuo {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            background: url("data:image/png;base64,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") center center / 3rem no-repeat;
            filter: drop-shadow(rgba(0, 0, 0, 0.3) 0px 2px 10px);
            cursor: pointer;
        }

        .kNGLmz {
            height: 3rem;
            min-width: 64px;
            position: relative;
            display: flex;
            flex-shrink: 0;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(17, 6, 88);
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPVSURBVHgB1Vm9bhtHEP5ml0edHARZpUvHJlUiKH4CM09gurHoNJafQPITWKmSLlCVdFY6Oo3FKkilc+dOCuAA6Uy/gH2AYfhA+nY8s5QOpEEbPEqk1l9D3t3e7bd7c/PzDeECcOg4NJttw3SDCS2AfgCTA7ELA5hykB/oL4FPPfETDIdZjqMcC4KwAFyj2ybCA7m7xYyBPKYPXw6QmFOkRZ7nY0LOyYLeXGuBvYNBG4wbcl9bVnLE4D/z4V9HqIlahF3zdodgfqtIfvH28Jzc3M8Ii0g7QnqXiJw86+d81Duc9/65CDt0W5TgIeuBTvCul+ESEN6UwUM1GR7xrRy9AS4Kl/y0u9HsPndrd/awJLi17b1LmcM1uw/Cg9JuC0uGzqFzfS1zYhGMyW6fBJtbEQLpZPukNumrIFvNLa6yFunKZldgBh/loKQ/YtM0PVC8QRPHbPBjXlzCF3sB6IaRFy5D4TLhPczkIEr4MRMdXDVZhXJg4gN1pzMHuKS7o68BkUF4HWvAOj+udlhDLXvcQ2yQQKXRdeqcs7c7G8mdE0SKsMsSFfV/2GGydFeSkQNEC+qHZEv/qQuhZvqKh8XGRdK+ZeKM44lwvG5gm5r2ZbGSVSi3kCHa9baBsW1Jvp8gelDfGC+EwVvwyBA7pEDwUjAYKV2kpCmjNYcKUs0QaEt22LQwGg0QO4oiDz5CohvjM4FyNfjMYLSeCuV65BhzpNyIhpAjvfYVYkeSiFyAgbq1U4z4OmIHW9lhzg2zeYGGqjaRQ4QYccH/GnHIGXm+idghqpH3JjMoh5lKTjF/eCH5UYmrfJuZKrFYW99BrEjSjqS/feU69sOa1UdsFmK7uyjN4dTJUFafZfUxQTlN1ppVpOPS3z/P6mOCioWqcM68GGqnJYp+dTEWdbanas3pXMLiHjHvqqCCK0YQdcjvsaFbk+enCFfihag/V+nmKgVqhqhjPxxclP89Te33G2TtL2n57aMC/xdYIcYFp/1bkvVHr4a9Xz+8bmfdVJTPstRufjMmvflPgWcrqUjGZNeOhWz/5bC3j7oQ2XU/uLsV2LTOcSZo739qnP3UxbDTje9IhJbf08YmyfFTLAHqDajBf6jNzjKDSczXlFHps+TH0K6P6G+X2pRRTU8PxEPNo5rWa3uJwjkOLiz5Bx1gVBzVFWCC90nWdyTc3gx9Pvj7dfp1izUWRTyEtXdl0o6qRkGIUW1D5QKpwM8XEcilqYP30iG1rYqkJlsLts8WIlwR1x7Ia5G6GtSGpy3ZeUcqG0y1buVtgE6lhfsC7zjDl9K6zReXxd4DCWOk1ppkNAYAAAAASUVORK5CYII=") center center no-repeat;
            cursor: pointer;
        }

        .JocCd {
            font-family: Gilroy;
            font-weight: 400;
            line-height: 40px;
            font-size: 0.85rem;
            text-align: center;
        }

        .eOngxn {
            font-family: Gilroy;
            font-weight: 500;
            line-height: 40px;
            font-size: 1.25rem;
            text-align: center;
        }

        .dqylZT {
            display: flex;
            flex-wrap: wrap;
            margin: 1rem;
        }

        .dqylZT label {
            font-family: Gilroy;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 14px;
        }

        .dqylZT .child {
            height: 60px;
            flex: 1 1 0%;
            min-width: 50%;
            -webkit-box-pack: start;
            justify-content: start;
        }

        .jsJNNP {
            height: 35px;
            width: 35px;
            cursor: pointer;
        }

        .jsJNNP:hover {
            opacity: 0.7;
        }

        .fagsaQ {
            position: relative;
            display: flex;
            flex-direction: row;
            width: 100%;
            gap: 20px;
        }

        @media screen and (max-width: 768px) {
            .fagsaQ {
                gap: 10px;
            }
        }

        .fagsaQ .scroll-column {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            flex: 1 1 0%;
        }

        .fagsaQ .scroll-column .up {
            position: absolute;
            top: 0px;
        }

        .dNnklu {
            margin-bottom: 1rem;
            padding-right: 1rem;
            flex: 3 1 0%;
        }

        @media screen and (max-width: 768px) {
            .dNnklu {
                flex: 6 1 0%;
                padding-right: 0px;
            }
        }

        .dmKkMX {
            background-color: transparent;
            border: 1px solid #efefef;
        }





        .fsqhgA .circle {
            padding-left: 0.1rem;
            margin: 0px;
            margin-right: 1rem;
            width: 30px;
            height: 30px;
            line-height: 1.5rem;
            position: relative;
            border-radius: 50%;
            flex-shrink: 0;
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            border: 1px solid #888;
            background-color: rgb(255, 255, 255);
            color: rgb(12, 2, 60);
        }

        .radio .outer {
            height: 15px;
            width: 15px;
            display: block;
            float: left;
            margin: 10px 9px 10px 10px;
            border: 0px !important;
            border-radius: 50%;
            background-color: transparent;
            position: absolute;
            width: 100%;
            height: 100%;
            left: -10px;
            top: -10px;
            border-radius: 10px;
        }

        .sc-knuRna.sc-dvogsP.fsqhgA.hwQySw {
            z-index: 9;
        }

        .sc-cQwIYT.sc-gFeNAA.jKnVcE.dmKkMX {
            position: relative;
        }

        .radio input:checked+.outer {
            /* border: 3px solid #f08b3b; */
            background: #efefef;
            border: 1px solid #efefef !important;
        }

        label.radio img {
            width: 250px !important;
            height: auto;
        }

        .esjFgQ {
            color: rgb(12, 2, 60);
        }

        /*! CSS Used fontfaces */
        @font-face {
            font-family: gilroy;
            font-weight: 300;
            font-display: swap;
            src: url(https://assets.embibe.com/staging/fonts/Gilroy/Gilroy-Regular.otf) format("opentype");
        }

        @font-face {
            font-family: gilroy;
            font-weight: 400;
            font-display: swap;
            src: url(https://assets.embibe.com/staging/fonts/Gilroy/Gilroy-Medium.otf) format("opentype");
        }

        @font-face {
            font-family: gilroy;
            font-weight: 500;
            font-display: swap;
            src: url(https://assets.embibe.com/staging/fonts/Gilroy/Gilroy-SemiBold.woff) format("woff"), url(https://assets.embibe.com/staging/fonts/Gilroy/Gilroy-SemiBold.otf) format("opentype");
        }

        @font-face {
            font-family: gilroy;
            font-weight: 600;
            font-display: swap;
            src: url(https://assets.embibe.com/staging/fonts/Gilroy/Gilroy-Bold.otf) format("opentype");
        }

        @font-face {
            font-family: gilroy;
            font-weight: 700;
            font-display: swap;
            src: url(https://assets.embibe.com/staging/fonts/Gilroy/Gilroy-ExtraBold.otf) format("opentype");
        }

        .action-button {
            padding: 6px 12px;
            font-size: 15px;
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
            margin: 0px 7px;
        }

        p {
            font-size: 15px;
        }

        .action-button:hover {
            background: #000;
            color: #fff;
        }

        .action-button.next.save_btn {
            background: linear-gradient(rgb(255, 235, 0), rgb(255, 195, 0), rgb(255, 147, 0)) 0% 0% no-repeat padding-box padding-box transparent;
            color: black;
            border: 0px;
            width: auto;
            border: 0px !important;
            box-shadow: unset !important;
        }

        .action-button.next.save_btn:hover {
            background: linear-gradient(rgb(229 211 6), rgb(223 172 6), rgb(227 133 4)) 0% 0% no-repeat padding-box padding-box transparent;
        }
    </style>

    <div class="sc-cBsrDa emYctj">
        <div class="sc-eoXOpV sc-jIsiFf coCxDd cyvreJ">
            <div class="sc-fbHdRr sc-ksjCef gwqiqN bjabxQ">Online Quiz</div>
            <div class="sc-foDcoF kQJNzr">
                <div class="sc-hrZiYQ fIURSk">
                    <span>Time Left</span> : &nbsp;&nbsp;</small><img src="https://assets.embibe.com/production/web-assets/assets/images/Test/timer.svg" class="sc-gSpBRe efzudn"><span class="sc-gFGZVQ jmAxQb sc-ldZUWu csiwNg">01 : 54 : 34</span>
                </div>
            </div>
        </div>
        <div class="sc-hQXzsD jAtXkS">
            <div class="sc-hCgVqe cZghyu">
                <div class="sc-cKajLJ zupOx">
                    <div><span>Marks for correct answer</span> : <span class="sc-hhFzXm cXlCxe green">3</span></div>
                    <div class="sc-eZMymg jrplPe"></div>
                    <div><span>Negative marks</span> : <span class="sc-hhFzXm cXlCxe red">1 </span></div>
                </div>

                <div class="sc-iJRSss sc-kMizLa hsjTRm woFxs">
                    <div class="sc-eTgnfb sc-dpkrwT eYrqql cBuRxZ">
                        <div class="sc-eCDnqH fagsaQ">
                            <div class="sc-keNpes dNnklu">
                                <div></div>
                                <div>
                                    <form id="msform" name="question-form" method="POST" action="<?php echo base_url(); ?>save-answer">
                                        <?php

                                        if (count($question) > 0) {
                                            $counter = 1;

                                            foreach ($question as $quest) {

                                        ?>

                                                <div class="question_row current_que" id="question_<?php echo $counter; ?>">
                                                    <div class="sc-wAnfg sc-cyAvAE ftAWZS fSbkhO">
                                                        <div class="sc-bOJcbE fBjwEB"><span>Question <?php echo $counter; ?></div>
                                                    </div>
                                                    <div class="sc-hLaujc kycXCz">
                                                        <p><?php echo $quest->question; ?></p>
                                                        <?php

                                                        if ($quest->add_by_import == '1' && !empty($quest->file)) {
                                                        ?>



                                                            <img width="250px ; height:250px;" src="<?php echo $quest->file; ?>" alt="bansal-pathshala">

                                                        <?php   } else if (isset($quest->file) && !empty($quest->file)) { ?>




                                                            <img width="250px ; height:250px;" src="<?= base_url() ?>admin/uploads/question_image/<?php echo $quest->file; ?>" alt="bansal-pathshala">

                                                        <?php } else { ?>

                                                        <?php } ?>
                                                    </div>
                                                    <div style="flex: 1 1 0%; height: 100%;">
                                                        <div class="sc-gFCZzz cvPnBG">
                                                            <div class="sc-hbjaKc kcLrFq">
                                                                <div style="margin-bottom: 2%; width: 100%;">
                                                                    <div class="sc-cQwIYT sc-gFeNAA jKnVcE dmKkMX">

                                                                        <div class="sc-kTGBUR sc-kSmoGW bMLPsr esjFgQ">
                                                                            <label class="radio">
                                                                                <div class="sc-knuRna sc-dvogsP fsqhgA hwQySw">
                                                                                    <p class="circle">A</p>

                                                                                    <?php

                                                                                    if ($quest->add_by_import == '1'  && !empty($quest->file_a)) {
                                                                                    ?>


                                                                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_a; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option1)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option1; ?></p>
                                                                                        <?php } ?>


                                                                                    <?php   } else if (isset($quest->file_a)  && !empty($quest->file_a)) { ?>




                                                                                        <img width="250px ; height:250px;" src="<?= base_url() ?>admin/uploads/question_image/<?php echo $quest->file_a; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option1)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option1; ?></p>
                                                                                        <?php } ?>


                                                                                    <?php } else { ?>

                                                                                        <?php if (!empty($quest->option1)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option1; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php } ?>
                                                                                </div>
                                                                                <input type="radio" value="option_1" name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                                                <span class="outer"></span>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="margin-bottom: 2%; width: 100%;">
                                                                    <div class="sc-cQwIYT sc-gFeNAA jKnVcE dmKkMX">

                                                                        <div class="sc-kTGBUR sc-kSmoGW bMLPsr esjFgQ">
                                                                            <label class="radio">
                                                                                <div class="sc-knuRna sc-dvogsP fsqhgA hwQySw">
                                                                                    <p class="circle">B</p>

                                                                                    <?php

                                                                                    if ($quest->add_by_import == '1'  && !empty($quest->file_b)) {
                                                                                    ?>

                                                                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_b; ?>" alt="bansal-pathshala">

                                                                                        <?php if (!empty($quest->option2)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option2; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php   } else if (isset($quest->file_b)  && !empty($quest->file_b)) { ?>




                                                                                        <img width="250px ; height:250px;" src="<?= base_url() ?>admin/uploads/question_image/<?php echo $quest->file_b; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option2)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option2; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php } else { ?>
                                                                                        <?php if (!empty($quest->option2)) { ?>
                                                                                            <p style="color:#000"><?php  echo $quest->option2; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php } ?>
                                                                                </div>
                                                                                <input type="radio" value="option_2" name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                                                <span class="outer"></span>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="margin-bottom: 2%; width: 100%;">
                                                                    <div class="sc-cQwIYT sc-gFeNAA jKnVcE dmKkMX">

                                                                        <div class="sc-kTGBUR sc-kSmoGW bMLPsr esjFgQ">

                                                                            <label class="radio">
                                                                                <div class="sc-knuRna sc-dvogsP fsqhgA hwQySw">
                                                                                    <p class="circle">C</p>

                                                                                    <?php

                                                                                    if ($quest->add_by_import == '1'  && !empty($quest->file_c)) {
                                                                                    ?>

                                                                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_c; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option3)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option3; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php   } else if (isset($quest->file_c)  && !empty($quest->file_c)) { ?>




                                                                                        <img width="250px ; height:250px;" src="<?= base_url() ?>admin/uploads/question_image/<?php echo $quest->file_c; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option3)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option3; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php } else { ?>

                                                                                        <?php if (!empty($quest->option3)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option3; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php } ?>
                                                                                </div>
                                                                                <input type="radio" value="option_3" name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                                                <span class="outer"></span>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="margin-bottom: 2%; width: 100%;">
                                                                    <div class="sc-cQwIYT sc-gFeNAA jKnVcE dmKkMX">

                                                                        <div class="sc-kTGBUR sc-kSmoGW bMLPsr esjFgQ">
                                                                            <label class="radio">
                                                                                <div class="sc-knuRna sc-dvogsP fsqhgA hwQySw">
                                                                                    <p class="circle">D</p>

                                                                                    <?php

                                                                                    if ($quest->add_by_import == '1'  && !empty($quest->file_d)) {
                                                                                    ?>

                                                                                        <img width="250px ; height:250px;" src="<?php echo $quest->file_d; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option4)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option4; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php   } else if (isset($quest->file_d)) { ?>




                                                                                        <img width="250px ; height:250px;" src="<?= base_url() ?>admin/uploads/question_image/<?php echo $quest->file_d; ?>" alt="bansal-pathshala">
                                                                                        <?php if (!empty($quest->option4)) { ?>
                                                                                            <p style="color:#000"><?php echo $quest->option4; ?></p>
                                                                                        <?php } ?>

                                                                                    <?php } else { ?>
                                                                                        <?php if (!empty($quest->option4)) { ?>
                                                                                            <p style="color:#000"><?php echo  $quest->option4; ?></p>
                                                                                        <?php } ?>
                                                                                    <?php } ?>
                                                                                </div>
                                                                                <input value="option_4" type="radio" name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                                                <span class="outer"></span>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php $counter++;
                                            }
                                        } ?>
                                        <input type="hidden" name="quizid" value="<?php echo $question[0]->quiz_id; ?>">
                                    </form>
                                </div>
                                <div id="bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="sc-eELIPF kLdFyT disable-color-transition">
                <div class="sc-bPPhlf hVWBOg"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAATCAYAAACtHkzTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABxSURBVHgBzY5RDYAwDESbYGA4qAQcgYRJwMFwABZQgoRJQAJck5I0pOWTrMn7upfeERGxEl4F55e0gQscIHlC0i8ilejLoDUijZGUVWhlz2z2uPfUrF5YNKzkDJ00FPgdshmX6b9e+9rt7UAPdrB4wg0NkSscoXI9LQAAAABJRU5ErkJggg==" alt="sidebar-close"></div>
                <div class="sc-epVeNg gfUPrd">
                    <div class="sc-cBQgDv dqylZT">
                        <div class="sc-hrZiYQ fIURSk child">
                            <div color="#ffff" class="sc-hCDzWh dePesc">
                                <div class="sc-lbhYTY JocCd">0</div>
                            </div>
                            <label><span>Answered</span></label>
                        </div>
                        <div class="sc-hrZiYQ fIURSk child">
                            <div color="#ffff" class="sc-hCDzWh RrsUN">
                                <div class="sc-lbhYTY JocCd">1</div>
                            </div>
                            <label><span>Not Answered</span></label>
                        </div>
                        <div class="sc-hrZiYQ fIURSk child">
                            <div color="#110658" class="sc-hCDzWh dmWkcb">
                                <div class="sc-lbhYTY JocCd">23</div>
                            </div>
                            <label><span>Not Visited</span></label>
                        </div>
                        <div class="sc-hrZiYQ fIURSk child">
                            <div color="#ffff" class="sc-hCDzWh jFrKFH">
                                <div class="sc-lbhYTY JocCd">0</div>
                            </div>
                            <label><span>Marked for Review</span></label>
                        </div>
                        <div class="sc-hrZiYQ fIURSk child">
                            <div color="#ffff" class="sc-hCDzWh kEjOVh">
                                <div class="sc-lbhYTY JocCd">0</div>
                            </div>
                            <label><span>Answered and Marked for Review</span></label>
                        </div>
                    </div>
                    <div class="sc-dVMcbP jvBxqW">English</div>
                    <p style="text-align: left; margin: 0px; padding: 1rem;"><span>Choose a Question</span></p>
                    <div class="sc-cNQtGM ishIwY display-scroll-bar" style="max-height: 40vh; padding-left: 0.83rem; padding-right: 1.66rem;">
                        <?php

                        if (count($question) > 0) {
                            $counter = 1;

                            foreach ($question as $quest) {

                        ?>
                                <div class="sc-iLvKtB gUGIBK" id="question_<?php echo $counter; ?>" style="width: 20%; padding: 0.4rem 0px;">
                                    <div color="#ffff" class="sc-hCDzWh kNGLmz">
                                        <div class="sc-lbhYTY eOngxn"><?php echo $counter; ?></div>
                                    </div>
                                </div>

                        <?php $counter++;
                            }
                        } ?>

                    </div>
                </div>
            </aside>
        </div>
        <div class="sc-jnCuNW eFeRNr">
            <input type="button" name="preview" id="defaultbtnprv" class="previous action-button" value="Previous" />
            <input type="button" name="next" id="defaultbtnnxt" class="save_btn next action-button" value="Next" />
            <input type="submit" name="submit" id="sbmtbtn" onclick="return submitAnswer();" class="action-button" value="Submit" />

        </div>
    </div>
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
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("mouseover", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });

        jQuery(".hVWBOg").click(function() {
            jQuery("body").toggleClass("hide_sidebar");
        });
        jQuery(".gUGIBK").each(function() {
            jQuery(this).click(function() {
                var id = jQuery(this).attr("id");
                console.log(id);
                jQuery("#" + id + ".question_row").show().addClass("current_que").siblings().hide();
                jQuery(this).find(".sc-hCDzWh").addClass("ehuHuo");
                jQuery(this).prevAll().find(".sc-hCDzWh").addClass("ehuHuo");
                jQuery(this).find(".sc-hCDzWh").removeClass("kNGLmz");
                jQuery(this).prevAll().find(".sc-hCDzWh").removeClass("kNGLmz");


            });
        });
        jQuery("#defaultbtnnxt").click(function() {
            jQuery(".question_row").hide();
            jQuery(".current_que").removeClass("current_que").nextAll(".question_row").first().addClass("current_que").show();
            if (jQuery(".question_row:last-child").hasClass("current_que")) {
                jQuery(this).addClass("disable");
            } else {
                jQuery(this).removeClass("disable");
            }
        });
        jQuery("#defaultbtnprv").click(function() {
            jQuery(".question_row").hide();
            jQuery(".current_que").removeClass("current_que").prevAll(".question_row").first().addClass("current_que").show();
            if (jQuery("#question_1").hasClass("current_que")) {
                jQuery(this).addClass("disable");
            } else {
                jQuery(this).removeClass("disable");
            }
        });


    });




</script>
<script>

    var button = document.getElementById('sbmtbtn');
    var form = document.getElementById('msform');


    // Add an event listener to the button
    button.addEventListener('click', function() {
      // Check if the checkbox is checked before submitting the form

        form.submit();

    });
  </script>
<!-- dropdown menu -->

</body>

</html>
