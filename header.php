<style>
   .div{
    position: fixed;	
    top: 0;
    left: 0;
    z-index: 999;
    width: 100%;
	/* padding-right: 71px; */
    /* transition: background-color 0.5s; */
    background-color: #101010;
	margin-bottom: 40px;
	/* margin-left: 200px; */
    }
    a{
	text-decoration: none;
	/* color: white; */
	color: #fff;
	margin-left: 15px;		
 }

 .container{
    max-width: 100%;
    height: 15px;
    margin-inline: auto;
    padding-inline: 0;
 }
 .nav{
    height: 75px;
    display: flex;	
    align-items: center;
    /* justify-content: space-between; */
    border-bottom: 2px solid 
    rgba(255, 255, 255, 0.05);
    transition: height 0.25;
 }
 .button{
	/* display: inline-block; */
	margin-left: 850px;
	color: #16ff00;


 }
 .back{
	height: 25px;
  width: 25px;
  margin-left: 900px;
  text-align: center;
  border-radius: 50%;
  /* display: inline; */
  background-color: #1a4d2e;
 }
 .btback{
	color: #16ff00;
	cursor: pointer;
	
 }
 .div.div--active{
    background-color: #17181a;
    box-shadow: 0 3px 10px
    rgba(0, 0, 0, 0.1);
 }
 .div.div--active .nav{
    height: 60px;
 }
 .nav__logo-image
 {
    width: 150px;
 }
 .bt{
    margin-left: 110px;
	margin-right: -30px;
 }
</style>
<div class="div">
        <nav class="nav container">
            <a href="../../index.php" class="nav__logo">
                <img src="../../images/logo.png" alt="" class="nav__logo-image" />
            </a>
            <a class="bt" href="../../index.php">Home</a>
            <a class="bt" href="../../index.php">about us</a>
            <a class="bt" href="../../index.php">Contact</a>
               <a href="../courses.php"><div class="back">
				<p class="btback"><b><</b></p></div>
				</a>
        </nav>
    </div>