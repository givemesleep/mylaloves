<?php 
    $message1 = "
    Hi Wifey! Happy 20th Monthsarry! I love you so much! I'm so grateful to have you in my life. You are my everything.
    But I knew there are things that happened on us issues that I can't fix it and I'm sorry for that.
    Even you say you are not mad I still want to say sorry for everything. I love you so much!
    Wifey this 20th Monthsarry we have I want to say that you are the love of my life and I want to spend the rest of my life with you.
    I also want to grew old with you and fix every little, big problems we had. <br>
    <br>
    I am sorry and I love you my love.
    ";

    $message2 = "
    Wifey! uhm alam ko at this moment naiinis ikaw, galit or kung ano man iyan. Pero alam ko na mali talaga iyon and inaamin ko.
    Daming kalokohan and mga bagay na dapat ko ihingi ng sorry, mga bagay na dapat baguhin at ayusin ko. I love you lalove tumatanda
    na pala tayo and hindi na dapat isip bata pa rin, hindi na muna ako mangangako but gusto kong baguhin sarili ko para sayo at para 
    sa future natin gusto kita hanggang dulo, at dapat pangatawanan ko iyong bagay na iyon. Kailangan ingatan, alagaan at mahalin kita
    ng lubos pa sa iniisip at inaakala mo. I love you laloves sana if bibigyan mo ako chance na mabago sarili ko, samahan mo ako at wag
    iwanan sa mga oras na ito. I love you my love I need you in my life so please stay with me even in this time na nakakapagod na ako sa
    paulit ulit na pang yayari, sana ituring mo pa rin akong pahinga kahit ako na mismo ang nakakapagod. <br>
    <br>
    I love you my Ms. Pia Mabutin.
    ";

    $message3 = "
    So Lastly this is so advance and I made it for a quite rush like 40 mins so far, but I wanna say I love you so much laloves and 
    Happy 20th Monthsarry, dinaan ko na lang sa coding itong monthsarry natin, I love you so much and I want to spend the rest of my life with you.
    I hope you won't leave me and obviously I don't wanna loss you especially in this battle. We are strong and we are team right. So I want to
    fix it with you and be with you forever and ever mwaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa. I love you so much laloves. <br>
    <br>
    Your Husto mwaaaaaaaaaa
    ";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MY LALOVES</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/bunny.png" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php require_once 'nav.php'; ?>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-dark fw-bolder mb-0">Messages</h2>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-dark fw-bolder mb-2">2024 - Present</div>
                                                <div class="small fw-bolder">20th Monthsarry</div>
                                                <div class="small text-muted">June 16, 2024</div>
                                                <div class="small text-muted">Sunday</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div><?php echo $message1; ?></div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                    <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                                        <img class="img-fluid" src="assets/bunny.png" alt="">
                                    </div>
                                        <div class="col-lg-8"><div><?php echo $message2;  ?></div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 3-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                    <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                                        <img class="img-fluid" src="assets/copbuns.jpg" alt="">
                                    </div>
                                        <div class="col-lg-8"><div><?php echo $message3;  ?></div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php require_once 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
