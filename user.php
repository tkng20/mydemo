<?php
  include_once('header.php');
?>

<div id="id01" class="modal1">
        <form class="modal-content animate" action="includes/login.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="image/sk12.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="login">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
</div>

<div id="id02" class="modal2">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="includes/signup.php" method="post">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Confirm Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn" name="submit">Sign Up</button>
                </div>
            </div>
        </form>
</div>

<div class="container" id="banner">
        <div class="row">
            <div class="col-md-9">
                <div class="slideshow-container">
                    <div class="mySlides hover-shadow">
                        <div class="numbertext">2 / 3</div>
                        <img src="image/banner1.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 3</div>
                        <img src="image/banner2.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sidebarContent hover-shadow cursor"><img src="image/slide4.jpg" style="width:100%;height:120px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                    <div class="sidebarContent hover-shadow cursor"><img src="image/cake.gif" style="width:100%;height:120px;"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
    
<div class="container" id="cake">
        <h3>CAKE</h3>
        <hr style="border-color: #007697;">
        <div class="row">
            <div class="col-md-2">
                <div class="product hover-shadow cursor">
                    <img src="image/c1.jpg" style="width:100%">
                    <div class="txt">
                        <p>Strawberry Cream</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product hover-shadow cursor">
                    <img src="image/c2.jpg" style="width:100%">
                    <div class="txt">
                        <p>Blueburry Cream</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product hover-shadow cursor">
                    <img src="image/c3.jpg" style="width:100%">
                    <div class="txt">
                        <p>Cherry Cream</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product hover-shadow cursor">
                    <img src="image/c4.jpg" style="width:100%">
                    <div class="txt">
                        <p>Purple Cake</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product hover-shadow cursor">
                    <img src="image/c5.jpg" style="width:100%">
                    <div class="txt">
                        <p>Pink Cake</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="product hover-shadow cursor">
                    <img src="image/c6.jpg" style="width:100%">
                    <div class="txt">
                        <p>Orange Cream</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-color: #007697;">
        <div class="row">
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c11.jpg" style="width:100%"  >
                    <div class="txt">
                        <p>Chocolate Cake</p>
                        <p>80,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c7.jpg" style="width:100%">
                    <div class="txt">
                        <p>Macaroon</p>
                        <p>80,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c8.jpg" style="width:100%" >
                    <div class="txt">
                        <p>Fruit Cake</p>
                        <p>80,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c9.jpg" style="width:100%" >
                    <div class="txt">
                        <p>Cherry Cake</p>
                        <p>80,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c10.jpg" style="width:100%">
                    <div class="txt">
                        <p>Fruit Cake</p>
                        <p>80,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c12.jpg" style="width:100%">
                    <div class="txt">
                        <p>Fruit Cake</p>
                        <p>80,000</p>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-color: #007697;">
        <div class="row">
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c13.jpg" style="width:100%" onclick="openModal();currentSlide(1)">
                    <div class="txt">
                        <p>CUP CAKE</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c14.jpg" style="width:100%" >
                    <div class="txt">
                        <p>CUP CAKE</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c15.jpg" style="width:100%" >
                    <div class="txt">
                        <p>CUP CAKE</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c16.jpg" style="width:100%" >
                    <div class="txt">
                        <p>CUP CAKE</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c17.jpg" style="width:100%">
                    <div class="txt">
                        <p>CUP CAKE</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="product hover-shadow cursor">
                    <img src="image/c18.jpg" style="width:100%">
                    <div class="txt">
                        <p>CUP CAKE</p>
                        <p>50,000</p>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="container" id="drink">
        <h3>DRINK</h3>
        <hr style="border-color: #007697;">
        <div class="row">
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d1.jpg" style="width:100%"  class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d2.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d3.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d4.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d5.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d6.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
        </div>
        <hr style="border-color: #007697;">
        <div class="row">
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d7.jpg" style="width:100%"  class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d8.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d10.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d9a.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d11.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d12.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
        </div>
        <hr style="border-color: #007697;">
        <div class="row">
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d13.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d14.jpg" style="width:100%"  class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d15.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d16.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d17.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
            <div class="col-md-2">
                <div class="product">
                    <img src="image/d18.jpg" style="width:100%" class="hover-shadow cursor">
                </div>
            </div>
        </div>
</div>

<button class="open-button" onclick="openForm()">&#x1F4AC;Chat</button>
<div class="chat-popup" id="myForm">
  <form action="includes/message.php" class="form-container" method="post">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn" name="send">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<?php
include_once('footer.php');
?>