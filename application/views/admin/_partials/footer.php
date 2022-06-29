<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap');
body{
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;

}
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
.container{
    max.width: 1170px;
    margin:-20px auto;
    padding: 0 left;
}
.row{
    display: flex;
    flex-wrap: wrap;
}
ul{
    list-style: none;
}
.footer{
    background.color: #e74a3b;
    padding: 78px 0;

}
.footer-col{
    width: 20%;
    margin: 0 15px; 
    padding: 0 15px;
}
.footer-col h4{
    font-size: 18px;
    color: #fff;
    text-transform: capitalize;
    margin-bottom: 20px;
    font-weight: 50;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -8px;
    background-color: #e74a3b;
    height: 5px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 5px;
}
.footer-col ul li a{
    font-size: 20px:
    text-transform: capitalize;
    color: #e74a3b;
    text-decoration: none;
    font-weight: 100;
    color: #fff;
    display: block;
    transition: all 0.3% ease;
}
.footer-col ul li a:hover{
    color: #e74a3b;
    padding-left: 3px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    Line-height: 40px;
    border-radius: 50%;
    color: #fff;
    transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #e74a3b;
}
/*responsive*/
@media(max-width : 767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
}
}
@media(max-width : 574px){
    .footer-col{
        width: 100%;
        margin-bottom: 30px;
}
}
</style>
<!------ End of Footer ------>

