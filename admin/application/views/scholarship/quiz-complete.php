<?php

$name = $this->session->userdata('first_name');
$title = $this->session->userdata('name_title');

?><style>
    section.quiz {
        padding: 40px 0px;
    }

    .sc-dGBNLl.eOzzRb {
        display: flex;
        min-width: 34rem;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        height: 100%;
        padding: 40px;
    }

    .sc-hGxJNH.eBSpRr {
        font-size: 19px;
        font-weight: 500;
        text-align: center;
    }

    .sc-bIStaS.bszDsO {
        margin: 0px;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .sc-gvSjmx.cgmFOy {
        display: flex;
        gap: 30px 40px;
        padding: 40px 0px;
        flex-direction: row;
        width: 675px;
        max-width: 100%;
    }

    .sc-hhfWkW.bCMxtz {
        display: flex;
        width: 33.33%;
        -webkit-box-pack: end;
        justify-content: end;
        -webkit-box-align: center;
        align-items: center;
    }

    .sc-hhfWkW.bCMxtz span {
        font-size: 14px;
        font-weight: 500;
    }

    .sc-jLFzpH.cTJoFy span {
        color: rgb(9, 2, 54);
    }

    .sc-kZPSHH.jMBnMQ {
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
        background: url(data:image/png;base64,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) center center no-repeat;
        cursor: default;
    }

    .sc-kZPSHH.cumUVB {
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
        background: url(data:image/png;base64,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) center center no-repeat;
        cursor: default;
    }

    .sc-kZPSHH.cnYFyb {
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
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPVSURBVHgB1Vm9bhtHEP5ml0edHARZpUvHJlUiKH4CM09gurHoNJafQPITWKmSLlCVdFY6Oo3FKkilc+dOCuAA6Uy/gH2AYfhA+nY8s5QOpEEbPEqk1l9D3t3e7bd7c/PzDeECcOg4NJttw3SDCS2AfgCTA7ELA5hykB/oL4FPPfETDIdZjqMcC4KwAFyj2ybCA7m7xYyBPKYPXw6QmFOkRZ7nY0LOyYLeXGuBvYNBG4wbcl9bVnLE4D/z4V9HqIlahF3zdodgfqtIfvH28Jzc3M8Ii0g7QnqXiJw86+d81Duc9/65CDt0W5TgIeuBTvCul+ESEN6UwUM1GR7xrRy9AS4Kl/y0u9HsPndrd/awJLi17b1LmcM1uw/Cg9JuC0uGzqFzfS1zYhGMyW6fBJtbEQLpZPukNumrIFvNLa6yFunKZldgBh/loKQ/YtM0PVC8QRPHbPBjXlzCF3sB6IaRFy5D4TLhPczkIEr4MRMdXDVZhXJg4gN1pzMHuKS7o68BkUF4HWvAOj+udlhDLXvcQ2yQQKXRdeqcs7c7G8mdE0SKsMsSFfV/2GGydFeSkQNEC+qHZEv/qQuhZvqKh8XGRdK+ZeKM44lwvG5gm5r2ZbGSVSi3kCHa9baBsW1Jvp8gelDfGC+EwVvwyBA7pEDwUjAYKV2kpCmjNYcKUs0QaEt22LQwGg0QO4oiDz5CohvjM4FyNfjMYLSeCuV65BhzpNyIhpAjvfYVYkeSiFyAgbq1U4z4OmIHW9lhzg2zeYGGqjaRQ4QYccH/GnHIGXm+idghqpH3JjMoh5lKTjF/eCH5UYmrfJuZKrFYW99BrEjSjqS/feU69sOa1UdsFmK7uyjN4dTJUFafZfUxQTlN1ppVpOPS3z/P6mOCioWqcM68GGqnJYp+dTEWdbanas3pXMLiHjHvqqCCK0YQdcjvsaFbk+enCFfihag/V+nmKgVqhqhjPxxclP89Te33G2TtL2n57aMC/xdYIcYFp/1bkvVHr4a9Xz+8bmfdVJTPstRufjMmvflPgWcrqUjGZNeOhWz/5bC3j7oQ2XU/uLsV2LTOcSZo739qnP3UxbDTje9IhJbf08YmyfFTLAHqDajBf6jNzjKDSczXlFHps+TH0K6P6G+X2pRRTU8PxEPNo5rWa3uJwjkOLiz5Bx1gVBzVFWCC90nWdyTc3gx9Pvj7dfp1izUWRTyEtXdl0o6qRkGIUW1D5QKpwM8XEcilqYP30iG1rYqkJlsLts8WIlwR1x7Ia5G6GtSGpy3ZeUcqG0y1buVtgE6lhfsC7zjDl9K6zReXxd4DCWOk1ppkNAYAAAAASUVORK5CYII=) center center no-repeat;
        cursor: default;
    }

    .score_text {
        padding-bottom: 30px;
        display: block;
    }

    .score_text h6 {
        color: #222;
        font-weight: 500;
        font-size: 20px;
        display: flex;
        align-items: center;
    }

    .score_text h6 span {
        color: #0786d3 !important;
        font-weight: 600;
        font-size: 30px;
        margin-left: 7px;
        border-bottom: 2px solid #258cca;
        line-height: 1.3em;
    }

    .sc-dHnBmY.gsTMFI {
        display: flex;
    }

    .sc-jEsDcK.nlYpE {
        padding: 10px 20px 12px 20px;
        font-size: 0.9rem;
        font-weight: 500;
        text-align: center;
        position: relative;
        background: #258cca;
        border-radius: 3em;
        cursor: pointer;
        outline: none;
        line-height: 1.5em;
    }

    .sc-jEsDcK.nlYpE:hover {
        background: #0f79b9;
    }

    .sc-jEsDcK.nlYpE span {
        color: #fff;
    }
</style>

<section class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div height="auto" width="auto" class="sc-jLFzpH cTJoFy" style="z-index: 11; box-shadow: rgb(189, 212, 255) 0px 4px 28px 8px; border: none; color: rgb(9, 2, 54);">
                    <div class="sc-iaUDOe cmGYeB">
                        <div class="sc-dGBNLl eOzzRb">
                            <img alt="test-feedback" src="https://www.embibe.com/static/media/clipboard.a65cfbfd.svg" style="height: 5rem; width: 5rem; margin-bottom: 1rem;">
                            <div class="sc-hGxJNH eBSpRr">
                                <span>You have successfully completed your quiz.</span>
                            </div>
                            <div class="sc-bIStaS bszDsO">
                                <div class="sc-gvSjmx cgmFOy">
                                    <div class="sc-hhfWkW bCMxtz">
                                        <div class="sc-eqhNQH fGWpZm">
                                            <span>Correct Answered</span>
                                        </div>
                                        <div color="#ffff" class="sc-kZPSHH jMBnMQ">
                                            <div class="sc-diYIgC drHTGO"> <?php echo count($correct);
                                                                            ?> </div>
                                        </div>
                                    </div>
                                    <div class="sc-hhfWkW bCMxtz">
                                        <div class="sc-eqhNQH fGWpZm">
                                            <span>Wrong Answered</span>
                                        </div>
                                        <div color="#ffff" class="sc-kZPSHH cumUVB">
                                            <div class="sc-diYIgC drHTGO"> <?php echo count($result) - count($correct);
                                                                            ?> </div>
                                        </div>
                                    </div>
                                    <div class="sc-hhfWkW bCMxtz">
                                        <div class="sc-eqhNQH fGWpZm">
                                            <span>Questions attempted</span>
                                        </div>
                                        <div color="#110658" class="sc-kZPSHH cnYFyb">
                                            <div class="sc-diYIgC drHTGO"> <?php echo count($result);
                                                                            ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="score_text">
                                <h6>Your score is <span><?php $correct = count($correct);
                                                        $number_of_minus_from_total_mark = (int)count($result) - (int)$correct;
                                                        $total_minus_mark = $number_of_minus_from_total_mark * (int)$negative_mark;
                                                        $total_correct_mark = (int)$correct * (int)$mark_for_correct_answer;
                                                        echo $final_marks = (int)$total_correct_mark - (int)$total_minus_mark;
                                                        ?></span></h6>
                            </div>
                            <div class="sc-dHnBmY gsTMFI"><a href="<?php echo base_url(); ?>" class="sc-jEsDcK nlYpE undefined "><span>Back To Home
                                    </span></a></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
