
<script>
    var vx = 50;
    var vy = 50;
    var currentx = 0;
    var currenty = 0;

    $(document).ready(function () {
        animateIMG();

    });

    function makeNewPosition() {

        // Get viewport dimensions (remove the dimension of the div)
        var h = $(window).height() - 100;
        var w = $(window).width() - 100;

        var nh = Math.floor(Math.random() * 10) + 10;
        var nw = Math.floor(Math.random() * 10) + 10;


        return [nh, nw];

    }

    function animateIMG() {
        // var newq = makeNewPosition();
        var h = $(window).height();
        var w = $(window).width();

        var nh = Math.floor(Math.random() * 30);
        var nw = Math.floor(Math.random() * 30);

        if (currentx < 100)
            vx = nh;
        if (currentx > w - 100)
            vx = -nh;
        if (currenty < 100)
            vy = nw;
        if (currenty > h - 100)
            vy = -nw;

        currentx += vx;
        currenty += vy;


        $('.flying_mess').animate({top: (currenty), left: (currentx)}, function () {
            animateIMG();
        });

    }
    ;


</script>




<div class="login_wrap ios_font">
    <div  class="flying_mess"><b></b><br/><a href="index.php?option=notes"><img src="./lib/notif.gif" /></a></div>
    <div class="container" >
        <div class="col-lg-4 col-lg-offset-4">
            <div class="panel member_signin">
                <div class="panel-body">
                    <div class="fa_user">
                        <img src="./lib/tag/donkey_avatar.png " />  <img src="./lib/tag/carrot_avatar.png " />
                    </div>
                    <p class="member sizexxl bold">DonkeyAndCarrot</p>
                    <form  class="loginform" method="POST" >
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="sr-only">Email address</label>
                            <div class="input-group">
                                <input type="text" name="txtUsername" class="form-control" id="exampleInputEmail1"
                                       placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="sr-only">Password</label>
                            <div class="input-group">
                                <input type="password" name="txtPassword" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-md login sizexl">LOG IN</button> 
                    </form>
                    <p class="forgotpass"><a href="#" class="small">Forgot Password?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>