<?php
session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0018)http://oumbox.com/ -->
<html style="padding-right: 0px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>E-cabinet</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/micons.css') ?>" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css//materialize.min.css') ?>" media="screen,projection">
    <style>
        html {
            background: #C3E6F3 no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="collapsible-header pink lighten-2 white-text waves-effect waves-light active"><span class="micons-clock prefix"></span> Nouveau rendez-vous</div>
            <div class="card-panel">
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <div class="input-field col s6">
                                <span class="micons-user prefix"></span>
                                <input id="first_name" type="text" data-kwimpalastatus="alive" data-kwimpalaid="1567968190414-18">
                                <label for="first_name">First Name</label>
                            </div>

                            <div class="input-field col s6">
                                <span class="mdi-action-account-circle prefix"></span>
                                <input id="last_name" type="text" data-kwimpalastatus="alive" data-kwimpalaid="1567968190414-19">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <span class="micons-mail prefix"></span>
                                <input id="email5" type="email" data-kwimpalastatus="alive" data-kwimpalaid="1567968190414-20">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <span class="micons-padlock prefix"></span>
                                <input id="password6" type="password" data-kwimpalastatus="alive" data-kwimpalaid="1567968190414-7">
                                <label for="password">Password</label>
                            </div>
                        </div>



                        <div class="row">
                            <div class="input-field col s12">
                                <span class="micons-notes prefix"></span>
                                <textarea id="message5" class="materialize-textarea"></textarea>
                                <label for="message" class="">Message</label>
                                <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Envoyer
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


<script src="<?php echo base_url("assets/js/jquery-3.2.0.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/materialize.js"); ?>"></script>


</html>