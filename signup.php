<?php include 'section/header.php'; ?>



<header class="header">
    <section class="header-top">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="index.php" class="header-logo__link">Blogs</a>
                </div>
                <nav class="menu">

                    <li class="menu__item"><a class="menu-item__link" href="">HOME</a></li>
                    <li class="menu__item"><a class="menu-item__link" href="">ABOUT US</a></li>
                    <li class="menu__item"><a class="menu-item__link" href="">FIND BLOGS</a></li>
                    <li class="menu__item"><a class="menu-item__link" href="">SIGN UP</a></li>
                    <li class="menu__item"><a class="menu-item__link" href="">LOGIN IN</a></li>
                </nav>
            </div>

        </div>
    </section>



    <section class="header-bottom">
        <div class="container">
            <div class="header-bottom__wrapper">
                <div class="signup-form">

                    <form class="form" action="/includes/signup.inc.php" method="post">
                        <h2>Sign Up</h2>
                        <input type="text" name="name" id="" placeholder="Full name...">
                        <input type="email" name="email" id="" placeholder="Email...">
                        <input type="text" name="uid" id="" placeholder="Username...">
                        <input type="password" name="pwd" id="" placeholder="Password...">
                        <input type="password" name="pwdrepeat" id="" placeholder="Repeat password...">
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                </div>

            </div>
        </div>
    </section>



</header>
<?php include 'section/footer.php'; ?>